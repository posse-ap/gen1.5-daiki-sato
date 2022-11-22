import React from 'react';
import { I18nextProvider } from 'react-i18next';
import { Navigate, Route, Routes } from 'react-router-dom';

import Layout from '@/layout/Layout';
import i18n from '@/locales/i18n';
import Callback from '@/pages/callback/index';
import MyPage from '@/pages/MyPage';
import NotFound from '@/pages/NotFound';

function App() {
  return (
    <div>
      <I18nextProvider i18n={i18n}>
        <Routes>
          <Route path="/callback" element={<Callback />} />

          <Route path="" element={<Layout />}>
            <Route path="/" element={<Navigate to="/" />} />
            <Route path="/mypage" element={<MyPage />} />

            {/* 404 */}
            <Route path="*" element={<NotFound />} />
          </Route>
        </Routes>
      </I18nextProvider>
    </div>
  );
}

export default App;
