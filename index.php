<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대출나라</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS 파일 경로 확인 -->
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <span>로그인 | 회원가입 | 회사소개</span>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <h1>대출나라</h1>
                <nav aria-label="Main navigation">
                    <ul class="main-nav">
                        <li class="dropdown">
                            <a href="#">지역별 업체찾기</a>
                            <ul class="dropdown-content">
                                <li><a href="#">서울</a></li>
                                <li><a href="#">경기</a></li>
                                <li><a href="#">인천</a></li>
                                <li><a href="#">대전</a></li>
                                <li><a href="#">대구</a></li>
                                <li><a href="#">부산</a></li>
                                <li><a href="#">광주</a></li>
                                <li><a href="#">울산</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">상품별 업체찾기</a>
                            <ul class="dropdown-content">
                                <li><a href="#">신용대출</a></li>
                                <li><a href="#">담보대출</a></li>
                                <li><a href="#">전세자금대출</a></li>
                                <li><a href="#">사업자대출</a></li>
                                <li><a href="#">자동차담보대출</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="live_inquiries.php">실시간 대출문의</a>
                            <ul class="dropdown-content">
                                <li><a href="#">실시간 대출문의</a></li>
                                <li><a href="#">대출문의 이용방법</a></li>
                                <li><a href="#">내 문의글 찾기</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">맞춤검색</a>
                            <ul class="dropdown-content">
                                <li><a href="#">조건별 검색</a></li>
                                <li><a href="#">금액별 검색</a></li>
                            </ul>
                        </li>
                        <li><a href="#">대출정보</a></li>
                        <li><a href="#">커뮤니티</a></li>
                        <li><a href="#">고객센터</a></li>
                    </ul>
                </nav>
                <div class="search-bar">
                    <label for="search" class="visually-hidden">업체명 검색</label>
                    <input type="text" id="search" placeholder="업체명 검색">
                    <button>검색</button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- 배너 섹션 추가 -->
    <section class="banner">
        <div class="container">
            <h2>대출나라에 오신 것을 환영합니다!</h2>
            <p>최고의 대출 상품을 찾아드립니다.</p>
        </div>
    </section>
    
    <main>
        <section id="services">
            <div class="container">
                <h2>메인 등록업체</h2>
                <ul class="service-list">
                    <?php include 'sqlAdmin.php'; ?>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 대출나라. All rights reserved.</p>
        </div>
    </footer>
    <script src="loan_script.js"></script>
</body>
</html>
