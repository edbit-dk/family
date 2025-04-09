<?php

function getCookieData($name = ''){
	return htmlentities(unserialize($_COOKIE['data'])[$name]);
}

function setCookieData($arr) {
  $formdata = getCookieData();
  if ($formdata == null) {
    $formdata = array();
  }
  foreach ($arr as $name => $value) {
    $formdata[$name] = trim($value);
  }
  setcookie('data', serialize($formdata),
    time()+30*24*60*60);
}
