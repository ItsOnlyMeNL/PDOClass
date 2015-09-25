<?php
	class DB
	{
		//Constructor for the connection with the DB.
		function __construct($connect)
		{
			$this->connect = $connect;
		}
		
		//Fetch a single row.
		public function FetchSingle($sql)
		{	
			try
			{
				$query = $this->connect->prepare($sql);
				$query->execute();
				$row = $query->fetch(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			return $row;
			$connect = null;
		}

		//Fetch multiple rows.
		public function FetchLoop($sql)
		{
			try
			{
				$query = $this->connect->prepare($sql);
				$query->execute();
				$rowLoop = $query->fetchAll();
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
			return $rowLoop;
			$connect = null;
		}
		
		//Count rows
		public function CountRows($sql)
		{
			try
			{
				$query = $this->connect->prepare($sql);
				$query->execute();
				$count = $query->rowCount();
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
			return $count;
			$connect = null;
		}
		
		/*
			Insert data into a table
			$sql = "INSERT INTO Table(Colum1,Colum2,Colum3) VALUES(?,?,?)";
			$array = array("value","value","value");
		*/
		public function InsertDataArray($sql, $array)
		{
			try
			{	
				$query = $this->connect->prepare($sql);
				$query->execute($array);
				return true;
			}	
			catch(PDOException $e)
			{
				echo $e->getMessage();
				return false;
			}
			$connect = null;
		}
		
		//Update row
		public function UpdateTable($sql)
		{
			try
			{
				$query = $this->connect->prepare($sql);
				$query->execute();
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
			$connect = null;
		}
	}
?>
