<style type="text/css">

.go_to__restore_page_wrap{border-top:1px solid #DDD;margin:14px 0 11px}

.go_to__restore_page_wrap2{text-align: center;margin-top:-11px}

.go_to__restore_page_or{background-color:#FFF;padding:0 5px}





</style>

<?php
//var_dump($data);  
?>
<div id="restore_page" style="background-color:#FEFEFE;">
<div class="restore_page__wrap">
<div class="form">
<style type="text/css">
.restore_page__wrap {
    padding: 77px 0;
}
</style>
<div class="form_wrap<?php if(!empty($data['restore_messages']) && $data['restore_messages']['is_error'] === true) {echo ' form__error_animation';} ?>" style="width:240px;margin:0 auto;    width: 383px;
    margin: 0 auto;
    border: 1px solid #DDD;
    padding: 52px 34px;
    border-radius: 7px;background-color:#FFF">

<div class="form__title">Восстановлеие пароля</div>
<div class="form__body">

<FORM action="" method="POST">












<?php
if(!empty($data['restore_messages'])) {
if($data['restore_messages']['is_error'] === true) {

?>


<div class="form__message form__message_error form__message_restore">
  <div class="form__message_icon_wrap fl_l">
    <i class="icon form__message_icon"></i>
  </div>  

  <div class="form__message__body">
    <div class="form__message__body_title"><?php echo $data['restore_messages']['error']['error_message']['title'];?></div>
    <div class="form__message__body_content"> <?php echo $data['restore_messages']['error']['error_message']['description'];?></div>
  </div>
</div>
<?php

}
} else {//88CEF7

?>


<div class="form__message form__message_info form__message_restore" style="background-color: #B2E7F5;color:#000;padding:7px;line-height:24px">
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
    <input type="text" name="restore_email_0" placeholder="Ваш email" class="text_field percent_100" autofocus="">
  </div>
</div>





<div class="form__item_wrap">

<input type="submit" name="restore_submit_0" class="button button_green percent_100" value="Восстановить пароль">

</div>

</FORM>
<div class="go_to__restore_page_wrap">
  <div class="go_to__restore_page_wrap2"><span class="go_to__restore_page_or">или</span></div>

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