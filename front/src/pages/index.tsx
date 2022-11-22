import { Box, Typography } from '@mui/material';
import React from 'react';

const Home: React.FC = () => {
  return (
    <Box sx={{ p: 2, display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <Typography variant="h5" align="center" sx={{ mt: 2 }}>
        マイページ
      </Typography>
    </Box>
  );
};

export default Home;
