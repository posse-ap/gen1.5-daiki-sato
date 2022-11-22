import React, { useEffect } from 'react';
import { useLocation, useNavigate } from 'react-router-dom';

const LOGIN_URL = process.env.REACT_APP_SAASUS_URL ?? '';

const Callback = () => {
  const location = useLocation();
  const navigate = useNavigate();
  const urlParam = new URLSearchParams(location.search);
  const idToken = urlParam.get('idToken') as string;

  useEffect(() => {
    if (idToken) {
      localStorage.setItem('SaaSusIdToken', idToken);
      navigate('/');
    } else {
      window.location.href = LOGIN_URL;
    }
  }, [navigate]);

  return <></>;
};

export default Callback;
