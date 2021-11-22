<?php
error_reporting(0);
include('updateExistingUserToAdmin.php');

mysql_connect('localhost', 'p_f21_16', 'e3m6rq');
mysql_select_db('p_f21_16_db');

$sql = "SELECT firstname, lastname FROM FinalUserTable WHERE role = '1'";
$result = mysql_query($sql);

echo "<h2>Choose which instructor you would like to give access to admin-level privileges</h2>";
echo "<form action='' method='post'>";
echo "<select name='choice'>";

while ($row = mysql_fetch_array($result))
{
echo "<option value='".$row["lastname"]."'>".$row["lastname"].", ".$row["firstname"]."</option>";
}
echo "</select>";
echo "<input name='submit' type='submit' value='Submit'>";
echo "</form>";
?>

<HTML>
  <HEAD>
       <TITLE>Add Admin to Existing User</TITLE>
  </HEAD>
</HTML>