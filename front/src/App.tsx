import React from 'react';
import { Navigate, Route, Routes } from 'react-router-dom';

import Layout from '@/layout/Layout';
import Callback from '@/pages/callback/index';
import Home from '@/pages/index';
import NotFound from '@/pages/NotFound';

function App() {
  return (
    <div>
      <Routes>
        <Route path="/callback" element={<Callback />} />

        <Route path="" element={<Layout />}>
          <Route path="/" element={<Navigate to="/home" />} />
          <Route path="/home" element={<Home />} />
          {/* 404 */}
          <Route path="*" element={<NotFound />} />
        </Route>
      </Routes>
    </div>
  );
}

export default App;
