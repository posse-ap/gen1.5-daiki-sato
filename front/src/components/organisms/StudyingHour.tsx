import { Box } from '@mui/material';
import React, { useContext, useEffect, useState } from 'react';

import {
  MonthStudyingHour,
  StudyingHourApi,
  TodayStudyingHour,
  TotalStudyingHour,
} from '@/generated/types/typescript-axios';
import { MonthYearContext } from '@/layout/Layout';
import { ApiConfig } from '@/utils/apiConfig';

import StudyingBox from '../molecules/StudyingBox';

const StudyingHour = () => {
  const value = useContext(MonthYearContext);
  const yearId = value?.thisYear;
  const monthId = value?.thisMonth;

  // 全部
  const [totalStudyingHour, setTotalStudyingHour] = useState<TotalStudyingHour>({
    id: 0,
    total_studying_hour: 0,
  });
  const fetchTotalStudyingHour = async () => {
    try {
      const apiConfig = ApiConfig();
      const studyingHourApi = new StudyingHourApi(apiConfig);
      const { data } = await studyingHourApi.getTotalStudyingHour();
      setTotalStudyingHour(data);
    } catch (err) {
      console.error(err);
    }
  };

  // 月
  const [monthStudyingHour, setMonthStudyingHour] = useState<MonthStudyingHour>({
    id: 0,
    month_studying_hour: 0,
  });
  const fetchMonthStudyingHour = async (yearId: number, monthId: number) => {
    try {
      const apiConfig = ApiConfig();
      const studyingHourApi = new StudyingHourApi(apiConfig);
      const { data } = await studyingHourApi.getMonthStudyingHour(yearId, monthId);
      setMonthStudyingHour(data);
    } catch (err) {
      console.error(err);
    }
  };

  // 今日
  const [todayStudyingHour, setTodayStudyingHour] = useState<TodayStudyingHour>({
    id: 0,
    today_studying_hour: 0,
  });
  const fetchTodayStudyingHour = async () => {
    try {
      const apiConfig = ApiConfig();
      const studyingHourApi = new StudyingHourApi(apiConfig);
      const { data } = await studyingHourApi.getTodayStudyingHour();
      setTodayStudyingHour(data);
    } catch (err) {
      console.error(err);
    }
  };

  useEffect(() => {
    fetchTodayStudyingHour();
    fetchTotalStudyingHour();
    fetchMonthStudyingHour(yearId, monthId);
  }, [yearId, monthId]);

  return (
    <Box sx={{ p: 2, display: 'flex', alignItems: 'center' }}>
      <StudyingBox studyingBoxName="Today" studyHour={todayStudyingHour.today_studying_hour} />
      <StudyingBox studyingBoxName="Month" studyHour={monthStudyingHour.month_studying_hour} />
      <StudyingBox studyingBoxName="Total" studyHour={totalStudyingHour.total_studying_hour} />
    </Box>
  );
};

export default StudyingHour;
