// TODO:validの値が正解になるようにする

// idを連番で付与
$(function () {
  $('li.question__list').each(function (i) {
    $(this).attr('id', (i + 1));
  });
});

// クリック時の処理
$('.question__list').click(function clickAction() {
  // クリックした値のidを取得
  var id = $(this).attr("id");

  // 条件分岐
  if (id == 1) {
    console.log("正解");

    // 正解の選択肢の色を変化
    $("#1").addClass("succeeded");

    // 回答の箱を表示
    $(".question__answer").addClass("show");

    // クリックできなくする
    $("#1").addClass("cant_click");
    $("#2").addClass("cant_click");
    $("#3").addClass("cant_click");

  } else if (id == 2) {
    console.log("no正解_2");

    // 選択肢の色を変更
    $("#1").addClass("succeeded");
    $("#2").addClass("failed");

    // 回答ボックスの文字・色を変更
    $(".question__answer__text").text("不正解");
    $(".question__answer__text").addClass("fail_answer_text");

    // 回答の箱を表示
    $(".question__answer").addClass("show");

    // クリックできなくする
    $("#1").addClass("cant_click");
    $("#2").addClass("cant_click");
    $("#3").addClass("cant_click");

  } else {
    console.log("no正解_3");
    $("#1").addClass("succeeded");
    $("#3").addClass("failed");

    // 回答ボックスの文字・色を変更
    $(".question__answer__text").text("不正解");
    $(".question__answer__text").addClass("fail_answer_text");

    // 回答の箱を表示
    $(".question__answer").addClass("show");

    // クリックできなくする
    $("#1").addClass("cant_click");
    $("#2").addClass("cant_click");
    $("#3").addClass("cant_click");
  }

});