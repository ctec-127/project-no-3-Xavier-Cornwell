<?php // Filename: footer.inc.php ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center mt-4"><?php echo '<span class="font-weight-bold">' . $app_name . ' - Version ' . $app_version . "</span><br>" . $app_copyright;?></p>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
//configuring the datatable function
$(document).ready( function () {
    $('#table').DataTable({
        "lengthMenu":[ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "pageLength": 25
    });
} );
</script>
<!-- end div for the master container -->
</div>
</body>
</html>