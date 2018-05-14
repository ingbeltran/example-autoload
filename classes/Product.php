<?php 
/**
* 
*/
class Product{

	public function getProducts(){
		$mysqli = mysqli_connect("localhost", "root", "", "pruebas");
		$resultado = mysqli_query($mysqli, "SELECT * FROM products");
		return $resultado;
	}

	public function setProduct($param1,$param2,$param3,$param4){
		$mysqli = mysqli_connect("localhost", "root", "", "pruebas");
		$resultado = mysqli_query($mysqli, "INSERT INTO products (sku, name, description, price) VALUES ('$param1', '$param2', '$param3', '$param4')");
		if ($resultado) {
			return 'datos insertados correctamente';
		}else{
			return 'No se insertaron los datos';
		}
	}
	
}