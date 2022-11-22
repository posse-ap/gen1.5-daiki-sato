import { Box } from '@mui/material';
import React from 'react';

import StudyingHour from '@/components/organisms/StudyingHour';

const Home: React.FC = () => {
  return (
    <Box sx={{ p: 2, display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <StudyingHour />
    </Box>
  );
};

export default Home;
