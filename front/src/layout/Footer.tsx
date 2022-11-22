import { Box } from '@mui/material';
import React from 'react';

export default function Footer() {
  return (
    <Box
      component="footer"
      sx={{
        backgroundColor: '#f5f5f5',
        fontSize: 12,
        height: '30px',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        width: '100%',
      }}
    >
      <img src="/copy-right.png" alt="" height={18} />
    </Box>
  );
}
