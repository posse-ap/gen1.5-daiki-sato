import { Configuration } from '@/generated/types/typescript-axios';

export const ApiConfig = () => {
  if (typeof window !== 'undefined') {
    // const jwtToken = window.localStorage.getItem('SaaSusIdToken');
    const apiConfig = new Configuration({
      // accessToken: jwtToken || 'dummyToken',
      basePath: process.env.REACT_APP_API_ENDPOINT,
    });
    return apiConfig;
  }
};
