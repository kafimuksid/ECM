
<?php
include('header.php');


?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome !</h1>
        <p class="lead">This is a website for inthusiasts who are interested in Buying phones of various brands!</p>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

      	<!-- <?php 
             
          	  $sql = "SELECT * FROM `product_info`";
              $result = mysqli_query($conn,$sql);
              while ($row=$result->fetch_assoc()) {
                # code...
           


          	?> -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
          	<!-- <form action="add_to_cart.php" method="POST"> -->
            <img class="card-img-top" src="admin/<?= $row['image'] ?>" alt="<?= $row['image'] ?>" style="width:150px; height:150px;  margin-left: auto;
    margin-right: auto;">
      		<input type="hidden" name="image" value="<?= $row['image'] ?>">
            <div class="card-body">
              <h4 class="card-title"><?= $row['title'] ?></h4>
             
              <p class="card-text"><?= $row['about'] ?></p>
            
              <h4>$<?= $row['price'] ?></h4>
              
              <input type="number" min="1" step="1" name="quantity" value="1">
            </div>
            <div class="card-footer">
              <a href="add_to_cart.php?id=<?= $row['id']  ?>">Add</a>
            <!--   <button class="btn btn-primary" type="submit" name="submit">Add</button>   -->
            </div>
          </div>
        </div>
      <?php } ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php
include('footer.php');

?>