import React, { createContext, ReactNode, useContext, useEffect, useState } from 'react';
import { Navigate, Route, useLocation } from 'react-router-dom';

import axios from '@/utils/axiosWithCredentials';

interface User {
  id: number;
  name: string;
  email: string;
  email_verified_at: string | null;
  two_factor_recovery_codes: string | null;
  two_factor_secret: string | null;
  created_at: string;
  updated_at: string | null;
}
interface LoginData {
  email: string;
  password: string;
}
interface RegisterData {
  email: string;
  password: string;
  password_confirmation: string;
}
interface ProfileData {
  name?: string;
  email?: string;
}
interface authProps {
  user: User | null;
  register: (registerData: RegisterData) => Promise<void>;
  signin: (loginData: LoginData) => Promise<void>;
  signout: () => Promise<void>;
  saveProfile: (formData: FormData | ProfileData) => Promise<void>;
}
interface Props {
  children: ReactNode;
}
interface RouteProps {
  children: ReactNode;
  path: string;
}
interface From {
  from: Location;
}

const authContext = createContext<authProps | null>(null);

const ProvideAuth = ({ children }: Props) => {
  const auth = useProvideAuth();
  return <authContext.Provider value={auth}>{children}</authContext.Provider>;
};
export default ProvideAuth;

export const useAuth = () => {
  return useContext(authContext);
};

const useProvideAuth = () => {
  const [user, setUser] = useState<User | null>(null);

  const register = (registerData: RegisterData) => {
    return axios.post('/api/register', registerData).then((res) => {
      console.log(res, 'res');
      axios.get('api/user').then((res) => {
        setUser(res.data);
      });
    });
  };

  const signin = async (loginData: LoginData) => {
    try {
      const res = await axios.post('/api/login', loginData);
      console.log(res, 'res');
    } catch (error) {
      console.log(error, 'signin-error');
      throw error;
    }

    return axios
      .get('/api/user')
      .then((res) => {
        setUser(res.data);
      })
      .catch((error) => {
        console.log(error, 'error');
        setUser(null);
      });
  };

  const signout = () => {
    return axios.post('/api/logout', {}).then(() => {
      setUser(null);
    });
  };

  const saveProfile = async (formData: FormData | ProfileData) => {
    const res = await axios
      .post('/api/user/profile-information', formData, {
        headers: { 'X-HTTP-Method-Override': 'PUT' },
      })
      .catch((error) => {
        throw error;
      });
    if (res?.status == 200) {
      return axios
        .get('/api/user')
        .then((res) => {
          setUser(res.data);
        })
        .catch((error) => {
          console.log(error, 'error');
          setUser(null);
        });
    }
  };

  useEffect(() => {
    axios
      .get('/api/user')
      .then((res) => {
        setUser(res.data);
      })
      .catch((error) => {
        console.log(error, 'error');
        setUser(null);
      });
  }, []);

  return {
    user,
    register,
    signin,
    signout,
    saveProfile,
  };
};

/**
 * 認証済みのみアクセス可能
 */
export const PrivateRoute = ({ children, path }: RouteProps) => {
  const auth = useAuth();
  return (
    <Route
      path={path}
      element={
        auth?.user == null ? (
          <Navigate
            replace
            to={{
              pathname: '/login',
            }}
          />
        ) : (
          children
        )
      }
    />
  );
};

/**
 * 認証していない場合のみアクセス可能（ログイン画面など）
 */
export const PublicRoute = ({ children, path }: RouteProps) => {
  const auth = useAuth();
  const location = useLocation();

  return (
    <Route
      path={path}
      element={
        auth?.user == null ? (
          children
        ) : (
          <Navigate
            replace
            to={{
              pathname: (location.state as From) ? (location.state as From).from.pathname : '/',
            }}
          />
        )
      }
    />
  );
};
