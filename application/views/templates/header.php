	<!doctype html> 
<html lang="en">  
	 <head>    
	  <!-- Required meta tags --> 
	      <meta charset="utf-8">  
	         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	 
	    <!-- Bootstrap CSS -->  

	       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	    <!-- My CSS -->
	    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	 
	    <title><?php echo $judulna ?></title>   
	 </head>   
	<body> 

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container">   
			<a class="navbar-brand" href="#">CodeIgniter</a> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">  
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
				<div class="navbar-nav">    

				       <a class="nav-item nav-link" href="<?php echo base_url(); ?>admin">Home<span class="sr-only">(current)</span> </a>     
				       <a class="nav-item nav-link" href="<?php echo base_url(); ?>mahasiswa">Data</a>   
					   <a class="nav-item nav-link" href="<?php echo base_url(); ?>about">Tentang</a>
       				   

				</div>  
			</div>
		</div>
		<a class="nav-item nav-link float-right" href="<?php echo base_url('login/logout'); ?>" >Keluar</a>
</nav>