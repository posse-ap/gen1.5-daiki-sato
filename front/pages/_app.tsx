import '../styles/globals.css'

import type { AppProps } from 'next/app'
import { SnackbarProvider } from 'notistack'

const MyApp = ({ Component, pageProps }: AppProps) => (
  <SnackbarProvider>
    <Component {...pageProps} />
  </SnackbarProvider>
)

export default MyApp
