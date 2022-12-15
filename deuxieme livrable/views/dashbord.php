<?php
$data = new ProductController();
$products = $data->getAllProducts();

?>

<div class="container mt-3">
   <?php include "./views/includes/alerts.php" ?>
   <a href="<?php echo BASE_URL;?>add" class="btn btn-primary">ADD</a>
   <a href="<?php echo BASE_URL;?>logout" class="btn btn-danger">LOG OUT</a>

    <table class="table">
        <thead>
            <th>image</th>
            <th>destination</th>
            <th>price</th>
            <th>description</th>
            <th>action</th>
        </thead>
        <tbody>
            <?php foreach($products as $product):?>
            <tr>
                <td><img src="./views/upload/<?php echo $product['image'];?>"></td>
                <td><?php echo $product['ProductName'];?></td>
                <td><?php echo $product['Price'];?></td>
                <td><?php echo $product['ProductDesc'];?></td>
                
                
                <td class="d-flex flex-row">
                    <form method="POST" class="me-1" action="update">
                        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                        <button class="btn btn-sm btn-warning"><i class="fa fa-eidt"> edit</i></button>
                        
                    </form>
                    <form method="POST" class="me-1" action="delete">
                        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash">delete</i></button>
                    </form>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



