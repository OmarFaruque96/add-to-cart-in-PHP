<?php 

if(!empty($_SESSION['cart'])){
    
    foreach($_SESSION["cart"] as $keys => $values)
    {
    	// $all products IDS in &keys variable and quantity in $values["quantity"]
    	// read all the info from the product table now with ids 

        $id=intval($keys);
        $quantity = intval($values["quantity"]);

        $products = mysqli_query($db,"SELECT * FROM mart_products WHERE ID='$id'");
    		while($row = mysqli_fetch_assoc($products)){
	          $p_name         = $row['p_name'];
	          $p_reg_price    = $row['p_reg_price'];

	          echo 'Product Name: '.$p_name;
	          echo 'Price: '.$p_reg_price;
	          echo 'Quantity: '.$quantity;
	          echo '<a href="functions.php?product_id='.$id.'&&action=delete&&quantity='.$quantity.'"><span class="icon_close"></span></a>'; // to remove an item from cart
	      	}
          
    }
    
}