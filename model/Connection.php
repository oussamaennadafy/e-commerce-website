<?php

class Connection
{

	private $serverName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $database = 'enson';
	private $conn;

	public function __construct()
	{

		try {
			$this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->password);
			// set the PDO error mode to exception


		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}

	public function getconn()
	{
		return $this->conn;
	}




	public function insert($table, $tableCln, $tableVal)
	{
		$names = "";
		$values = "";
		$vrls = "";
		for ($i = 0; $i < count($tableCln); $i++) {
			if ($i > 0) {
				$vrls = ",";
			}
			$names .= $vrls . "`" . $tableCln[$i] . "`";
			$values .= $vrls . "'" . $tableVal[$i] . "'";
		}
		$str = "INSERT INTO `$table`(" . $names . ") VALUES (" . $values . ")";
		$query = $this->conn->prepare($str);
		$query->execute();
		
		$stmt = $this->conn->query("SELECT LAST_INSERT_ID()");
		return $stmt->fetchColumn();
	}



	public function selectAll($table)
	{
		$query = $this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	//`id`,`first_img`,`name_item`,`description_item`,`tages_item`,`price_item`

	public function SelectProductsByCategory($category)
	{
		$query = $this->conn->prepare("SELECT `id`,`first_img`,`name_item`,`description_item`,`tages_item`,`price_item` FROM `products` where category_item='$category'");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectOne($table,$id)
	{
		$query = $this->conn->prepare("SELECT * FROM `$table` where id=$id");
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function selectOneCopy($id)
	{
		$query = $this->conn->prepare("SELECT `id`,`name_item`,`price_item`,`first_img` FROM `products` where id=$id");
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function deleteSemiOrder($id) {
		$query = $this->conn->prepare("DELETE FROM `semi_order` WHERE id = $id");
		$query->execute();
	}


	public function SelectProductImgs($id)
	{
		$query = $this->conn->prepare("SELECT `name` FROM `product_images` where product_id=$id");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}


	public function SelectIdsWishedProducts($user_id)
	{
		$query = $this->conn->prepare("SELECT `product_id` FROM `wished_products` 
		where user_id=$user_id ORDER BY id DESC");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}


	public function SelectProductsByIds($ids_products)
	{
		if($ids_products != null) {
			$query = $this->conn->prepare("SELECT `id`,`name_item`,`price_item`,`first_img` FROM `products` 
			WHERE id IN ($ids_products) ORDER BY FIELD (id,$ids_products)");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	
	public function selectProductsInCart($user_id)
	{
			$query = $this->conn->prepare("SELECT semi_order.* , products.name_item , products.first_img , products.price_item FROM `semi_order` , `products` WHERE semi_order.product_id = products.id AND `user_id` = '$user_id'");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
	}



	public function checkIfProductIsWished($user_id,$product_id)
	{
			$query = $this->conn->prepare("SELECT `id` FROM `wished_products` 
			WHERE user_id = $user_id AND product_id = $product_id");
			$query->execute();
			return $query->rowCount();
	}





	public function wishProduct($user_id,$product_id)
	{
		$query = $this->conn->prepare("INSERT INTO `wished_products`(`user_id`, `product_id`) VALUES ('$user_id','$product_id')");
		$query->execute();
		// $query->fetchAll(PDO::FETCH_ASSOC);
	}


	public function addSemiOrder($user_id,$product_id,$color,$size,$quantity)
	{
		$query = $this->conn->prepare("INSERT INTO `semi_order`(`user_id`, `product_id`,`color`,`size`,`quantity`) VALUES ('$user_id','$product_id','$color','$size','$quantity')");
		$query->execute();
		// $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function isProductInCart($user_id,$product_id)
	{
		$query = $this->conn->prepare("SELECT `id` FROM `semi_order` WHERE `user_id` = '$user_id' AND `product_id` = '$product_id'");
		$query->execute();
		return $query->rowCount();
	}

	public function UnwishProduct($user_id,$product_id)
	{
		$query = $this->conn->prepare("DELETE FROM `wished_products` WHERE user_id = $user_id AND product_id = $product_id");
		$query->execute();
		// $query->fetchAll(PDO::FETCH_ASSOC);
	}




//`id`,`name_item`,`price_item`,`first_img`

	public function selectLastProducts($table)
	{
		$query = $this->conn->prepare("SELECT * FROM `$table` ORDER BY id DESC LIMIT 12");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}





	public function update($table, $tableCln, $tableVal, $id)
	{
		$names = "";
		$vrls = "";
		for ($i = 0; $i < count($tableCln); $i++) {
			if ($i > 0) {
				$vrls = ",";
			}
			$names .= $vrls . "`" . $tableCln[$i] . "`='" . $tableVal[$i] . "'";
		}
		$str = "UPDATE $table SET $names WHERE id=$id";
		$query = $this->conn->prepare($str);
		$query->execute();
	}




	public function delete($table, $id)
	{
		$query = $this->conn->prepare("DELETE FROM `$table` WHERE id=$id");
		$query->execute();
	}
}
