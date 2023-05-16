<?php

namespace application\controller;

class ProductController extends Controller {
    public function listGet() {    //login 접속할 때 이 메소드 호출
        return "list"._EXTENSION_PHP;
    }

    public function detailGet() {
        return "detail"._EXTENSION_PHP;
    }

    public function listList($arr_result) {
        $i = 0;
        while ($i < count($arr_result)) {
        $val = $arr_result[$i];
        echo 
        '<div class="col d-flex justify-content-center pt-3 pb-3">
            <div class="card" style="width: 18rem;  float:none; margin:0 auto; border:none;">
            <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/109465/product/image_1678822932889_1000.jpg" class="card-img-top" alt="..."">
                <img src="'.$val['img_path'].'" class="card-img-top">
                <div class="card-body">
                    <a href="/user/detail?list_no='.$val['list_no'].'">
                        <h5 class="card-title">'.$val['list_name'].'</h5>
                        <p class="card-text">'.$val['list_price'].'</p>
                    </a>
                </div>
            </div>
        </div>';
        $i++;
        }
    }
}
    
