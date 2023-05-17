<?php

namespace application\controller;

class ShopController extends Controller {
    public function mainGet() {
        return "main"._EXTENSION_PHP;
    }

    public function allList() {
        $result = $this->model->getList();
        $this->model->closeConn();
        if (count($result) === 0) {
            echo $errMsg = "상품이 없어여";
            exit;
        }
        $this->echoList($result);
    }

    public function viewList($list_cate_no) {
        $result = $this->model->getList("list_cate", $list_cate_no);
        $this->model->closeConn();
        if (count($result) === 0) {
            echo $errMsg = $list_cate."의 상품 정보가 없음.";
            exit;
        }
        $this->echoList($result);
    }

    public function echoList($arr_result) {
        $i = 0;
        while ($i < count($arr_result)) {
        $val = $arr_result[$i];
        echo 
        '<div class="col d-flex justify-content-center pt-3 pb-3">
            <div class="card" style="width: 18rem;  float:none; margin:0 auto; border:none;">
                <img src="'.$val['list_img'].'" class="card-img-top">
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

    // public function echoList($arr_result) {
    //     foreach ($arr_result as $val)
    //     echo 
    //     '<div class="col d-flex justify-content-center pt-3 pb-3">
    //         <div class="card" style="width: 18rem;  float:none; margin:0 auto; border:none;">
    
    //             <img src="'.$val['list_img'].'" class="card-img-top">
    //             <div class="card-body">
    //                 <a href="/user/detail?list_no='.$val['list_no'].'">
    //                     <h5 class="card-title">'.$val['list_name'].'</h5>
    //                     <h5 class="card-title">'.$val['list_detail'].'</h5>
    //                     <p class="card-text">'.$val['list_price'].'</p>
    //                 </a>
    //             </div>
    //         </div>
    //     </div>';
    //     }
}
