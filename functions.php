<?

// please setup your redirect url here 
// it will work but will not redirect 
// for redirect you can use header() function in php or window.location in js

session_start();

if(isset($_GET['product_id']) && isset($_GET['quantity'])){

	$id = $_GET['product_id'];
	$quantity = $_GET['quantity'];

	if(isset($_GET['action']) && $_GET['action'] == 'delete'){
		unset($_SESSION['cart'][$id]); // delete an item
	}else{
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['quantity']++;  //update
		}else{
			$_SESSION['cart'][$id] = array('quantity' => $quantity);  //insert
		}	
	}
}