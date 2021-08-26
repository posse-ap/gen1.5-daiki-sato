// let correct_answer = document.getElementById = ("question__lists__1");

// let clickAction = function () {
// }

  $('.question__list__1').click(function() {
    console.log('正解がクリックされました！');
    $('.question__list__1').addClass("succeeded");
  })

  $('.question__list__0').click(function() {
    console.log('不正解がクリックされました！');
    $('.question__list__0').addClass("failed");

  })
