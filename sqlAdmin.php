<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "company_info";

// MySQL 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$sql = "SELECT id, name, address, phone, email, description, slogan FROM companies"; // 슬로건을 추가했다고 가정
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 데이터 출력
    while($row = $result->fetch_assoc()) {
        echo '<li class="service-item">';
        echo '    <div class="service-header">';
        echo '        <p>' . htmlspecialchars($row["slogan"]) . '</p>'; // 업체 홍보 문구
        echo '    </div>';
        echo '    <div class="service-body">';
        echo '        <p>' . nl2br(htmlspecialchars($row["description"])) . '</p>'; // 업체 설명
        echo '        <p>' . htmlspecialchars($row["name"]) . '</p>'; // 업체 이름
        echo '        <p>' . htmlspecialchars($row["phone"]) . '</p>'; // 업체 번호
        echo '    </div>';
        echo '</li>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
