<?php 
 include("header.php");
if(empty($_SESSION["username"])){

   
  header("location:index.php");
   
  }
  if(isset($_POST['submit']))
  {
    $user=$_SESSION['username'];
    $total = 0;

              $sql1 = "SELECT * FROM `order_info` WHERE `member_email`='$user' and `status`=0";
              $result1 = mysqli_query($conn,$sql1);
              while ($row=$result1->fetch_assoc()) {
                $total+=$row['product_price'];
              }
               $sql2="UPDATE `order_info` SET `total_price`='$total',`status`=1 WHERE `member_email`='$user' and `status`=0";

               $result2 = mysqli_query($conn,$sql2);
               echo "<br><br><br>Total Price:".$total;
  }	
  
    ?>
<div class="content-box-large">
          <div class="panel-heading">
                <div class="panel-title">Products</div>

                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
          <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $user=$_SESSION['username'];

              $sql = "SELECT * FROM `order_info` WHERE `member_email`='$user' and `status`=0  ";
              $result = mysqli_query($conn,$sql);
               $total1 = 0;
              while ($row=$result->fetch_assoc()) { 
               
                $total1 +=$row['product_price'];
                # code...
              ?><tr>
                <td><?= $row['product_names'] ?></td>
                <td><?= $row['product_price'] ?></td>
                <td><a href="cart_delete.php?id=<?= $row['order_id']  ?>">Remove</a></td>

              </tr>
              <?php } ?>
              <h5>Total:<?= $total1 ?></h5>



              
            </tbody>
          </table>
          <form method='POST'>
            
          <input type="submit" name="submit">
          </form>
          </div>
        </div>










<?php include("footer.php")  ?>