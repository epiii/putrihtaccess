<?php
  echo "<br />";
  echo "this is 'WA' page content";
  echo "<br />";

  echo "<pre>";
    print_r($_POST);
  echo"</pre>";

  if (!isset($_POST['waproses'])) {
    echo "invalid request / empty post";
  } elseif(empty($_POST['username'])) {
    echo "empty post username";
  } else {
    // $urlx= '/wa/order-link/'.$_POST['username'];
    $urlx= 'http://hatiku-umrah.com/wa/username/'.$_POST['username'];
    echo '<a href="'.$urlx.'" target="_blank">'.$urlx.'</a>';
  }
