<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>
    <title><?php echo $page_title; ?></title>


    <link rel="icon" href="/images/icons/favicon.ico?1" type="image/x-icon" />
    <link rel="shortcut icon" href="/images/icons/favicon.ico?1" type="image/x-icon" />



    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <meta name="title" content="<?php echo $page_title; ?>">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <link rel="shortcut icon" href="/public/images/icons/atom.png" type="image/png">

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:image" content="/images/icons/favicon.ico?2">
    <meta property="og:description" content="<?php echo $page_description; ?>">

    <meta name="viewport" content="width=device-width, user-scalable=yes">

   <link rel="stylesheet" type="text/css" href="/css/common.css?<?php echo time();?>">

   <script type="text/javascript" src="/js/common.js?<?php echo rand();?>"></script>

   <script type="text/javascript">
window.cur=cur={};
    </script>

    <?php

if(!empty($param['css'])) {

  if(is_array($param['css'])) {
    foreach($param['css'] as $v) {
      echo '<link rel="stylesheet" type="text/css" href="/css/'.$v.'?v='.rand().'">';
    }
  } else {
    echo '<link rel="stylesheet" type="text/css" href="/css/'.$param['css'].'?v='.rand().'">';
  }
}
?>

</head>
<body>
<div id="wrap1">

<div class="wrap2">
<div class="head">
  <div class="head__wrap">
    <div class="head__left">
      <a href="\" class="head__link">Название</a>
    </div>
    <div class="head__right">

      <a href="\" class="head__link head__link__icon"><img src="/images/icons/shopping-outline.png"></a>
      <a href="/login" class="head__link">Вход</a>
      <a href="/reg" class="head__link">Регистрация</a>
    </div>  
      <div class="head__search_field__wrap">
        <div class="head__search_field__wrap_2">
          <input type="text" name="" class="text_field head__search_field" placeholder="Поиск...">
        </div>
      </div>
  </div>
</div>
<div class="head head__categories">
  <div class="head__wrap">
      <a href="/login" class="head__link">Телефоны</a>
      <a href="/login" class="head__link">Ноутбуки</a>
      <a href="/login" class="head__link">Компьютеры</a>
      <a href="/login" class="head__link">Планшеты</a>
      <a href="/login" class="head__link">Аксессуары</a>
      <a href="/login" class="head__link">Наушники</a>
      <a href="/login" class="head__link">Бытовая техника</a>
  </div>
</div>
<div class="content">


<?php
  if(isset($content_view) && !empty($content_view)) {
    require_once SITE_ROOT.'application/views/'.$content_view;
  } else {
    echo '...';
  }
?>




</div>
<div class="footer" style="text-align: center;border-top:1px solid #DDD;padding:14px 0">
  Test &copy; 2022
</div>
</div>

</div>




</body>


</html>