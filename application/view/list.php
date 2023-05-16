<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/view.css"><title>List</title>
</head>
<body>
    <!-- 헤더 -->
    <?php
        require_once(_HEADER._EXTENSION_PHP)
    ?>
    
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
    
    <?php
        require_once(_FOOTER._EXTENSION_PHP)
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function redirectLogout() {
            location.href = "/user/logout";
        }
    </script>
</body>
</html>