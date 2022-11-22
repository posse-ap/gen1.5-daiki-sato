import AccountCircle from '@mui/icons-material/AccountCircle';
import MenuIcon from '@mui/icons-material/Menu';
import { AppBar, Box, IconButton, Toolbar, Typography } from '@mui/material';
import React from 'react';

const Header = () => {
  return (
    <AppBar position="fixed" color="default">
      <Toolbar>
        <IconButton size="large" edge="start" color="inherit" aria-label="menu" sx={{ mr: 2 }}>
          <MenuIcon />
        </IconButton>
        <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
          <Box sx={{ display: 'flex' }}>
            <img src="/logo.png" alt="" height={40} />
          </Box>
        </Typography>

        <IconButton
          size="large"
          aria-label="account of current user"
          aria-controls="account-icon"
          aria-haspopup="true"
          color="inherit"
        >
          <AccountCircle />
        </IconButton>
      </Toolbar>
    </AppBar>
  );
};
export default Header;
