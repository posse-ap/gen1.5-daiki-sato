import { Box, Typography } from '@mui/material';
import React from 'react';

type Props = {
  studyingBoxName: string;
  studyHour: number;
};

const StudyingBox = ({ studyingBoxName, studyHour }: Props) => {
  return (
    <Box
      component="div"
      sx={{
        backgroundColor: '#fff',
        height: '120px',
        display: 'flex',
        flexDirection: 'column',
        justifyContent: 'center',
        alignItems: 'center',
        width: '70%',
        mx: 1,
        px: 2,
        py: 4,
      }}
    >
      <Typography variant="h4" sx={{ fontSize: 24, m: 2 }}>
        {studyingBoxName}
      </Typography>
      <Typography variant="h4" sx={{ color: 'text.success', fontSize: 34, m: 2 }}>
        {studyHour}
      </Typography>
      <Typography variant="h4" sx={{ fontSize: 24, m: 2 }}>
        hour
      </Typography>
    </Box>
  );
};

export default StudyingBox;
