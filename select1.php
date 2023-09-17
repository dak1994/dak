<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      margin: 0;
      padding: 0;
    }
    div{
      margin-left: 5%;
      margin-bottom: 5%;

    }
    p{
      font-family: cursive;
      font-size: 25px;
      font-weight: 300;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Room admin</title>
</head>
<body>
  <div>
    <p>Room booking data store</p>
<?php 
$conn=mysql_connect('localhost','root','');
if (!$conn) {
    die('could not connect'.mysql_error());
  } 
mysql_select_db('hotel',$conn);


$result = mysql_query("SELECT * FROM rs");
echo "<table border='1'>
  <tr>
    <th>Number</th>
    <th>fullname</th>
    <th>email</th>
    <th>phoneNumber</th>
    <th>DepartureDate</th>
    <th>NoGuest</th>
    <th>ArrivalDate</th>
    <th>RoomType</th>
  </tr>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>". $row['id'] . "</td>";
  echo "<td>". $row['fullname'] . "</td>";
  echo "<td>". $row['email'] . "</td>";
  echo "<td>". $row['phoneNumber'] . "</td>";
  echo "<td>". $row['DepartureDate'] . "</td>";
  echo "<td>". $row['NoGuest'] . "</td>";
  echo "<td>". $row['ArrivalDate'] . "</td>";
  echo "<td>". $row['RoomType'] . "</td>";

  echo "</tr>";
}
echo "</table>";
mysql_close($conn);

?>
<table border="1px">
    <tr>
         <th>Number</th>
         <th>fullname</th>
         <th>email</th>
         <th>phoneNumber</th>
         <th>DepartureDate</th>
         <th>NoGuest</th>
         <th>ArrivalDate</th>
         <th>RoomType</th>
    </tr>
      <tr>
      <td>1</td>
      <td>dak</td>
      <td>dshdgs@gmail.com</td>
      <td>0987645676</td>
      <td>09/00/2022</td>
      <td>24</td>
      <td>03533</td>
      <td>sweet rom</td>
    </tr>
</table>
</div>
</body>
</html>