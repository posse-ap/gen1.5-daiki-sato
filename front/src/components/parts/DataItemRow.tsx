import { Box } from '@mui/material';
import React, { ReactNode } from 'react';

const DataItemRow = ({ title, children }: { title: string; children: ReactNode }) => {
  return (
    <Box key={title} sx={{ display: 'flex', alignItems: 'center', gap: 1 }}>
      <Box sx={{ width: '40%', color: '#666', fontWeight: 300 }}>{title}</Box>
      {children}
    </Box>
  );
};

export default DataItemRow;
