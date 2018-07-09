<!DOCTYPE html>
<html lang="en">
  <title>using simple htaccess </title>

  <body>
    <ul>
      <li><a href="./home">home</a></li>
      <li><a href="./wa">wa</a></li>
      <li><a href="./about-us">about us</a></li>
    </ul>
    <hr>

    <div class="container">
      <?php
        // $x=explode('/',$_GET[url]);
        // var_dump($x);
        // var_dump($_GET['page']);

        if (isset($_GET['page'])) {
          switch ($_GET['page']){
              case 'vhome':
                require 'page/v_home.php';
              break;
              case 'vaboutus':
                require 'page/v_aboutus.php';
              break;
              case 'vwaform':
                require 'page/v_waform.php';
              break;
              case 'vwaproses':
                require 'page/v_waproses.php';
              break;
              case 'vwaorderlink':
                require 'page/v_waorderlink.php';
              break;
          }
        }else{
          echo "<br />default content";
          require 'page/v_home.php';
        }
    ?>
  </div>

  </body>
</html>
