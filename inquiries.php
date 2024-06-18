<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loan_inquiries";

// MySQL 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$sql = "SELECT id, category, region, title, author, date, views FROM inquiries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["category"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["region"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["author"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["date"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["views"]) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>문의가 없습니다.</td></tr>";
}

$conn->close();
?>
