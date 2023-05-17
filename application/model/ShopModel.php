<?php
namespace application\model;

class ShopModel extends Model{
    public function getList($listFlg = "", $num = 0) {
        $sql = 
            " SELECT "
            ." * "
            ." FROM "
            ." product_list "  
            ;

        if($num !== 0 && $listFlg = ""){
            $sql .= " WHERE ".$listFlg." = :".$listFlg;
        }

        $prepare = [];

        if($num !== 0) {
            $prepare[":".$listFlg] = $num;
        }


        $conn = null;

        try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($prepare);
                $result = $stmt->fetchAll();
                
        } catch (Exception $e) {
            echo "ProductModel->getList Error : ".$e->getMessage();
            exit();

        }
        return $result;
    }
}