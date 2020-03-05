<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$json2 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data2 = json_decode($json2,true);
	$category = $data2['records'];
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<div class="container">
    <div class="navbar">
        <a href="index.php?navi=create">Create</a>
        <a href="index.php?navi=delete">Delete</a>
    </div>
	<h1> Update Product</h1>
<form class="form-inline" action="pro_update.php" method="POST">
<input type="text" name="name" placeholder="name"/>
<input type="text" name="description" placeholder="description"/>
<input type="text" name="price" placeholder="price"/>
<select name="category">
<option value="">--Category--</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
<input type="submit" name="submit" value="submit"/>

</form>
	</div>
</html>
