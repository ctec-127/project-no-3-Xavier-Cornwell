<?php // Filename: display-records.php

$pageTitle = "Record Management";
require 'inc/layout/header.inc.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <?php require_once "inc/display/content.inc.php"; ?>
        </div>
    </div> <!-- end row -->
    <!-- button for the back to top  and the js with it-->
    <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></a> 
<script src="js/sticky.js"></script>

</div> <!-- end container -->
<?php require_once 'inc/layout/footer.inc.php'; ?>