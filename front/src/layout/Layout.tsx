import { Box } from '@mui/material';
import React from 'react';
import { Outlet } from 'react-router-dom';

import Footer from './Footer';

const Layout = () => {
  return (
    <>
      <Box sx={{ minHeight: 'calc(100vh - 200px)' }}>
        {/* Header navigation */}
        {/* <Header
          nickname={authContext.nickname ?? ''}
          menuEl={anchorEl}
          handleAccountMenuOpen={handleAccountMenuOpen}
          handleMenuOpen={handleMenuOpen}
          handleMenuClose={handleMenuClose}
          handleMenuItemClick={handleMenuItemClick}
        /> */}

        {/* Drawer menu */}
        {/* <SideMenu
          isAdmin={authContext?.roles?.some((role) => role.role_name === 'admin')}
          open={isMenuOpen}
          handleMenuItemClick={handleMenuItemClick}
          onClose={handleMenuClose}
        /> */}

        {/* Main contents */}
        <Box component="main">
          <Outlet />
        </Box>
      </Box>

      {/* Footer */}
      <Footer />
    </>
  );
};

export default Layout;
