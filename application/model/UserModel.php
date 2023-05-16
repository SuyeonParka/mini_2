<?php
namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo, $pwFlg = true) {
        $sql = " SELECT "
            ." * "
            ." FROM "
            ." user_info "
            ." WHERE "
            ." u_id = :id "
            ;
        
            if($pwFlg) {
                $sql .= " and u_pw = :pw";  // 아이디 중복 (아이디는 같고 비번을 다를 때 아이디 중복이 안된다고 해서 하는 작업)
            }

        $prepare = [
            ":id" => $arrUserInfo["id"]
        ];

        if($pwFlg) {
            $prepare[":pw"] = $arrUserInfo["pw"];
        }

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        } finally {
            
        }
        return $result;
    }
    
    public function insertUserInfo($arrUserInfo) {

        $sql =
        " INSERT INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." ,u_pw "
        ." ,u_name "
        ." ) "
        ." VALUES "
        ." ( "
        ." :u_id "
        ." , :u_pw "
        ." , :u_name "
        ." ) "
        ;

        $arr_prepare =
            [
                ":u_id" => $arrUserInfo["u_id"]
                ,":u_pw" => $arrUserInfo["u_pw"]
                ,":u_name" => $arrUserInfo["u_name"]
            ];

        
        try 
        {
            $stmt = $this->conn -> prepare( $sql ); 
            $result = $stmt -> execute( $arr_prepare ); 
            return $result;
        } 
        catch ( Exception $e) 
        {
            echo "UserModel->insertUser Error : ".$e->getMessage(); 
            exit();
        }
    }

    // db의 product_list 정보
    public function getList($arrListInfo) {
        $sql = " SELECT "
            ." list_name "
            ." ,list_detail "
            ." ,list_price "
            ." FROM "
            ." product_list "
            ." WHERE "
            ." list_no = :list_no "
            ;
        
        $prepare = [
            ":list_no" => $arrUserInfo["list_no"]
        ];

        $conn = null;

        try {
            db_conn($conn);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        } finally {
            $conn=null;
        }
        return $result;
    }
}