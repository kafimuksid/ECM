<?php


require_once 'config.php';
include_once 'layout/header.php';
$sql='select * from about_info';
$result=mysqli_query($conn,$sql);
if(!$result){
  echo "query didn't execute";
}
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
                <div class="panel-title">Experience Form</div>

                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="about_exe.php" method="POST">
             <div class="form-group">
              <label class="col-sm-2 control-label">About</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="about" placeholder="About" > <?= $row['description']; ?> </textarea>
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
