<?php

$name = $_POST['user'];
$pass = $_POST['pass'];

$db = new mysqli('localhost','root','','login');

if($db->connect_errno >0){
die('unable to connect to the database [' .$db.connect_error. ']');
}


/*
//getting username alone sqli functions
$username = $db->query("SELECT * FROM users WHERE username = '".$name."' AND password = '".$pass."'")->fetch_object()->username; 
echo "<br>";
print $username; //output value

$db->close();
*/

$results = $db->query("SELECT * FROM users WHERE username = '".$name."' AND password = '".$pass."'");

 $row_count = $results->num_rows;
 
 if($row_count == 1){
 include("home.php");
}
else{
 echo"<br>";
 printf("Result set has no rows.");

    /* close result set */
    $results->close();

}
 
 /*
print '<table border="1">';
while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->id.'</td>';
    print '<td>'.$row->username.'</td>';
    print '<td>'.$row->password.'</td>';
    print '</tr>';
}  
*/
print '</table>';

$db->close();


?>


