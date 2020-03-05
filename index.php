<?php 
$navi = (isset($_GET['navi']) && $_GET['navi'] != '') ? $_GET['navi']: '';
?>
<html> 
    <head>
     
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <div id = "container">
      <div class="navbar">
          <ul>
        <li><a href="index.php?navi=product">Products</a> </li>
        <li><a href="index.php?navi=categories">Category</a> </li>
        <li><a href="index.php?navi=create">Create</a> </li>
          </ul>
      </div>

      <div id = "content">         
      <?php 
        switch($navi){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            include ('product-details.php');
            break;
          case 'formup':
            include ('form_update.php');
            break;
        }
    ?>
      </div>

     
    </body>
</html>
