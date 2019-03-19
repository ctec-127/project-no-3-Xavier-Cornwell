<?php // Filename: create-record.php
$pageTitle = "Create Record";
require_once 'inc/layout/header.inc.php'; 
?>

<div class="container mt-5">
	<div class="row card mt-5">
		<div class="col-lg-12 p-0">
			<h1 class ='text-center text-light bg-info p-5'>Create a New Record</h1>
			<?php require_once __DIR__ .'/inc/create/content.inc.php'; ?>
			<?php require_once __DIR__ .'/inc/shared/form.inc.php' ?>
		</div>
    </div>
</div>

<?php require_once 'inc/layout/footer.inc.php'; ?>