import { Box } from '@mui/material';
import React, { useContext, useEffect, useState } from 'react';

import StudyingHour from '@/components/organisms/StudyingHour';
import VerticalBarChart from '@/components/organisms/VerticalBarChart';
import { OneMonthStudyTimeInner, StudyingHourApi } from '@/generated/types/typescript-axios';
import { MonthYearContext } from '@/layout/Layout';
import { ApiConfig } from '@/utils/apiConfig';
const index: React.FC = () => {
  const value = useContext(MonthYearContext);
  const yearId = value?.thisYear;
  const monthId = value?.thisMonth;
  const [oneMonthStudyTimes, setOneMonthStudyTimes] = useState<OneMonthStudyTimeInner[]>([
    {
      id: 0,
      date: 0,
      study_hour: 0,
    },
  ]);

  const fetchOneMonthStudyTime = async (yearId: number, monthId: number) => {
    try {
      const apiConfig = ApiConfig();
      const studyingHourApi = new StudyingHourApi(apiConfig);
      const { data } = await studyingHourApi.getOneMonthStudyTime(yearId, monthId);
      setOneMonthStudyTimes(data);
    } catch (err) {
      console.error(err);
    }
  };

  useEffect(() => {
    fetchOneMonthStudyTime(yearId, monthId);
  }, []);
  return (
    <Box sx={{ p: 2, display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <StudyingHour />
      <VerticalBarChart oneMonthStudyTimes={oneMonthStudyTimes} />
    </Box>
  );
};

export default index;
