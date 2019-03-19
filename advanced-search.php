<?php // Filename: create-record.php
$pageTitle = "Advanced Search";
require_once 'inc/layout/header.inc.php'; 
?>
<div id="master">
<!-- attempt at animation -->
<!-- <section>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>

<script>
	let grids = document.querySelectorAll('section div');
	
	let num = 0;
	const delay = time => new Promise(resolve => setTimeout(resolve,time));
	
	grids.forEach(grid=>{
	delay(0).then(() =>{
		setTimeout(() =>{
		grid.style.backgroundColor='#fc4445';
		}, );
	})

	delay(0).then(() =>{
		setTimeout(() =>{
		grid.style.backgroundColor='#ff7a7b';
		}, num +=50 );
	})

	delay(50).then(() =>{
		setTimeout(() =>{
		grid.style.backgroundColor='#fafafa';
	
		}, num +=50 );
	})
	
	})

</script> -->
<!-- attempt at animation -->


<div class="container card mt-5">
	<div class="row">
		<div class="col-lg-12 p-0">
			<h1 class ="text-center text-light bg-info p-5">Advanced Search</h1>
            <?php require_once __DIR__ .'/inc/search/form.inc.php' ;?>
		</div>
    </div>
</div>
<br>
<div class="col-sm-12 col-md-12 col-lg-12" >
<?php require_once __DIR__ .'/inc/search/search.inc.php'; ?>
</div>
<!-- button for the back to top  and the js with it-->
<a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></a> 
<script src="js/sticky.js"></script>


<?php require_once 'inc/layout/footer2.inc.php'; ?>
