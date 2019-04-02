<?php


require_once 'config.php';
include_once 'layout/header.php';
$id =   input_data($_GET["id"]);

$sql = "SELECT * FROM `product_info` Where id='$id'";

$result = mysqli_query($conn,$sql);

$row = $result->fetch_assoc();




 ?>

 <div class="page-content">
   <div class="row">
   <div class="col-md-2">
     <?php include_once 'layout/sidebar.php'; ?>
     </div>
<div class="col-md-10">

    <div class="row">
      <div class="col-md-6">
        <div class="content-box-large">
          <div class="panel-heading">
                <div class="panel-title">Products</div>

                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="product_edit_exe.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="Name" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" id="title" placeholder="title"  value="<?= $row['title'] ?>">
                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">About</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="about" placeholder="About" rows="3"><?= $row['about'] ?> </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="price" class="col-sm-2 control-label">Price</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="price" id="price" placeholder="price"  value="<?= $row['price'] ?>" >
              </div>
            </div>

            <div class="form-group">
              <label for="image" class="col-sm-2 control-label">Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="img" id="img" placeholder="Image" >
              </div>
            </div>

            <div class="form-group">
              <label for="image_pic" class="col-sm-2 control-label">Image</label>
              <div class="col-sm-10">
                <img src="<?= $row['image'] ?>" alt="image">
              </div>
            </div>

            <div class="form-group">
              <label for="quantity" class="col-sm-2 control-label">Quantity</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity" value="<?= $row['quantity'] ?>"  >
              </div>
            </div>
            
            

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>



  <!--  Page content -->
</div>

</div>
</div>
<?php
include_once 'layout/footer.php';
 ?>
