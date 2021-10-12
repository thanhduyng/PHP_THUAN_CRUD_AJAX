<?php
	$servername = "localhost";
	$username = "root";
	$password = "Admin@123";
	$db="mydbpdo";
	$conn = mysqli_connect($servername, $username, $password,$db);

    //Kiểm tra kết nối
if (!$conn) {
    exit('Kết nối không thành công!');
}
// thành công
// echo 'Kết nối thành công!';
