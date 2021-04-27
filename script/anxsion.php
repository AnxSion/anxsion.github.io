<?php
$to="anuraglama5@gmail.com";
$product=$_POST["product"];
$quantity=$_POST["quantity"];
$size=$_POST["size"];
$subject="ORDER PLACED: ".$product;
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$street = $_POST['street'];
$district = $_POST['district'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$message= "Product: ".$product."\nQuantity: ".$quantity."\nSize: ".$size."\nFull name: ".$name."\nEmail: ".$email."\nAddress: ".$address."\nStreet: ".$street."\nDistrict: ".$district."\nState".$state."\nZip: ".$zip;
mail ($to,$subject,$message,$header);
?>+]