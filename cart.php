<?php require 'inc/head.php'; 

if(empty($_SESSION['login'])) 
{
  header('Location: http://localhost:8000/');
  exit();
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        var_dump($_SESSION['cart']);

        if ($_SESSION['cart'] === '46'){
            echo "Pecan Nuts<br>";
        }
        elseif ($_SESSION['cart'] === '36'){
          echo "Chocolate chips<br>";
        }
        elseif ($_SESSION['cart'] === '58'){
            echo "Full Chocolate Cookies<br>";
        }
        elseif ($_SESSION['cart'] === '32'){
          echo "M&M's cookies<br>";
        }
        else {
          echo 'No items';
        }
        
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
