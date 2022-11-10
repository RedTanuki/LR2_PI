<?php
namespace www;

$connect = mysqli_connect('localhost', 'root', '', 'lar');
if (!$connect) {
die('Error connect to database');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Покупатели</title>
</head>
<body>
<table>
<tr> 
  <th>ID</th>
  <th>Имя</th>
  <th>Фамилия</th>
  <th>E-mail</th>
  <th>Блокировка</th>
  <th>Телефон</th>
  <th>Дата создания</th>
</tr>
<?php
$rs = mysqli_query($connect, "SELECT * FROM `buyer`");
 while($row = mysqli_fetch_assoc($rs)) 
	
	{
	$id = $row['id'];
	$sname = $row['sname'];
	$fname = $row['fname'];
	$email = $row['email'];
	$block = $row['block'];
	$phone = $row['phone'];
	$created_buyer = $row['created_buyer'];
	
	echo "<tr style=\"color:seagreen; line-height:8pt\"
      onMouseOver=\"this.style.backgroundColor='lightgreen';this.style.color='darkgreen';
        this.style.cursor='hand'\"
      onMouseOut=\"this.style.backgroundColor='white';this.style.color='seagreen'\"
      onClick=\"location.href='buyer.php?id=$row[id]'\"
      >
      <td>$id</td>
      <td>$sname</td>
	  <td>$fname</td>
	  <td>$email</td>
	  <td>$block</td>
	  <td>$phone</td>
	  <td>$created_buyer</td>
    </tr>";
	}
?>
</table>
</body>
</html>
