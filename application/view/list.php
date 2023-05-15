<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>List</title>
    <style>

        @font-face {
            font-family: 'PuradakGentleGothicR';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_11-01@1.1/PuradakGentleGothicR.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        body {
        font-family: 'PuradakGentleGothicR';
        }
        
        footer {
            font-size: 10px;
        }
    </style>
</head>
<body>
    <!-- List File!!!!! -->
    <!-- <button id="logout" onclick="redirectLogout();">Logout</button> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">OTIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">big-bag</a></li>
                <li><a class="dropdown-item" href="#">small-bag</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">item</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="logout" onclick="redirectLogout();">
                    Logout
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sign.php" id="sign">
                    Sign up
                </a>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <!-- 카드(grid) -->
    <div class="container">
        <div class="row row-cols-xxl-4">
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem;  float:none; margin:0 auto; border:none;">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678822932889_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTILING HAND BAG</h5>
                    <p class="card-text">DENIM CLASSIC</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678823745299_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING SHOULDER BAG</h5>
                    <p class="card-text">DENIM SKY</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678822983086_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTILING HAND BAG</h5>
                    <p class="card-text">DENIM HAIRY</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678823008427_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING HAND BAG</h5>
                    <p class="card-text">SILVER</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678822572282_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING HAND BAG</h5>
                    <p class="card-text">BLUSH PINK</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678822368713_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING HAND BAG</h5>
                    <p class="card-text">PEARL CREAM</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678824149036_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING CROSS BAG MINI</h5>
                    <p class="card-text">SILVER</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem; float:none; margin:0 auto; border:none">
                    <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678823978095_1000.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">RUSTLING CROSS BAG MINI</h5>
                    <p class="card-text">BLUSH PINK</p>
                    <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY/CART
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 모달 -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    구매하기
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BUY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                LIST
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">CANCLE</button>
                    <button type="button" class="btn btn-dark">CART</button>
                    <button type="button" class="btn btn-dark">BUY</button>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="container-fluid navbar-fixed-bottom">
        <span>상호: 오타이 | 대표: 이예임 | 개인정보관리책임자: 이예임 | 전화: 010-0000-0000 | 이메일: otie-000@naver.com
            
            주소: 서울특별시 강북구 00로 000, 2층 (번동) | 사업자등록번호: 000-00-00000 | 통신판매: 0000-서울강북-0000 호 | 호스팅제공자: (주)00샵
            <br>
            <span class="foot">이용약관 개인정보처리방침 사업자정보확인</span>
            <br>
            Otie
        </span>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function redirectLogout() {
            location.href = "/user/logout";
        }
    </script>
</body>
</html>