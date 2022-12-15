<?php

class Admin{
    public static function login($data){
        $email = $data['email'];
        try{
            $query = 'SELECT * FROM admin WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
}