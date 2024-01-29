<?php
include 'config.php';
include 'classes/Page.php';
include 'classes/Database.php';

$page = new Page();
  if(isset($_GET['id'])) {

  }
  else {
    $text = $page->get_all();
    echo $page->get_body($text, 'main');
  }

?>