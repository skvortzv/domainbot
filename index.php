<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lang == 'ru')
  header("Location: ru");
else
  header("Location: en");

?>