<?php
include("header.php");

$sql = "SELECT * FROM `contact_info`";

$result = mysqli_query($conn,$sql);

$row = $result->fetch_assoc();






?>
<!-- Jumbotron Header -->
  <div class="container">
      <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead"><?= $row['description'];?></p>
      </header>
  </div>

<?php
include("footer.php");
?>