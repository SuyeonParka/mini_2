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
                ":u_id" => $arrUserInfo["id"]
                ,":u_pw" => $arrUserInfo["pw"]
                ,":u_name" => $arrUserInfo["name"]
            ];

        
        try 
        {
            $stmt = $this->conn -> prepare( $sql ); 
            $result = $stmt -> execute( $arr_prepare ); 
            return $result;
        } 
        catch ( Exception $e) 
        {
            return false;
        }
    }

    // 로그인 된 회원정보 불러옴 (for수정)
    public function userSel($userSel) {
    $sql =
        " SELECT "
        ."  u_no "
        ."  ,u_id "
        ."  ,u_pw "
        ."  ,u_name "
        ." FROM  "
        ." user_info "
        ." WHERE u_id = :u_id "
        ;
    
    $arr = getUser( $userSel );
    
    $arr_prepare =
        array(
            ":u_id" => $arr["u_id"]
        );

    $conn = null;
    try 
    {
        db_conn( $conn );
        $stmt = $conn->prepare( $sql );
        $stmt->execute( $arr_prepare );
        $result = $stmt->fetchAll();
    } 
    catch ( Exception $e ) 
    {
        return $e->getMessage();
    }
    finally
    {
        $conn = null;
    }
    
    return $result[0];
}
    
    //회원정보 수정
    public function userUpdate($userUpt) {
        $sql =
            " UPDATE "
            ." user_info "
            ." SET "
            ." ,u_pw "
            ." ,u_name "
            ;

        $arr_prepare = array();

        $conn = null;
        try{
            db_conn( $conn );
            $conn->beginTransaction();
            $stmt = $conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result = $stmt->rowCount();
            $conn->commit();
        }
        catch( Exception $e){
            $conn->rollBack();
            return $e->getMessage();
        }
        return $result;
    }

    // 회원정보 삭제
    public function listDel($list_del){
        $sql =
            " DELETE "
            ." FROM "
            ." user_info "
            ." WHERE "
            ." u_no = :u_no "
            ;
        
        $arr_prepare =
            array(
                "u_no" => $list_del["u_no"]
            );

            $conn = null;
            try{
                db_conn( $conn );
                $conn->beginTransaction();
                $stmt = $conn->prepare( $sql );
                $stmt->execute( $arr_prepare );
                $result = $stmt->rowCount();
                $conn->commit();
            } catch ( Exception $e ){
                $conn->rollBack();
                return $e->getMessage();
            }
            
            return $result;
        }
    }
