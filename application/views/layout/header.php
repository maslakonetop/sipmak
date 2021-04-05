<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIPMAK</title>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/assets/images/iconpemkabv1/apple-touch-icon.png')?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('/assets/images/iconpemkabv1/favicon-32x32.png')?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('/assets/images/iconpemkabv1/favicon-16x16.png')?>">
<link rel="manifest" href="<?php echo base_url('/assets/images/iconpemkabv1/site.webmanifest')?>">
<link rel="mask-icon" href="<?php echo base_url('/assets/images/iconpemkabv1/safari-pinned-tab.svg" color="#5bbad5')?>">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel="stylesheet">

<head class>
<script type="text/javascript">

	window.addEventListener("resize", function() {
		"use strict"; window.location.reload(); 
	});


	document.addEventListener("DOMContentLoaded", function(){

		// make it as accordion for smaller screens
		if (window.innerWidth > 992) {

			document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
				
				everyitem.addEventListener('mouseover', function(e){

					let el_link = this.querySelector('a[data-bs-toggle]');

					if(el_link != null){
						let nextEl = el_link.nextElementSibling;
						el_link.classList.add('show');
				 		nextEl.classList.add('show');
					}
					
				});
				everyitem.addEventListener('mouseleave', function(e){
				 	let el_link = this.querySelector('a[data-bs-toggle]');
					
					if(el_link != null){
						let nextEl = el_link.nextElementSibling;
						el_link.classList.remove('show');
				 		nextEl.classList.remove('show');
					}
					

				})
			});

		}
		// end if innerWidth
	}); 
	// DOMContentLoaded  end

</script>
<style>
body {
	background-image: url('<?php echo base_url('/assets/images/sipmakbodybg.jpg')?>');
  	background-size: cover;
}
</style>

</head>
<body>

<div class="container">

<!-- ============= COMPONENT ============== -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white fixed-top">
		<div class="container-fluid" style="width:100%;height100%">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/disperkimta.jpg')?>" width="250" height="60" class="d-inline-block align-top" alt=""></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main_nav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="welcome">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="map">Lokasi TPU</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Perijinan</a>
						<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="#">Ijin Baru</a></li>
						<li><a class="dropdown-item" href="#">Pembayaran Retribusi</a></li>
						<li><a class="dropdown-item" href="#">Permohonan Pemutihan</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
				</ul>
			</div> <!-- navbar-collapse.// -->
		</div> <!-- container-fluid.// -->
	</nav>
	<div class="bg-image" style="background-image: url('<?php echo base_url('/assets/images/sipmakheader.jpg')?>');
      width:100%; height: 720px;">
    
      </div>
    </div>
  </div>