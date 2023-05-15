<?php
namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo) {
        $sql = " SELECT "
            ." * "
            ." FROM "
            ." user_info "
            ." WHERE "
            ." u_id = :id "
            ." AND "
            ." u_pw = :pw "
            ;
        
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }
    
    public function signUp() {

        $sql =
        " INSERT INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." ,u_pw "
        ." ) "
        ." VALUES "
        ." ( "
        ." :u_id "
        ." , :u_pw "
        ." ) "
        ;

        $arr_prepare =
        array(
            ":u_id" => $param_arr["u_id"]
            ,":u_pw" => $param_arr["u_pw"]
        );

        
        try 
        {
            $this->conn->beginTransaction();//
            $stmt = $conn -> prepare( $sql ); 
            $stmt -> execute( $arr_prepare ); 
            $result = $stmt->fetchAll();
            $conn->commit();//
        } 
        catch ( Exception $e) 
        {
            $conn->rollBack();//
            return $e->getMessage(); 
        }
        finally 
        {
            $conn = null; //
        }

        return $result;
    }
}