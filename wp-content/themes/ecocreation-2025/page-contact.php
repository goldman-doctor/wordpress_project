<?php get_header('guyners'); ?>

<?php echo do_shortcode('[contact-form-7 id="55e975f" title="contact"]'); ?>


<!-- Confirmation Modal -->
<div id="confirmation-modal" class="cf7-modal">
  <div class="modal-content">
    <h3>お問い合わせ内容確認</h3>
    <ul>
      <li><strong>お名前</strong> <span id="cf_name"></span></li>
      <li><strong>フリガナ</strong> <span id="cf_kana"></span></li>
      <li><strong>住所</strong> <span id="cf_address"></span></li>
      <li><strong>電話番号</strong> <span id="cf_tel"></span></li>
      <li><strong>FAX番号</strong> <span id="cf_fax"></span></li>
      <li><strong>メールアドレス</strong> <span id="cf_email"></span></li>
      <li><strong>お問い合わせ内容</strong><br><span id="cf_message"></span></li>
    </ul>
    <div class="modal-buttons">
      <button id="cf-edit" class="list-btn-green">修正する</button>
      <button id="cf-submit" class="list-btn-green">送信する</button>
    </div>
  </div>
</div>

<!-- Thank You -->
<div id="cf7-success-modal" class="cf7-modal">
	<div class="cf7-modal-content">
		<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_msg.png" alt="icon_msg">
		<p>送信が完了しました、<br>記載いただいたメールアドレス宛てに確認メールを送付しております。</p>
		<button id="cf7-modal-close" class="list-btn-green">トップページに戻る</button>
	</div>
</div>


<?php get_footer('guyners'); ?>