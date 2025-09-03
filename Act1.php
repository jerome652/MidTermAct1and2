

<?php
$ProductNames = array("coke","milo","redhorse","ketchup");
$ProductPrices = [45.99,50.99,60.99,70.99];

$allNames = implode(", ",$ProductNames);
$firstProduct =  $ProductPrices[0];
$lastProduct =   $ProductPrices [count($ProductPrices)-1]; 

echo"Product Names:".$allNames."<br>";
echo"First Product Price:".$firstProduct."<br>";
echo"Last Product Price:".$lastProduct."<br>"; 


$product = array(
    "name"=>"Coke <br>", 
    "price"=>45.99, 
    "instock"=>true, 
    "description"=>"Is a short-hand term for Coca-Cola, a globally popular, sweet, brown, non-alcoholic carbonated soft drink known for its bubbly,refreshing taste.",  
    "waranty"=>"2 years",);


echo"<br>Product:".$product["name"];
echo"Price $:".$product["price"]."<br>";
echo"Instock:".$product["instock"]."<br>";
echo"Description: ".$product["description"]."<br>";
echo"waranty:".$product["waranty"]."<br>";      

echo"<br> -------Full Catalog-----<br>";

$Product = array (
  array("milo",50.99,18),
  array("redhorse",60.99,13),
  array("ketchup",70.99,2),
);

 echo"Product: ".$Product[0][0]." - Price:$".$Product[0][1]." - In stock: ".$Product[0][2]."<br>";
 echo"Product: ".$Product[1][0]." - Price:$".$Product[1][1]." - In stock:  ".$Product[1][2]."<br>";
 echo"Product: ".$Product[2][0]." - Price:$".$Product[2][1]." - In stock:  ".$Product[2][2]."<br>"; 
?>

