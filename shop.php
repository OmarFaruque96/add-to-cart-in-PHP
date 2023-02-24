<? 

// view all products
//step01: read all products from product table 

$products = mysqli_query($db,"SELECT * FROM mart_products");

while($row = mysqli_fetch_assoc($prd)){
    $id             = $row['ID'];
    $p_name         = $row['p_name'];
    $p_reg_price    = $row['p_reg_price'];
    ?>

    <div>
    	<h3>Product Name: <?php echo $p_name;?></h3>
    	<h3>Product Price: <?php echo $p_reg_price;?></h3>
    	<a href="functions.php?product_id=<?php echo $id?>&&quantity=1">Add to cart</a>
    </div>

    <?php

}

?>