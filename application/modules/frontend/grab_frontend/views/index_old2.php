<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sistem Pakar - Penyakit Jagung</title>
    <meta name="Description" content="Sistem pakar pendeteksi penyakit pada tanaman jagung">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/sp/css/bootstrap/bootstrap.min.css">

	
	<link rel="stylesheet" href="<?=base_url()?>assets/sp/css/normalize/normalize.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/sp/css/style.css">
  </head>
  <body>
	<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
		  <img src="<?=base_url()?>assets/sp/images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
		  SISTEM PAKAR PENYAKIT JAGUNG
		</a>
	  </nav>
		  <div class="container">
			  <div class="form-wrapper">
					  <h2>Diagnosa Penyakit jagung</h2>
					  <p>Pilih gejala yang anda ketahui pada pajung untuk melihat jenis penyakitnya</p>
					  <form action="">
						  <label for="choice-1">
							  <input type="radio" id="choice-1" name="choice" value=""/>
							  <div>
								  Daun jagung mengering
								  <span>Yakin?</span>
							  </div>
						  </label>
						  
						  <label for="choice-2">
							  <input type="radio" id="choice-2" name="choice" value="" />
							  <div>
								  Daun menguning
								  <span>penyakit.</span>
							  </div>
						  </label>
						  
						  <label for="choice-3">
							  <input type="radio" id="choice-3" name="choice" value="" />
							  <div>
								  Daun membususk
								  <span>Penyakit .</span>
							  </div>
						  </label>
						  
						  <label for="choice-4">
							  <input type="radio" id="choice-4" name="choice" value="" />
							  <div>
								  daun jagung terkena ulat
								  <span>No it doesn't.</span>
							  </div>
						  </label>
						  <button type="submit">Next</button>
					  </form>
				  </div>

				  <!-- ini menggunkan checkbot kotak -->

				  <div class="container">
						<h1>Sistem Pakar </h1>
						<form class="form cf">
							<section class="plan cf">
								<h2>Pilih kriteria Penyakit:</h2>
								<input type="radio" name="radio1" id="free" value="free"><label class="free-label four col" for="free">Daun menguning</label>
								<input type="radio" name="radio1" id="basic" value="basic" checked><label class="basic-label four col" for="basic">Daun kering</label>
								<input type="radio" name="radio1" id="premium" value="premium"><label class="premium-label four col" for="premium">Daun busuk</label>
							</section>
							<!-- <section class="payment-plan cf">
								<h2>Select a payment plan:</h2>
								<input type="radio" name="radio2" id="monthly" value="monthly" checked><label class="monthly-label four col" for="monthly">Monthly</label>
								<input type="radio" name="radio2" id="yearly" value="yearly"><label class="yearly-label four col" for="yearly">Yearly</label>
							</section> -->
							<section class="payment-type cf">
								<h2>Gelaja Penyakit jagung:</h2>
								<input type="radio" name="radio3" id="credit" value="credit"><label class="credit-label four col" for="credit">Batang busuk</label>
								<input type="radio" name="radio3" id="debit" value="debit"><label class="debit-label four col" for="debit">Gejala Pada daun</label>
								<input type="radio" name="radio3" id="paypal" value="paypal" checked><label class="paypal-label four col" for="paypal">Gejala Pada Akar</label>
							</section>
							<center>
								<input class="submit" type="submit" value="Next">		
				
							</center>
				
						</form>
					</div>
    <!-- Optional JavaScript -->
	<script src="<?=base_url()?>assets/sp/js/index.js"></script>
  </body>
</html>
