<?php 

include 'db.php';  //include the db_connect.php file

print "<HTML><BODY><H1>Users in the database:</H1>\n";


//Create and set a new connection
$get = new Database();

$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);

if ( $firstname && $lastname )
{
  $get->query("insert into users (first_name, last_name) values (\"$firstname\",\"$lastname\")");
}

$selectusers = $get->query("SELECT * FROM users");

//Do whatever you would like with the query
print "Total Number of user records: ";
print mysql_num_rows($selectusers);
print "<br/><br/>";

//Use built in functions to make one line queries.
$rowarray = $get->fetch($selectusers);  //fetch() fetches the associated rows.
print "<table>\n\r";  

foreach ($rowarray as $row) {
	print "<tr>\n\r";  
    	foreach ($row as $col) {
        	print "\t<td>$col</td>\n\r";
    	}
    	print "</tr>\n\r";
}

print "</table><br/>Add User:<br/><br/>"
?>

<form method="post" action="dbtest.php">
  <input type="text" name="firstname" id="firstname" maxlength="20">
  <input type="text" name="lastname" id="lastname" maxlength="20">
  <input type="submit" value="submit">
</form>

<?php


print "</table></BODY></HTML>";

?>

