<?php
if(isset($_POST['submit'])){
    $newProduct = new ProductController();
    $newProduct->addProduct();
}

?>

<div class="container mt-3">
    <div class="card-header">ADD Product</div>
   <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-primary">HOME</a>
   
   <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="ProductName">destination</label>
    <input type="text" name="ProductName" class="form-control" placeholder="ProductName">   
    <label for="Price">Price</label>
    <input type="number" name="Price" class="form-control" placeholder="Price">
    <label for="ProductDesc">description</label>
    <input type="text" name="ProductDesc" class="form-control" placeholder="ProductDesc">
    <label for="image"> IMAGE</label>
    <input type="file" name="file" class="form-control" >
    <button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</button>
    
    </div>

   </form>
    
       
</div>


