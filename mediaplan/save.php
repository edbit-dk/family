<?php 
require 'functions.php';

// Check if request method is post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  return setCookieData($_POST);
}