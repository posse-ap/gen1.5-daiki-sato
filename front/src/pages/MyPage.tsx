import {
  Box,
  Button,
  Container,
  FormControl,
  FormControlLabel,
  FormHelperText,
  OutlinedInput,
  Radio,
  RadioGroup,
  Typography,
} from '@mui/material';
import axios from 'axios';
import React from 'react';
import { Controller, useForm } from 'react-hook-form';

import DataItemRow from '@/components/parts/DataItemRow';

const END_POINT = process.env.REACT_APP_API_ENDPOINT;

type FormFields = {
  nickname: string;
  is_experienced: boolean;
};

type UserData = {
  id: string;
  is_admin: boolean;
  is_student: boolean;
  name: string;
  nickname: string;
  course: string;
  email: string;
  gender_id: string;
  birth_date: string;
  prefecture: string;
  is_experienced: boolean;
  parent_name: string;
};

// TODO 実際のユーザーデータを取得
const userData: UserData = {
  id: '001',
  is_admin: true,
  is_student: true,
  name: '山田 太郎',
  nickname: '山風',
  course: '一般コース',
  email: 'test@email.com',
  gender_id: '男性',
  birth_date: '2002年9月4日',
  prefecture: '東京都',
  is_experienced: true,
  parent_name: '山田 五郎',
};

// バリデーションルールの定義
const validationRules = {
  user_name: {
    required: 'ユーザー名を入力してください',
    maxLength: { value: 20, message: '20文字以内で入力してください' },
  },
};

const MyPage = () => {
  const { control, handleSubmit, setValue } = useForm<FormFields>({
    mode: 'onChange',
  });
  setValue('nickname', userData.nickname);
  setValue('is_experienced', userData.is_experienced);

  const onSubmitForm = ({ nickname, is_experienced }: FormFields) => {
    // TODO 更新機能実装
    const idToken = localStorage.getItem('SaaSusIdToken');
    axios
      .post(
        `${END_POINT}/users/${userData.id}`,
        { nickname, is_experienced },
        { headers: { 'Content-Type': 'application/json', Authorization: `Bearer ${idToken}` } }
      )
      .then((response) => {
        console.log(response);
      })
      .catch((error) => {
        console.log(error);
      });
  };

  return (
    <Box sx={{ p: 2, display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <Typography variant="h5" align="center" sx={{ mt: 2 }}>
        マイページ
      </Typography>
      <Container
        maxWidth="xs"
        component="form"
        onSubmit={handleSubmit(onSubmitForm)}
        sx={{ display: 'flex', flexDirection: 'column', gap: 4, mt: 2 }}
      >
        <DataItemRow title="メールアドレス">
          <Box>{userData.email}</Box>
        </DataItemRow>
        <DataItemRow title="ユーザー名">
          <Controller
            name="nickname"
            control={control}
            rules={validationRules.user_name}
            render={({ field, fieldState }) => (
              <FormControl error={!!fieldState.error?.message}>
                <OutlinedInput {...field} size="small" />
                <FormHelperText sx={{ position: 'absolute', top: '100%', m: 0.5 }}>
                  {fieldState.error?.message}
                </FormHelperText>
              </FormControl>
            )}
          />
        </DataItemRow>
        <DataItemRow title="本名">
          <Box>{userData.name}</Box>
        </DataItemRow>
        <DataItemRow title="性別">
          <Box>{userData.gender_id}</Box>
        </DataItemRow>
        <DataItemRow title="都道府県">
          <Box>{userData.prefecture}</Box>
        </DataItemRow>
        <DataItemRow title="生年月日">
          <Box>{userData.birth_date}</Box>
        </DataItemRow>
        <DataItemRow title="書道経験">
          <Controller
            name="is_experienced"
            control={control}
            render={({ field }) => (
              <FormControl>
                <RadioGroup row {...field} name="is_experienced">
                  <FormControlLabel value={true} control={<Radio size="small" />} label="あり" />
                  <FormControlLabel value={false} control={<Radio size="small" />} label="なし" />
                </RadioGroup>
              </FormControl>
            )}
          />
        </DataItemRow>
        <DataItemRow title="受講コース">
          <Box>{userData.course}</Box>
        </DataItemRow>
        <Box sx={{ width: '100%', display: 'flex', justifyContent: 'center' }}>
          <Button variant="contained" type="submit" sx={{ width: 'fit-content' }}>
            更新
          </Button>
        </Box>
      </Container>
    </Box>
  );
};

export default MyPage;
