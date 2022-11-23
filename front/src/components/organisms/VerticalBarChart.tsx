import {
  BarElement,
  CategoryScale,
  Chart as ChartJS,
  Legend,
  LinearScale,
  Title,
  Tooltip,
} from 'chart.js';
import React from 'react';
import { Bar } from 'react-chartjs-2';

import { OneMonthStudyTimeInner } from '@/generated/types/typescript-axios';

ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend);

export const options = {
  responsive: true,
  plugins: {
    legend: {
      position: 'top' as const,
    },
  },
};

type Props = {
  oneMonthStudyTimes: OneMonthStudyTimeInner[];
};

const VerticalBarChart = ({ oneMonthStudyTimes }: Props) => {
  // ここに日付が入る？
  const labels = [
    oneMonthStudyTimes.map((oneMonthStudyTime) => {
      return oneMonthStudyTime.date;
    }),
  ];

  const data = {
    labels,
    datasets: [
      {
        label: '学習時間',
        // ここに実際の学習時間が入る？
        data: [
          oneMonthStudyTimes.map((oneMonthStudyTime) => {
            return oneMonthStudyTime.study_hour;
          }),
        ],
        backgroundColor: '#00bfff',
      },
    ],
  };

  return <Bar options={options} data={data} />;
};

export default VerticalBarChart;
