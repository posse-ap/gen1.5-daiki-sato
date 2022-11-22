import dayjs from 'dayjs';

export const getStatusLabel = (targetYearMonth: string) => {
  /**
   * 今月の公開スケジュール
   * 「課題受付終了: after_open」【~(nowMonth-1)月 24日 23:59】
   * 「課題受付中: now_open」【(nowMonth-1)月 25日 00:00 ~ (nowMonth+1)月 10日 23:59 】
   * 「公開前: before_open」【(nowMonth+1)月 11日 00:00~】
   *
   * 選択された月 chosenMonth の各期間にnowが入っているか判断
   *【(chosenMonth-1)月 25日 00:00】 ~【(chosenMonth+1)月 10日 23:59 】にnowが入っていたら課題受付終了の月
   *【(chosenMonth+1)月 10日 23:59】よりnowが過去だったら課題受付終了の月
   *【(chosenMonth-1)月 25日 00:00】よりnowが未来だったら公開前の月
   */
  const now = dayjs();
  const chosenYear = dayjs(targetYearMonth).format('YYYY');
  const chosenNextMonth = dayjs(targetYearMonth).add(1, 'M').format('M');
  const chosenLastMonth = dayjs(targetYearMonth).subtract(1, 'M').format('M');
  const openDate = chosenYear + '-' + chosenLastMonth + '-25'; //00:00
  const closeDate = chosenYear + '-' + chosenNextMonth + '-11'; //00:00
  if (now.isAfter(closeDate) || now.isSame(closeDate)) {
    return '課題受付終了';
  } else if (now.isBefore(openDate)) {
    return '公開前';
  } else {
    return '課題受付中';
  }
};
