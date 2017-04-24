<?php
    
    global $connection;
    $sql = "localhost"; 
    $username = "root";
    $password = "";
    $connection = mysqli_connect($sql, $username, $password) or 
    die("Unable to Connect");
    $databse = mysqli_select_db($connection,"nes"); 
/*

$result = mysqli_query($connection, 'SELECT * FROM tbl_users');
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["user_id"];
    echo $row["username"];
}
*/

function base_url(){

echo 'http://localhost/NES';

}

define( 'ROOT_DIR', dirname(__FILE__));
?>