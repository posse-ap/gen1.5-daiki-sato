import { Box } from '@mui/material';
import React, { useEffect, useState } from 'react';
import { createContext } from 'react';
import { Outlet } from 'react-router-dom';

import Footer from './Footer';
interface ContextInterface {
  thisYear: number;
  thisMonth: number;
}
const value = {
  thisYear: 0,
  thisMonth: 0,
};
export const MonthYearContext = createContext<ContextInterface>(value);
const Layout = () => {
  const today = new Date();
  const [thisYear, setThisYear] = useState<number>(0);
  const [thisMonth, setThisMonth] = useState<number>(0);
  const value = { thisYear, thisMonth };

  useEffect(() => {
    setThisYear(today.getFullYear());
    setThisMonth(today.getMonth() + 1);
  }, []);

  return (
    <>
      <MonthYearContext.Provider value={value}>
        <Box sx={{ backgroundColor: '#f5f5f5', minHeight: 'calc(100vh - 200px)' }}>
          {/* <Header
          nickname={authContext.nickname ?? ''}
          menuEl={anchorEl}
          handleAccountMenuOpen={handleAccountMenuOpen}
          handleMenuOpen={handleMenuOpen}
          handleMenuClose={handleMenuClose}
          handleMenuItemClick={handleMenuItemClick}
        /> */}
          {/* Main contents */}
          <Box component="main">
            <Outlet />
          </Box>
        </Box>

        {/* Footer */}
        <Footer />
      </MonthYearContext.Provider>
    </>
  );
};

export default Layout;
