import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';

import common from '@/locales/ja/common';
import pages from '@/locales/ja/pages';

i18n.use(initReactI18next).init({
  lng: 'ja',
  ns: ['common', 'pages'],
  resources: { ja: { common, pages } },
  react: {
    useSuspense: false,
  },
});

export default i18n;
