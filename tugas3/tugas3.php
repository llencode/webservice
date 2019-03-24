<DOCTYPE! html>
    <html>
        <head>
            <title> tugas3</title>
        </head>
        <body>
            
        </body>
    </html>
</DOCTYPE>
<?php
// Check for the path elements
// Turn off error reporting
$konek=mysqli_connect("localhost","id8972197_umkm","jeatreya","id8972197_umkm");
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		echo "<h1>user</h1>";
	$arr = array();

	$sql = "SELECT user_id,password FROM user";
	$result = $konek->query($sql);

	if ($result->num_rows> 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
echo "user_id: " . $row["user_id"]. " - password: ". $row["password"]. "<br>";
			$temp = array(
						"user_id" => $row["user_id"],
						"password" =>$row["password"],);

					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
		echo "<br>";
				echo "<h1>bio</h1>";
	$arr1 = array();

	$sql1 = "SELECT user_id,nama,alamat,pos,telp FROM bio";
	$result1 = $konek->query($sql1);

	if ($result1->num_rows> 0) 
		{
		// output data of each row
		while($row1 = $result1->fetch_assoc()) {
echo "user_id: " . $row1["user_id"]. " - nama: ". $row1["nama"]." - alamat: ". $row1["alamat"]." - pos: ". $row1["pos"]." - telp: ". $row1["telp"]. "<br>";
			$temp1 = array(
						"user_id" => $row1["user_id"],
						"nama" =>$row1["nama"],
						"alamat" =>$row1["alamat"],
						"pos" =>$row1["pos"],
						"telp" =>$row1["telp"],);

					array_push($arr1, $temp1);
		
		}
		} else {
		echo "0 results";
		}
		echo "<br>";
		echo "<h1>item</h1>";
	$arr2 = array();

	$sql2 = "SELECT category,code,name_product,price,size_l,size_m,size_s,size_xl FROM item";
	$result2 = $konek->query($sql2);

		
			if ($result2->num_rows> 0) 
		{
		// output data of each row
		while($row2 = $result2->fetch_assoc()) {
echo "code: " . $row2["code"]. " - category: ". $row2["category"]." - name_product: ". $row2["nama_product"]." - price: ". $row2["price"]." - size_l: ". $row2["size_l"]." - size_m: ". $row2["size_m"]." - size_s: ". $row2["size_s"]." - size_xl: ". $row2["size_xl"]. "<br>";
			$temp2 = array(
						"code" => $row1["code"],
						"category" =>$row1["category"],
						"name_product" =>$row1["name_product"],
						"price" =>$row1["price"],
						"size_l" =>$row1["size_l"],
						"size_m" =>$row1["size_m"],
						"size_s" =>$row1["size_s"],
						"size_xl" =>$row1["size_xl"],);

					array_push($arr2, $temp2);
		
		}
		} else {
		echo "0 results";
		}
	
	echo "<br>";
		echo "<h1>pesanan</h1>";
	$arr3 = array();

	$sql3 = "SELECT date,code,delivery,price,size,user_id FROM pesanan";
	$result3 = $konek->query($sql3);

		
			if ($result3->num_rows> 0) 
		{
		// output data of each row
		while($row3 = $result3->fetch_assoc()) {
echo "user_id: " . $row3["user_id"]. " - code: ". $row3["code"]." - date: ". $row3["date"]." - delivery: ". $row3["delivery"]." - price: ". $row3["price"]." - size: ". $row3["size"]. "<br>";
			$temp3 = array(
						"user_id" => $row3["user_id"],
						"code" =>$row3["code"],
						"date" =>$row3["date"],
						"delivery" =>$row3["delivery"],
						"price" =>$row3["price"],
						"size" =>$row3["size"],);

					array_push($arr3, $temp3);
		
		}
		} else {
		echo "0 results";
		}
	
	$konek->close();
	$data = json_encode($arr);
	$data1 = json_encode($arr1);
	$data2 = json_encode($arr2);
	$data3 = json_encode($arr3);
	}

?>
