import { Button } from '@mui/material';
import React from 'react';
import { useNavigate } from 'react-router-dom';

import axios from '@/utils/axiosWithCredentials';

import { useAuth } from '../AuthContext'; //追加

const Home = () => {
  const navigate = useNavigate();
  const auth = useAuth(); // 追加

  const logout = () => {
    axios.get('/sanctum/csrf-cookie').then(() => {
      auth?.signout().then(() => {
        // 編集
        navigate('/login');
      });
    });
  };

  return (
    <div className="p-4">
      <h1>Home</h1>
      <p>Hello! {auth?.user?.name}</p>
      <Button variant="contained" onClick={logout}>
        ログアウト
      </Button>
    </div>
  );
};

export default Home;
