<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>피자 재료 입력하기</title>
</head>
<body>
	<h1>피자 재료 입력하기</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="ingredient1">재료 1:</label>
		<input type="text" name="ingredient1" id="ingredient1"><br>

		<label for="ingredient2">재료 2:</label>
		<input type="text" name="ingredient2" id="ingredient2"><br>

		<label for="ingredient3">재료 3:</label>
		<input type="text" name="ingredient3" id="ingredient3"><br>

		<label for="ingredient4">재료 4:</label>
		<input type="text" name="ingredient4" id="ingredient4"><br>

		<label for="ingredient5">재료 5:</label>
		<input type="text" name="ingredient5" id="ingredient5"><br>

		<input type="submit" value="제출하기">
	</form>

<?php
// 폼이 제출되면 회원 정보를 처리하는 코드
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// MySQL 데이터베이스 연결
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
  die("연결 실패: " . $conn->connect_error);
}

// 입력된 데이터 가져오기
// POST 데이터 받기
$data = $_POST['ingredient1'];

$sql_check = "SELECT * FROM ingredient WHERE name IN ('$data')";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    // 중복된 데이터가 있을 경우 count를 업데이트
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $count = $row['count'] + 1;
        $sql_update = "UPDATE ingredient SET count=$count WHERE name='$name'";
        mysqli_query($conn, $sql_update);
    }
} else {
    // 중복된 데이터가 없을 경우 데이터를 새로 저장
    $sql_insert = "INSERT INTO ingredient (name, count) VALUES ('$data', 1)";
    mysqli_query($conn, $sql_insert);
}

$data = $_POST['ingredient2'];
$sql_check = "SELECT * FROM ingredient WHERE name IN ('$data')";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    // 중복된 데이터가 있을 경우 count를 업데이트
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $count = $row['count'] + 1;
        $sql_update = "UPDATE ingredient SET count=$count WHERE name='$name'";
        mysqli_query($conn, $sql_update);
    }
} else {
    // 중복된 데이터가 없을 경우 데이터를 새로 저장
    $sql_insert = "INSERT INTO ingredient (name, count) VALUES ('$data', 1)";
    mysqli_query($conn, $sql_insert);
}

$data = $_POST['ingredient3'];
$sql_check = "SELECT * FROM ingredient WHERE name IN ('$data')";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    // 중복된 데이터가 있을 경우 count를 업데이트
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $count = $row['count'] + 1;
        $sql_update = "UPDATE ingredient SET count=$count WHERE name='$name'";
        mysqli_query($conn, $sql_update);
    }
} else {
    // 중복된 데이터가 없을 경우 데이터를 새로 저장
    $sql_insert = "INSERT INTO ingredient (name, count) VALUES ('$data', 1)";
    mysqli_query($conn, $sql_insert);
}

$data = $_POST['ingredient4'];
$sql_check = "SELECT * FROM ingredient WHERE name IN ('$data')";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    // 중복된 데이터가 있을 경우 count를 업데이트
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $count = $row['count'] + 1;
        $sql_update = "UPDATE ingredient SET count=$count WHERE name='$name'";
        mysqli_query($conn, $sql_update);
    }
} else {
    // 중복된 데이터가 없을 경우 데이터를 새로 저장
    $sql_insert = "INSERT INTO ingredient (name, count) VALUES ('$data', 1)";
    mysqli_query($conn, $sql_insert);
}

$data = $_POST['ingredient5'];
// 데이터 중복 확인
$sql_check = "SELECT * FROM ingredient WHERE name IN ('$data')";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    // 중복된 데이터가 있을 경우 count를 업데이트
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $count = $row['count'] + 1;
        $sql_update = "UPDATE ingredient SET count=$count WHERE name='$name'";
        mysqli_query($conn, $sql_update);
    }
} else {
    // 중복된 데이터가 없을 경우 데이터를 새로 저장
    $sql_insert = "INSERT INTO ingredient (name, count) VALUES ('$data', 1)";
    mysqli_query($conn, $sql_insert);
}
echo "데이터가 성공적으로 저장되었습니다.";

// MySQL 연결 종료
$conn->close();
}
?>


</body>
</html>