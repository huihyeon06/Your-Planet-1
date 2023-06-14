<?php

include('./connect.php');

$_uname = $_POST['uname'];
$query = "INSERT INTO user (user_name) VALUES (?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $_uname);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo 'db에 연결 성공';
} else {
    echo 'db에 연결 실패' . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>