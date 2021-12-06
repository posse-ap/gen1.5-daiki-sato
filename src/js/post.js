$.ajax({
    url: 'php/_inc/post__data.php',
    type: 'POST',
    dataType: 'text',
    data: {
      study_date: study_date,
      study_contents_id: study_contents_id,
      language: language,
      study_hour: study_hour
    }
  })