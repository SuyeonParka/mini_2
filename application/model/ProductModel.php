<?php
namespace application\model;

class ProductModel extends Model{

    // db의 product_list 정보
    public function getList($arrListInfo) {
        $sql = " SELECT "
            ." * "
            ." FROM "
            ." product_list "  
            ;
        
        $prepare = [
            ":list_no" => $arrUserInfo["list_no"]
        ];

        $conn = null;

        try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($prepare);
                $result = $stmt->fetchAll();

        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();

        } finally {
            $conn=null;
        }
        return $result[0];
    }


}