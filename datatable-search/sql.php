<?php 
$conn   = new mysqli('localhost', 'root', '', 'table_db');
if(isset($_GET['search'])){
     $searchKey = $_GET['search']; // grab keyword
     $sql    = "SELECT * FROM friends WHERE name LIKE '%$searchKey%'";
}else
    $sql    = "SELECT * FROM friends";
      
    $result = $conn->query($sql);
?>