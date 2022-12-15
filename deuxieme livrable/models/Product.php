<?php
class Product {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmt->close();
        $stmt = null;
    }

    static public function getProduct($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM product WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product= $stmt->fetch(PDO::FETCH_ASSOC);
            return $product;
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }


    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO product (ProductName,Price,ProductDesc,image)VALUES (:ProductName,:Price,:ProductDesc,:image)');
        $stmt->bindParam(':Price',$data['Price']);
        $stmt->bindParam(':ProductName',$data['ProductName']);
        $stmt->bindParam(':ProductDesc',$data['ProductDesc']);
        $stmt->bindParam(':image',$data['image']);
                
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt=null;
    }


    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE product SET ProductName = :ProductName,Price = :Price,ProductDesc = :ProductDesc,image = :image WHERE id=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':Price',$data['Price']);
        $stmt->bindParam(':ProductName',$data['ProductName']);
        $stmt->bindParam(':ProductDesc',$data['ProductDesc']);
        $stmt->bindParam(':image',$data['image']);
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt=null;
    }

    public static function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM product WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
}
?>