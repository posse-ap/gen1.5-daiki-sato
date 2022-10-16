import { Button } from '@mui/material'
import type { NextPage } from 'next'
import Link from 'next/link'

import styles from '../styles/Home.module.css'

const Home: NextPage = () => (
  <div className={styles.container}>
    <main className={styles.main}>
      <Link href="/users/" passHref>
        <Button variant="outlined">ユーザー画面へ</Button>
      </Link>
      <Link href="/harbors/discount" passHref>
        <Button variant="outlined">harbors割引</Button>
      </Link>
    </main>
  </div>
)

export default Home
