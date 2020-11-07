<?php 
$con=mysqli_connect("localhost","root","","product") 
or die (mysqli_connection_error());
echo "Connected to MySQL <br>";

mysqli_query($con, " CREATE TABLE NOT WXISTS 
products_info(
p_id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(p_id),p_name varchar(30),p_price INT )")
or die(Mysqli_Connect_error());
echo "table created! <br>";

mysqli_query($con,"INSERT INTO products_info (p_name  ,p_price)VALUED('Blactberry','1900')")
or die (Mysqli_Connect_error());

mysqli_query($con,"INSERT INTO products_info (p_name  ,p_price)VALUED('Galaxy Note3','2300')")
or die (Mysqli_Connect_error());

mysqli_query($con,"INSERT INTO products_info (p_name  ,p_price)VALUED('iphone 6s','2700')")
or die (Mysqli_Connect_error());

$query="SELECT *FROM products_info";
$result = mysqli_query($con,$query) or die (Mysqli_Connect_error());

while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	echo $row['p_name']."-".$row['p_price'];
	echo "<br>";
}


mysqli_query($con,"INSERT INTO products_info (p_name  ,p_price)VALUED('Sony Experia 22','1350')")
or die (Mysqli_Connect_error());

$res=mysqli_query($con,"UPDATE products_info SET p_price=1600 Where p_name='BLACHBERRY'")
or die (Mysqli_Connect_error());
