import React from 'react';
import { I18nextProvider } from 'react-i18next';
import { Navigate, Route, Routes } from 'react-router-dom';

import Layout from '@/layout/Layout';
import i18n from '@/locales/i18n';
import Callback from '@/pages/callback/index';
import Home from '@/pages/index';
import NotFound from '@/pages/NotFound';

function App() {
  return (
    <div>
      {/* 多言語対応 https://itexplorer.hateblo.jp/entry/20170727-react-redux-react-i18next */}
      <I18nextProvider i18n={i18n}>
        <Routes>
          <Route path="/callback" element={<Callback />} />

          <Route path="" element={<Layout />}>
            <Route path="/" element={<Navigate to="/home" />} />
            <Route path="/home" element={<Home />} />
            {/* 404 */}
            <Route path="*" element={<NotFound />} />
          </Route>
        </Routes>
      </I18nextProvider>
    </div>
  );
}

export default App;
