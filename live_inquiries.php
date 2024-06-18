<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>실시간 대출문의</title>
    <link rel="stylesheet" href="live_inquiry.css"> <!-- 실시간 대출문의 전용 CSS 파일 -->
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
                    <ul>
                        <li><a href="index.php">홈</a></li>
                        <li><a href="#">지역별 업체찾기</a></li>
                        <li><a href="#">상품별 업체찾기</a></li>
                        <li><a href="live_inquiries.php">실시간 대출문의</a></li>
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
    
    <main>
        <section id="live-inquiry">
            <div class="container">
                <h2>실시간 대출문의</h2>
                <div class="statistics">
                    <div class="stat-item">
                        <p>대출신청건수</p>
                        <p>1,017,256건</p>
                    </div>
                    <div class="stat-item">
                        <p>대출승인건수</p>
                        <p>3,947건</p>
                    </div>
                    <div class="stat-item">
                        <p>이용자수</p>
                        <p>2,850만명</p>
                    </div>
                    <div class="stat-item">
                        <p>대출금액</p>
                        <p>15,507억원</p>
                    </div>
                </div>
                <div class="inquiry-filter">
                    <h3>실시간/은행대출/지역별 문의 선택하여 상담할 수 있습니다.</h3>
                    <ul>
                        <li><button>전체</button></li>
                        <li><button>신용대출</button></li>
                        <li><button>담보대출</button></li>
                        <li><button>전세자금대출</button></li>
                        <li><button>사업자대출</button></li>
                        <li><button>은행대출</button></li>
                        <li><button>소액대출</button></li>
                        <li><button>정부지원대출</button></li>
                        <li><button>자동차담보대출</button></li>
                        <li><button>저금리대출</button></li>
                        <li><button>고금리대출</button></li>
                    </ul>
                </div>
                <div class="inquiry-list">
                    <h3>전체 지역 문의 등록현황</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>분류</th>
                                <th>지역</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP 코드로 데이터베이스에서 가져온 문의 목록을 출력 -->
                            <?php include 'inquiries.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 대출나라. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
