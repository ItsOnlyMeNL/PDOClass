# Getting Started
#####First make a new object.
```sh
require('Class.DB.php');
$connect = new PDO('mysql:host='localhost';dbname='DatebaseName', 'root', 'root');
$DB = new DB($connect);
```
#####Call a function, for example:
```sh
<?php
  $sql = "SELECT FirstName,LastName FROM Employees";
  $DB->FetchSingle($sql);
?>
  Output: Array ( [FirstName] => "Peter" [LastName] => "Manuel" )
```
# Functions
```sh
$DB->FetchSingle($sql); //Returns array
$DB->FetchLoop($sql); //Returns array
$DB->CountRows($sql); //Returns int
$DB->InsertDataArray($sql,$array); //Returns void
$DB->UpdateTable($sql); //Returns void
```
#####Inserting data to your database
```sh
$sql = "INSERT INTO Employees VALUES(?,?,?)";
$array = array(10,Peter,Manuel);
$DB->InsertDataArray($sql,$array);
```

#####Constructor
The constructor just takes the PDO object.

