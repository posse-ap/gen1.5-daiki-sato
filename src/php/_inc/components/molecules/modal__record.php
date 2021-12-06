<!-- モーダルエリアここから -->
<div class="upload__modal">
  <div class="upload__modal__content">
    <button class="upload__modal--close"></button>
    <form class="study_day" action="/_inc/post__data.php" method="post">
      <h3>学習日</h3>
      <input class="inputs_day" type='date' name='study_date' value='学習日'>
    </form>
    <div class="s_contents" id="s_contents">
      <h3>学習コンテンツ(複数選択可)</h3>

      <form class="radio-wrap" action="/_inc/post__data.php" method="post">
        <label>
          <input type="checkbox" name="study_contents_id[]" value="N予備校">
          <span class="radio_figure">N予備校</span>
        </label>

        <label>
          <input type="checkbox" name="study_contents_id[]" value="ドットインストール">
          <span class="radio_figure">ドットインストール</span>
        </label><br>
        <label>
          <input type="checkbox" name="study_contents_id[]" value="POSSE課題">
          <span class="radio_figure">POSSE課題</span>
        </label>
      </form>
    </div>

    <div class="s_language" id="s_language">
      <h3>学習言語(複数選択可)</h3>

      <div class="radio-wrap">
        <label>
          <input type="checkbox" name="language[]" value="HTML">
          <span class="radio_figure">HTML</span>
        </label>
        <label>
          <input type="checkbox" name="language[]" value="CSS">
          <span class="radio_figure">CSS</span>
        </label>
        <label>
          <input type="checkbox" name="language[]" value="JavaScript">
          <span class="radio_figure">JavaScript</span>
        </label><br>

        <label>
          <input type="checkbox" name="language[]" value="PHP">
          <span class="radio_figure">PHP</span>
        </label>
        <label>
          <input type="checkbox" name="language[]" value="Laravel">
          <span class="radio_figure">Laravel</span>
        </label>
        <label>
          <input type="checkbox" name="language[]" value="SQL">
          <span class="radio_figure">SQL</span>
        </label>
        <label>
          <input type="checkbox" name="language[]" value="SHELL">
          <span class="radio_figure">SHELL</span>
        </label><br>

        <label>
          <input type="checkbox" name="language[]" value="情報システム基礎知識(その他)">
          <span class="radio_figure">情報システム基礎知識(その他)</span>
        </label>
      </div>

    </div>
  </div>

  <div class="modal-time-part">
    <p class="font-weight-bold modal-title">学習時間</p>
    <input type="text" name="study_hour">
  </div>

  <div class="modal-twitter-part pt-3">
    <p class="font-weight-bold modal-title">Twitter用コメント</p>
    <textarea id="postTwitter" cols="0" rows="9"></textarea>
  </div>

  <div class="modal-twitter-auto-part pt-1">
    <input id="twitter" type="checkbox" checked><label for="twitter">Twitterに自動投稿する</label>
  </div>

  <button type="button" class="post-btn d-block mx-auto mt-3 mb-4" id="to-modalLoading" data-toggle="modal" data-target="#modalLoading">記録・投稿</button>


</div>
<div class="upload__modal__question">
  <div class="upload__modal__question__circle">
    <button class="upload__modal__question__button">?</button>
  </div>
</div>
</div>
<!-- モーダルエリアここまで -->