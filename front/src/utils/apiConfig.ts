import { Configuration } from '@/generated/types/typescript-axios'

export const ApiConfig = () => {
  if (typeof window !== 'undefined') {
    const jwtToken = window.localStorage.getItem('idToken')
    const apiConfig = new Configuration({
      accessToken: jwtToken || 'dummyToken',
      basePath: process.env.NEXT_PUBLIC_API_ENDPOINT,
    })
    return apiConfig
  }
}
