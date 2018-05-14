<?php 

require_once ('autoload.php');

$objProduct = new Product();

$var = $objProduct->getProducts();

foreach ($var as $value) {
	echo $value['sku'].' '.$value['price'].'<br>';
}

echo '<hr><br>';
$variable = $objProduct->setProduct('7501071307782','Frijoles Refritos Bayos','Fijoles refritos Isadora','18.90');
echo $variable;
?>