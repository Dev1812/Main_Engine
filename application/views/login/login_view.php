<div id="login_page">
<div class="login_page__wrap">
<div class="form">

<div class="form_wrap<?php if(!empty($data['login_messages']) && $data['login_messages']['is_error'] === true) {echo ' form__error_animation';} ?>">

<div class="form__title">Вход</div>
<div class="form__body">

<FORM action="" method="POST">
<?php
if(!empty($data['login_messages'])) {
if($data['login_messages']['is_error'] === true) {

?>
<div class="form__message form__message_error form__message_reg">
  <div class="form__message_icon_wrap fl_l">
    <i class="icon form__message_icon"></i>
  </div>  

  <div class="form__message__body">
    <div class="form__message__body_title"><?php echo $data['login_messages']['error']['error_message']['title'];?></div>
    <div class="form__message__body_content"> <?php echo $data['login_messages']['error']['error_message']['description'];?></div>
  </div>
</div>
<?php
}
} else {
?>
<div class="form__message form__message_info form__message_reg">
  <div class="form__message_icon_wrap fl_l">
    <i class="icon form__message_icon"></i>
  </div>  

  <div class="form__message__body">
    <div class="form__message__body_title">Введите данные в поля ниже</div>
    <div class="form__message__body_content">Для входа введите данные в поля ниже</div>
  </div>
</div>
<?php
}
?>

<div class="form_wrap_2">

<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="login_email_0" placeholder="Ваш email" class="text_field percent_100" autofocus="">
  </div>
</div>
<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="login_password_0" placeholder="Ваш пароль" class="text_field percent_100">
  </div>
</div>
<div class="form__item_wrap">
  <input type="submit" name="login_submit_0" class="button button_green percent1_100" value="Войти">
  <a href="/restore"><div class="form_restore">Забыли пароль?</div></a>
</div>

</FORM>
<div class="go_to__login_page_wrap">
	<div class="go_to__login_page_wrap2"><span class="go_to__login_page_or">или</span></div>
</div>

<div class="form__item_wrap">

  <a href="/login">
    <button class="button button_gray percent_100 input_full_size_fix">Регистрация</button>
  </a>

</div>
</div>
</div>
</div>
</div>
</div>