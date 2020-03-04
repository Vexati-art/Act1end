<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html> 
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <div id = "container">
      <div class="navbar">
        <ul>
            <li><a href="index.php?navigation=product">Products</a></li>
            <li><a href="index.php?navigation=categories">Category</a></li>
            <li><a href="index.php?navigation=create">Create</a></li>
          </ul>
      </div>

      <div id = "content">         
      <?php 
        switch($navigation){
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
            require_once 'product-details.php';
            break;
          default:
            require_once 'index.php';
        }
    ?>
      </div>

      
        </div>
    </body>
</html>
