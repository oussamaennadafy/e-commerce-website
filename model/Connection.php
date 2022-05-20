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


	public function selectOne($table, $id)
	{
		$query = $this->conn->prepare("SELECT * FROM `$table` where id=$id");
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}


	public function SelectProductImgs($id)
	{
		$query = $this->conn->prepare("SELECT `name` FROM `product_images` where product_id=$id");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}


	public function SelectProductsByWishState($user_id)
	{
		$query = $this->conn->prepare("SELECT * FROM `wished_products` 
		where user_id=$user_id ORDER BY id DESC");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function wishProduct($user_id,$product_id,$price_item,$name_item,$firs_img)
	{
		$query = $this->conn->prepare("INSERT INTO `wished_products`(`user_id`, `product_id`, `price_item`, `name_item`, `first_img`) VALUES ('$user_id','$product_id','$price_item','$name_item','$firs_img')");
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
