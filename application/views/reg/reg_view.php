<div id="reg_page">
<div class="reg_page__wrap">
<div class="form">
<div class="form_wrap form__wrap_2<?php if(!empty($data['reg_messages']) && $data['reg_messages']['is_error'] === true) {echo ' form__error_animation';} ?>">

<div class="form__title">Регистрация</div>
<div class="form__body">

<FORM action="" method="POST">
<?php
if(!empty($data['reg_messages'])) {
if($data['reg_messages']['is_error'] === true) {

?>


<div class="form__message form__message_error form__message_reg">
  <div class="form__message_icon_wrap fl_l">
    <i class="icon form__message_icon"></i>
  </div>  

  <div class="form__message__body">
    <div class="form__message__body_title"><?php echo $data['reg_messages']['error']['error_message']['title'];?></div>
    <div class="form__message__body_content"> <?php echo $data['reg_messages']['error']['error_message']['description'];?></div>
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


<div style="margin-top:7px">

<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="reg_first_name_0" placeholder="Ваше имя" class="text_field percent_100" autofocus="">
  </div>
</div>



<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="reg_last_name_0" placeholder="Ваша фамилия" class="text_field percent_100" autofocus="">
  </div>
</div>



<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="reg_email_0" placeholder="Ваш email" class="text_field percent_100" autofocus="">
  </div>
</div>




<div class="form__item_wrap">
  <div class="input_wrap">
    <input type="text" name="reg_password_0" placeholder="Ваш пароль" class="text_field percent_100">
  </div>
</div>




<div class="form__item_wrap">

<input type="submit" name="reg_submit_0" class="button button_green percent_100" value="Зарегестрироваться">

</div>

</FORM>
<div class="go_to__reg_page_wrap">
  <div class="go_to__reg_page_wrap2"><span class="go_to__reg_page_or">или</span></div>

</div>




<div class="form__item_wrap">

<a href="/login"><button class="button button_gray percent_100 input_full_size_fix">Вход</button></a>

</div>
</div>



</div>


</div>


</div>
</div>
</div>