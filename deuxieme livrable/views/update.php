<?php
if(isset($_POST['id'])){
    $exitProduct = new ProductController();
    $product = $exitProduct->getOneProduct();
}

if(isset($_POST['submit'])){
    $exitProduct = new ProductController();
    $exitProduct->updateProduct();
}

?>

<div class="container mt-3">
    <div class="card-header">ADD product</div>
   <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-primary">HOME</a>
   
   <form method="POST">
    <div class="form-group">
    <label for="ProductName">ProductName</label>
    <input value="<?php echo $product['ProductName']; ?>" type="text" name="ProductName" class="form-control" placeholder="ProductName">  
    <input type="hidden" name="id" value="<?php echo $product['id'];?>"> 
    <label for="Price">Price</label>
    <input value="<?php echo $product['Price']; ?>" type="number" name="Price" class="form-control" placeholder="description">
    <label for="ProductDesc">Description</label>
    <input value="<?php echo $product['ProductDesc']; ?>" type="text" name="ProductDesc" class="form-control" placeholder="price">
    <label for="price"> IMAGE</label>
    <input type="file" name="file" class="form-control" >
    <button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</button>
    </div>

   </form>
    
       
</div>
