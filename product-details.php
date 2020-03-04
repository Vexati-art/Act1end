<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);
$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];
$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
	

   

<h1>Product</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category ID</th>
    </tr>

    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_id'];?></td>
        <td><a href="form_update.php?id=<?php echo $id ?>">Update</a></td>
        <td><a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></td>
    </tr>

</table>

    
</html>
