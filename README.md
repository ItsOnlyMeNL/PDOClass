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
* FetchSingle($sql) array
* FetchLoop($sql) array
* CountRows($sql) int
* InsertDataArray($sql,$array) void
* UpdateTable($sql) void

#####Constructor
The constructor just takes the PDO object.

