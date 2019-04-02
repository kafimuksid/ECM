<footer>
<?php  require_once 'config.php'; ?>

     <div class="container">

        <div class="copy text-center">
           Copyright 2018 <a href='#'>Dokan.com</a>
        </div>

     </div>
  </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url; ?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url; ?>vendors/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url; ?>js/custom.js"></script>
<script src="<?php echo base_url; ?>js/tables.js"></script>
<script>
var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

$('.sidebar a').each(function(){
  if($(this).attr('href') == filename){
    $(this).parent().addClass('current')
  }
});
</script>
</body>
</html>
