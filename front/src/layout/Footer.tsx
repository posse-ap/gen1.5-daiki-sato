import { KeyboardDoubleArrowLeft, KeyboardDoubleArrowRight } from '@mui/icons-material';
import { Box, IconButton, Typography } from '@mui/material';
import React from 'react';
import { useContext } from 'react';

import { MonthYearContext } from '@/layout/Layout';

export default function Footer() {
  const value = useContext(MonthYearContext);
  const thisYear = value?.thisYear;
  const thisMonth = value?.thisMonth;

  return (
    <Box
      component="footer"
      sx={{
        backgroundColor: '#f5f5f5',
        fontSize: 12,
        height: '200px',
        display: 'flex',
        flexDirection: 'column',
        justifyContent: 'center',
        alignItems: 'center',
        width: '100%',
      }}
    >
      <Box
        component="div"
        sx={{
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center',
        }}
      >
        <IconButton color="primary" aria-label="back to month">
          <KeyboardDoubleArrowLeft />
        </IconButton>
        <Typography component="span" sx={{ p: 1, mx: 2 }}>
          {thisYear}年 {thisMonth}月
        </Typography>
        <IconButton color="primary" aria-label="next to month">
          <KeyboardDoubleArrowRight />
        </IconButton>
      </Box>
    </Box>
  );
}
