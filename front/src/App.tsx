import React from 'react';
import { Route, Routes } from 'react-router-dom';

import ProvideAuth from '@/AuthContext'; //追加
import Layout from '@/layout/Layout';
import Home from '@/pages/Home';
import Index from '@/pages/index';
import Login from '@/pages/Login';
import NotFound from '@/pages/NotFound';
import Register from '@/pages/Register';
import Top from '@/pages/Top';
function App() {
  return (
    <ProvideAuth>
      <div>
        <Routes>
          <Route path="/top" element={<Top />} />
          <Route path="/register" element={<Register />} />
          <Route path="/login" element={<Login />} />
          <Route path="/home" element={<Home />} />
          {/* <Route path="/callback" element={<Callback />} /> */}
          <Route path="" element={<Layout />}>
            {/* <Route path="/" element={<Navigate to="/index" />} /> */}
            <Route path="/index" element={<Index />} />
            {/* 404 */}
            <Route path="*" element={<NotFound />} />
          </Route>
        </Routes>
      </div>
    </ProvideAuth>
  );
}

export default App;
