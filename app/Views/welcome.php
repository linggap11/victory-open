<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>1st Victory National Open Taekwondo Championship 2023</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="1st Victory National Open Taekwondo Championship 2023">
    <meta name="author" content="Victory Taekwondo Club Bandung">    
    <link rel="shortcut icon" href="favicon.png"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
	<style>
		.timeline {
			line-height: 1.4em;
			list-style: none;
			margin: 0;
			padding: 0;
			width: 100%;
		}
		.timeline h1, .timeline h2, .timeline h3, .timeline h4, .timeline h5, .timeline h6 {
			line-height: inherit;
		}

		/*----- TIMELINE ITEM -----*/
		.timeline-item {
			padding-left: 40px;
			position: relative;
		}
		.timeline-item:last-child {
			padding-bottom: 0;
		}

		/*----- TIMELINE INFO -----*/
		.timeline-info {
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 3px;
			margin: 0 0 0.5em 0;
			text-transform: uppercase;
			white-space: nowrap;
		}

		/*----- TIMELINE MARKER -----*/
		.timeline-marker {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			width: 15px;
		}
		.timeline-marker:before {
			background: #dba505;
			border: 3px solid transparent;
			border-radius: 100%;
			content: "";
			display: block;
			height: 15px;
			position: absolute;
			top: 4px;
			left: 0;
			width: 15px;
			transition: background 0.3s ease-in-out, border 0.3s ease-in-out;
		}
		.timeline-marker:after {
			content: "";
			width: 3px;
			background: #CCD5DB;
			display: block;
			position: absolute;
			top: 24px;
			bottom: 0;
			left: 6px;
		}
		.timeline-item:last-child .timeline-marker:after {
			content: none;
		}

		.timeline-item:not(.period):hover .timeline-marker:before {
			background: transparent;
			border: 3px solid #dba505;
		}

		/*----- TIMELINE CONTENT -----*/
		.timeline-content {
			padding-bottom: 40px;
		}
		.timeline-content p:last-child {
			margin-bottom: 0;
		}
		.footer-heart{text-align:center;font-family: open sans, sans-serif;}

		.footer-heart a{/* border-bottom: 1px solid #453886; *//* color: #453886; *//* padding-bottom: .25em; *//* text-decoration: none; */}

		.footer-heart a:hover{color:#2196f3; background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='%23453886' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
			background-position: bottom;
			background-repeat: repeat-x;
			background-size: 20%;
			border-bottom: 0;
			padding-bottom: .3em;
			text-decoration: none;}

		.emoji{vertical-align: middle;
		}
		.pic {
			margin-top: 30px;
			margin-bottom: 20px;
		}
		.card-block {
			width: 200px;
			border: 1px solid lightgrey;
			border-radius: 5px !important;
			background-color: #FAFAFA;
			margin-bottom: 30px;
		}
		@media (max-width: 1000px) {

			.card-block {
				width: 120px;
				border: 1px solid lightgrey;
				border-radius: 5px !important;
				background-color: #FAFAFA;
				margin-bottom: 10px;
			}

			.irc_mut {
				width: 50px;
			}

			.card {				
				box-shadow: 2px 2px 6px 0px #6b5104;
			}

		}

		.card-body.show {
			display: block;
		}

		.card {			
			box-shadow: 2px 2px 6px 0px #6b5104;
		}

		.radio {
			display: inline-block;
			border-radius: 0;
			box-sizing: border-box;
			cursor: pointer;
			color: #000;
			font-weight: 500;
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			-o-filter: grayscale(100%);
			-ms-filter: grayscale(100%);
			filter: grayscale(100%);
		}


		.radio:hover {
			box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
		}

		.radio.selected {
			box-shadow: 0px 8px 16px 0px #EEEEEE;
			-webkit-filter: grayscale(0%);
			-moz-filter: grayscale(0%);
			-o-filter: grayscale(0%);
			-ms-filter: grayscale(0%);
			filter: grayscale(0%);
		}

		.selected {
			background-color: #ecb206;
		}

		.swal-text {
			text-align: center;
		}

		.loader {
			display: none;
			height: 100%;			
			width: 100%;
			z-index: 9999;
		}

		.select2-container--default .select2-selection--single .select2-selection__rendered {
			line-height: 48px;
		}

		.select2-container .select2-selection--single {
			height: 48px;
		}

		.hr-text {
			line-height: 1em;
			position: relative;
			outline: 0;
			border: 0;
			color: black;
			text-align: center;
			height: 1.5em;
			opacity: 0.5;
			margin: 15px 0 0 0;
		}
		.hr-text:before {
			content: "";
			background: linear-gradient(to right, transparent, #818078, transparent);
			position: absolute;
			left: 0;
			top: 50%;
			width: 100%;
			height: 1px;
		}
		.hr-text:after {
			content: attr(data-content);
			position: relative;
			display: inline-block;
			color: black;
			padding: 0 0.5em;
			line-height: 1.5em;
			color: #818078;
			background-color: #fcfcfa;
		}
		.float{
			position:fixed;
			width:60px;
			height:60px;
			bottom:40px;
			right:40px;
			background-color:#25d366;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			font-size:30px;
			box-shadow: 2px 2px 3px #999;
			z-index:100;
		}

		.my-float{
			margin-top:16px;
		}
	</style>
</head> 

<body>    
    <header class="header">	    
        <div class="branding">
            <div class="container-fluid position-relative pt-4">
                <div class="logo-wrapper">
	                <div class="site-logo">
						<div class="navbar-brand">
							<img class="logo-icon me-2" src="assets/images/victory-open-small.png" alt="logo" style="margin-top: -10px; margin-left: 45px"><span class="logo-text"></span>							
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right; margin-right: 45px">Pendaftaran</button>
						</div>
					</div>    					
				</div>
	        	
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
    <section class="hero-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
				    <div class="promo pe-md-3 pe-lg-5">
					    <h1 class="headline mb-3">
							1<sup>st</sup> Victory National Open Taekwondo Championship 2023
					    </h1><!--//headline-->
					    <div class="subheadline mb-4" style="text-align: justify;">
						<b>“MEMBANGUN AKHLAK DENGAN PRESTASI”</b>. Melalui tema ini, kami ingin memberi pesan kepada peserta bahwa yang terpenting dalam suatu pertandingan adalah setiap peserta memiliki sikap yang pantang menyerah, menjunjung tinggi kejujuran dan kebenaran, serta mengeluarkan potensi dan kemampuan sebaik mungkin. Itu semua dalam rangka membangun akhlak dengan prestasi.

					    </div><!--//subheading-->
					    
					    <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
						    <div class="col-12 col-md-auto">
						        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pendaftaran</button>
						    </div>
						    <div class="col-12 col-md-auto">
						        <a class="btn btn-secondary scrollto w-100" href="#selengkapnya">Selengkapnya</a>
						    </div>
					    </div><!--//cta-holder-->
					    <!-- Button trigger modal -->						
						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								<div class="modal-header">									
								</div>
								<div class="modal-body">
									<div class="row justify-content-center">
										<div class="col-md-9">
											<div class="card text-center justify-content-center shaodw-lg  card-1 border-0 bg-white px-sm-2">
												<div class="card-body show  ">
													<div class="row">
														<div class="col">
															<h5><b>Daftar</b></h5>
															<p>Pilih salah satu,</p>
															
														</div>
													</div>
													<div class="radio-group row justify-content-between px-3 text-center a">
														<div data-id="tim" class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio selected">
															<div class="flex-row">
																<div class="col">
																	<div class="pic"> <img class="irc_mut img-fluid" src="assets/images/team.png" width="100" height="100"> </div>
																	<p>Tim</p>
																</div>
															</div>
														</div>
														<div data-id="atlet" class="col-auto ml-sm-2 mx-1 card-block  py-0 text-center radio">
															<div class="flex-row">
																<div class="col">
																	<div class="pic"> <img class="irc_mut img-fluid" src="assets/images/peserta.png"  width="100" height="100"> </div>
																	<p>Atlet</p>
																</div>
															</div>
														</div>
													</div>
													<div class="row justify-content-center">
														<div class="col">
															<p class="text-muted">Sebelum mendaftarkan atlet, pastikan tim-mu sudah terdaftar...</p>
															<!-- <div class="alert m-0 alert-warning alert-dismissible fade" id="alert-select" role="alert">
																Pendaftaran atlet mulai tanggal <strong>05 Januari 2023</strong>
															</div> -->
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" data-id="tim" class="btn btn-primary next">Selanjutnya <i class="fa fa-angle-right" aria-hidden="true"></i></button>
								</div>
								</div>
							</div>
						</div>		
						
						<div class="modal fade" id="staticBackdropTim" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<form id="formTim">
										<div class="modal-header">		
											<h5 class="modal-title" id="exampleModalLabel">Pendaftaran Tim</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">							
										</div>
										<div class="modal-body">
												<div class="mb-3">
													<label class="form-label">Nama Tim</label>
													<input type="text" name="tim" class="form-control form-control-sm" required placeholder="Nama Club / Dojang">
												</div>
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input type="email" name="email" class="form-control form-control-sm" required placeholder="name@example.com">
											</div>											
											<div class="mb-3">
												<label class="form-label">Manager Tim</label>
												<input type="text" name="manager" class="form-control form-control-sm" required placeholder="">
											</div>
											<div class="mb-3">
												<label class="form-label">Coach</label>
												<input type="text" name="coach" class="form-control form-control-sm" required placeholder="">
											</div>
											<div class="mb-3">
												<label class="form-label">No HP/WA</label>
												<input type="text" name="wa" class="form-control form-control-sm" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
											</div>
											<div class="mb-3">
												<label class="form-label">Jumlah Atlet (perkiraan)</label>
												<input type="text" name="jumlah_atlet" class="form-control form-control-sm" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  value="1">
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary back"><i class="fa fa-angle-left" aria-hidden="true"></i> Kembali</button>
											<button type="submit" data-id="" class="btn btn-primary">Submit <span class="loader"><img src="assets/images/spinner.gif" alt="processing..." /></span></button>
											
										</div>										
									</form>
								</div>
							</div>
						</div>
						
				    </div><!--//promo-->
			    </div><!--col-->
			    <div class="col-12 col-md-5 mb-5 align-self-center">
				    <div class="book-cover-holder">
					    <img class="img-fluid book-cover" src="assets/images/tkd-siluet-2-gold.png" alt="book cover" >
					    
				    </div><!--//book-cover-holder-->
				   
			    </div><!--col-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//hero-section-->
    
    <section id="selengkapnya" class="benefits-section theme-bg-light-gradient py-5">
		<div class="modal fade" id="staticBackdropAtlet" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content form-atlet-rep" >
					<form id="formAtlet" enctype="multipart/form-data">
						<div class="modal-header">		
							<h5 class="modal-title" id="exampleModalLabel">Pendaftaran Atlet</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">							
						</div>
						<div class="modal-body">							
							<div class="row">
								<div class="col-sm-12">
									<label for="">Pilih Tim anda</label>
									<select class="form-control select-tim" name="tim" required style="width: 100%;">
										<option value="">-</option>
										<?php if ($tim->getNumRows() > 0) : ?>
											<?php foreach($tim->getResultObject() as $club) : ?>
												<option value="<?= $club->id ?>"><?= $club->nama_club ?> (Manager: <?= $club->manager ?>) </option>
											<?php endforeach ?>
										<?php endif ?>
									</select>									
								</div>
								<div class="row peserta-pertama">
									<div class="col-sm-12 mt-2">																		
										<h6>Atlet</h6>				
									</div>
									<div class="col-sm-4 mt-2">																		
										<input type="hidden" name="id[]" class="id" value="1">
										<label for="">Kategori</label>
										<select name="category[]"  data-id="1" class="form-control form-control-sm cat cat_1">
											<option value="">-</option>
											<option value="kyorugi">KYORUGI</option>
											<option value="poomsae">POOMSAE</option>
										</select>									
									</div>								
									<div class="col-sm-4 mt-2">
										<label for=""></label>
										<select name="person[]" data-id="1" data-cat="" class="form-control person form-control-sm" disabled>										
											<option value="">-</option>
										</select>
									</div>
									<div class="col-sm-4 mt-2">
										<label for="">Kelas</label>
										<select name="kelas[]" data-id="1" class="form-control form-control-sm kelas">										
													
										</select>
									</div>	
									<div class="row atl">
										<div class="col-sm-3 mt-2 first">
											<label for="">Nama Lengkap</label>
											<input
												type="text"
												name="nama[]"
												class="form-control"
												placeholder="Nama Lengkap"
												required
											/>
										</div>
										<div class="col-sm-3 mt-2 first">
											<label for="">Jenis Kelamin</label>
											<select name="jenis_kelamin[]" class="form-control" required>
												<option value="">-</option>
												<option value="PUTRA">PUTRA</option>
												<option value="PUTRI">PUTRI</option>
										</select>
										</div>
										<div class="col-sm-3 mt-2 first">
											<label for="">Tanggal lahir</label>
											<input
												type="date"
												name="tgl_lahir[]"
												class="form-control"
												data-id="1"
												required
											/>
										</div>
										<div class="col-sm-3 mt-2 first">
											<label for="">Pas Foto</label><input
												type="file"
												name="foto[]"
												accept="image/*"
												class="form-control foto"
												required
											/>
											<small>Maksimum file berukuran 1MB</small>
										</div>
										<div class="row berkas-syarat">
											<hr class="hr-text" data-content="Upload Berkas" />
											<div class="col-sm-6 mt-2 atlet">
												<label for="">1. Sertifikat Geup/POOM/DAN</label><input
												type="file"
												name="geup[]"
												accept="image/*, .pdf"
												class="form-control"
												required
												/>
												<small>Maksimum file berukuran 1MB</small>
											</div>
											<div class="col-sm-6 mt-2 akte atlet">
												<label for="">2. Akte Kelahiran</label><input
												type="file"
												name="akte[]"
												accept="image/*, .pdf"
												class="form-control"
												required
												/>
												<small>Maksimum file berukuran 1MB</small>
											</div>
										</div>

									</div>	
								</div>								
								<div class="row summary mt-4" style="display: block; text-align: -webkit-center;">								
									<hr class="hr-text" data-content="Summary" />
									<div class="col-sm-6 kategori table-responsive">									
										<table class="table table-warning table-bordered text-center">
											<thead>
												<tr>													
													<th>Kategori</th>
													<th>Jumlah</th>
												</tr>
											</thead>
											<tbody class="total-kategory">												
											</tbody>
										</table>
										<button type="button"  class="btn btn-danger btn-sm submit-peserta" style="display: none;"><i class="fa fa-check-circle"></i> Submit</button>			
									</div>
									
								</div>														 
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary back"><i class="fa fa-angle-left" aria-hidden="true"></i> Kembali</button>							
							<button type="submit" data-id="" class="btn btn-primary"><i class="fas fa-user-plus"></i> Simpan <span class="loader"><img src="assets/images/spinner.gif" alt="processing..." /></span></button>							
						</div>										
					</form>
				</div>
			</div>
		</div>
	    <div class="container py-5">
		    <h2 class="section-heading text-center mb-3">Kapan dan di mana kejuaraan ini diadakan?</h2>
		    <div class="section-intro single-col-max mx-auto text-center mb-5"></div>
		    <div style="text-align: center;">
				<img src="/assets/images/gor-pajajaran-bandung.jpeg" style="box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 50%);background: #fff;border-radius: 10px;"/>
			</div>
			<div class="row text-center">
			    <div class="item col-12 col-md-4 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="far fa-calendar-alt"></i></div>
						    <h3 class="item-heading">Hari & Tanggal</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    Sabtu - Minggu, 18 - 19 Februari 2023 
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-4 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-map-signs"></i></div>
						    <h3 class="item-heading">Tempat</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						GOR PADJADJARAN – Jalan Padjadjaran No. 37, Pasir Kaliki, Cicendo, Kota Bandung, 40171, Jawa Barat.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
				<div class="item col-12 col-md-4 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-address-book"></i></div>
						    <h3 class="item-heading">Contact Person</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc" style="text-align: -webkit-center;">
							<table>
								<tr>
									<td>Azzahra</td>
									<td>082216107484</td>									
								</tr>
								<tr>
									<td>Zahra</td>
									<td>082318001871</td>
								</tr>								
							</table>
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
				<div class="item col-12 col-md-12 col-lg-12">
				    <div class="item-inner p-3 p-lg-12">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-map-marked-alt"></i></div>
						    <h3 class="item-heading">Google Map</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
							
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.858084552691!2d107.59877751477273!3d-6.907567895008845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e638a7f08167%3A0x64e8cf1ef376ab76!2sGOR%20Pajajaran!5e0!3m2!1sms!2sid!4v1668172777654!5m2!1sms!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			    
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//benefits-section-->
    
    <section id="content-section" class="content-section">
	    <div class="container">
		    <div class="single-col-max mx-auto">
		    <h2 class="section-heading text-center mb-5">Timeline Kegiatan</h2>
			    <div class="row">
				    <div class="col-12 col-md-12">
					    <div class="figure-holder mb-5">
							<ul class="timeline timeline-split">
								<li class="timeline-item">
									<div class="timeline-info">
										<span>20 November 2022</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">Pendaftaran Tim & Peserta</h3>
										<p style="text-align: justify;">Salah satu pihak tim melakukan pendaftaran timnya dengan meng-click button <strong>Pendaftaran</strong> lalu pilih opsi <strong>Tim</strong> atau meng-click button <strong>Pendaftaran</strong> lalu pilih opsi <strong>Atlet</strong> untuk mendaftarkan atlet-nya. Dan pastikan tim-mu sudah terdaftar yah</p>
									</div>
								</li>								
								<li class="timeline-item period">
									<div class="timeline-info"></div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h2 class="timeline-title">2023</h2>
									</div>
								</li>																
								<li class="timeline-item">
									<div class="timeline-info">
										<span>31 Januari 2023</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">Pendaftaran Peserta Closed</h3>
										<p>Pendaftaran peserta/atlet ditutup </p>
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-info">
										<span>31 Januari 2023</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">Batas Akhir Pembayaran Pendaftaran</h3>
										<p style="text-align: justify;">Batas akhir pihak tim/atlet melakukan pembayaran ke,<br>No. rekening <strong>0075766718001</strong> Bank BJB (a.n. Victory Karya Gemilang CV) <br>Untuk konfirmasi pembayaran dapat hubungi 082216107484 (Azzahra) via WA dengan melampirkan bukti/slip pembayaran</p>
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-info">
										<span>17 Februari 2023</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">Registrasi & Penimbangan Atlet</h3>
										<p style="text-align: justify;">Tim dan para peserta/atlet melakukan registrasi ulang & melakukan penimbangan di Gor Padjadjaran dengan membawa berkas-berkas pernyataan</p>
									</div>
								</li>								
								<li class="timeline-item">
									<div class="timeline-info">
										<span>18 Februari 2023</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">D-DAY 1</h3>
									
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-info">
										<span>19 Februari 2023</span>
									</div>
									<div class="timeline-marker"></div>
									<div class="timeline-content">
										<h3 class="timeline-title">D-DAY 2</h3>
										
									</div>
								</li>								
							</ul>
					    </div><!--//figure-holder-->
				    </div><!--//col-->
				    
			    </div><!--//row-->
		    </div><!--//single-col-max-->
	    </div><!--//container-->
    </section><!--//content-section-->
    
    
    
    <section id="form-section" class="form-section">
	    <div class="container">
		    <div class="lead-form-wrapper single-col-max mx-auto theme-bg-light rounded p-5 mb-4">
			    <h3 class="form-heading text-center">Berkas Persyaratan & Pernyataan</h3>
				<br>
			    <div class="form-intro mb-3"><a href="/file/bentuk_dan_sistem_pertandingan.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Bentuk dan Sistem Pertandingan</a></div>			    							    
				<div class="form-intro mb-3"><a href="/file/kategori_pertandingan.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Kategori dan Kelas Kejuaraan</a></div>			    
				<div class="form-intro mb-3"><a href="/file/biaya_pendaftaran.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Biaya Pendaftaran</a></div>		
				<br>
				<div class="form-intro mb-3"><a href="/file/surat_pernyataan_orang_tua_wali.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Surat Pernyataan Orang Tua/Wali Atlet ICTU/Junior</a></div>			    
				<div class="form-intro mb-3"><a href="/file/surat_pernyataan_atlet_senior_master.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Surat Pernyataan Atlet Senior/Master</a></div>			    
				<div class="form-intro mb-3"><a href="/file/surat_pernyataan_tim.pdf" class="text-decoration-none" target="_blank" download><i class="fas fa-download"></i> Surat Pernyataan Tim</a></div>			   
				<br>
				<div style="text-align:center">
					<button class="btn btn-success berkas">Upload Berkas</button>
				</div>
		    </div><!--//lead-form-wrapper-->
	    </div><!--//container-->
    </section><!--//form-section-->
    
   
    
    <section id="author-section" class="author-section section theme-bg-primary py-5">
	    <div class="container py-3">
		    <div class="author-profile text-center mb-5">
			    <img class="author-pic" src="https://victorytaekwondo.id/assets/img/arie.png" alt="image" >
		    </div><!--//author-profile-->
		    <h3 class="text-center text-white mb-3">Sambutan Kwan Jang Nim Victory Club Bandung</h3>
		    <div class="author-bio single-col-max mx-auto">
			    <p><i>Assalamualaikum Warohmatullahi Wabarokaatu</i></p>				
				<p style="text-align: justify">Salam Olahraga, Salam Tae Kwon Do <br>Puji dan syukur kapada Allah SWT 1<sup>st</sup> Victory National Open Taekwondo Championship 2023 merupakan visi dan misi club kami untuk dapat menciptakan bibit-bibit baru dalam cabang olahraga Taekwondo. Dengan membuat atmosfer sportivitas yang tinggi, persahabatan antar daerah se-Indonesia yang akan menjadikan bersatunya Atlet-atlet berprestasi yang berakhlak tinggi kedepannya dapat mengibarkan bendera Merah Putih dalam kancah dunia. Semoga perhelatan ini dapat menjadikan ajang yang berkesinambungan serta menjadi tolak ukur olahraga beladiri Taekwondo.</p>				
				<p style="text-align: justify">Sebagai Kwan Jang Nim Victory Taekwondo Club Bandung, saya ucapkan selamat bertanding dan junjung tinggi sportivitas.</p>				
				<p ><i>Wassalamualaikum Warohmatullahi Wabarokaatu.</i></p>
			    <div class="author-links text-center pt-4">
			        <h5 class="text-white mb-4">Ikuti Kami di,</h5>
				    <ul class="social-list list-unstyled">
					    <li class="list-inline-item"><a href="https://www.instagram.com/victorytkdbdg/" target="_blank"><i class="fab fa-instagram"></i></a></li>					    
			        </ul><!--//social-list-->
			    </div><!--//author-links-->
			    
		    </div><!--//author-bio-->
		    
	    </div><!--//container-->
    </section><!--//author-section-->
    
    

    <footer class="footer">

	    <div class="footer-bottom text-center py-3">
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <p class="footer-heart">&#169; 2022 Made with <g-emoji class="g-emoji" alias="heart" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"> <img class="emoji" alt="heart" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"></g-emoji> by <a href="https://victorytaekwondo.id/" target="_blank" data-original-title="" title="" style="text-decoration: none;">Tim IT Victory</a> </p>
 
	    </div>
	    
    </footer>
       
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/smoothscroll.min.js"></script> 
    
    <script src="assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function () {
			var id = 1;
			var sel = "tim";
			var kyorugi = 0;
			var individu = 0;
			var pair = 0;
			var group = 0;
			var tim = "";
			var counter = 0;
			
			<?php if (session()->getFlashdata('success')) : ?>
				swal("Successfully!", "Terima kasih telah mendaftar, cek email masuk atau bagian spam pada email-mu untuk mengetahui informasi selanjutnya.", "success");
			<?php endif ?>

			$('.radio-group .radio').click(function () {
				const pilih = $(this).data('id');
				$('.selected .fa').removeClass('fa-check');
				$('.radio').removeClass('selected');
				$(this).addClass('selected');
				
				sel = pilih;
			});	

			$(document).on('click', '.next', function()  {							
				if (sel == "atlet") {										
					$('#staticBackdrop').modal('hide');	
					$('.summary').css('display', 'none');							
					$('#staticBackdropAtlet').modal('show');
					sel = "atlet";
				} else {					
					$('#staticBackdrop').modal('hide');
					$('#staticBackdropTim').modal('show');
					sel = "tim";
				}				
			});	

			$('.berkas').click(function() {
				swal("Belum dibuka");
			});
		
            
            
			$("form#formTim").on('submit', function(e) {
				e.preventDefault();	
				$(".loader").css("display", "inline");
				$.post('/simpan-tim', $("form#formTim").serialize(), function(data) {
					const res = JSON.parse(data);					
					if (res['status'] == '1') {						
						swal("Successfully!", "Terima kasih telah mendaftar, cek email masuk atau bagian spam pada email-mu ("+res['email']+") untuk mengetahui informasi selanjutnya.", "success");
						$('#staticBackdropTim').modal('hide');
						$('#formTim').each(function(){
							this.reset();
							$(".loader").css("display", "none");
						});
					} else {
						swal("Oh noes!!", "Data anda gagal disimpan, coba lagi beberapa saat lagi", "warning");
					}					
				});
				
			});
			
			$("form#formAtlet").on('submit', function(e) {
				e.preventDefault();	
				tim = $('.select-tim').val();
				$(".loader").css("display", "inline");
				$('.total-kategory').empty();
				 if ($('.cat').val() == 'kyorugi') {
					kyorugi = kyorugi + 1;					
				 } else {
					if ($('.person').val() == 'individual') {
						individu = individu + 1;
						
					} else if ($('.person').val() == 'pair') {
						pair = pair + 1;						
					} else {	
						group = group + 1;						
					}
				 }

				 if (kyorugi > 0) {
					$('.total-kategory').append('<tr><td>Kyorugi</td><td>'+kyorugi+'</td></tr>')
				 } 
				 if (individu > 0) {
					$('.total-kategory').append('<tr><td>Poomsae Individu</td><td>'+individu+'</td></tr>')
				 } 
				 if (pair > 0) {
					$('.total-kategory').append('<tr><td>Poomsae Pair</td><td>'+pair+'</td></tr>')
				 } 
				 if (group > 0) {
					$('.total-kategory').append('<tr><td>Poomsae Group</td><td>'+group+'</td></tr>')
				 } 

				 
				 var formData = new FormData(this);				 
                  $.ajax({
                    url: "/save-peserta",
                    type: "POST",
                    data: formData,
                    success: function (msg) {                        
    					$(".loader").css("display", "none");
						$('.atlet').remove();
						$('.first').remove();
						$('.berkas-syarat').remove();
						$('.atl').append('<div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup[]" accept="image/*, .pdf" class="form-control" required></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div>');					
    					swal("Successfully!", "Data atlet berhasil ditambahkan, jangan lupa klik submit jika sudah mendaftarkan semua atlet mu.", "success");
    					$( '#formAtlet' ).each(function(){
							this.reset();
							$('.kelas').empty();	
							$('.berat').attr('disabled', 'disabled');	
							$('.person').attr('disabled', 'disabled');								
							$('.summary').css('display', 'block');
							$('.submit-peserta').css('display', 'block');								
							$('.select-tim').val(tim)
							counter++;
						});	
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                  });
				  
				  
			});
				
			$('.submit-peserta').click(function() {	
				const tim = $('.select-tim').val();	
				swal({
					title: "Submit Data Atlet",
					text: "Apakah semua atlet sudah ter-data?",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.post('/submit-peserta', {tim: tim, kyorugi: kyorugi, individu: individu, pair: pair, group: group}, function(data) {					
							$( '#formAtlet' ).each(function(){
								this.reset();
							});
							$('#staticBackdrop').modal('hide');	
							$('.summary').css('display', 'none');							
							$('#staticBackdropAtlet').modal('hide');
							kyorugi = 0;
							individu = 0;
							pair = 0;
							group = 0;
						});
						swal("Poof! Terima kasih telah mendaftar, cek email masuk atau bagian spam pada email-mu untuk mengetahui informasi selanjutnya.", {
							icon: "success",
						});

						
					} else {
						swal("Atlet tidak jadi didaftarkan!");
					}
				});		
				
			});

			$('.back').click(function() {								
				$('#staticBackdrop').modal('show');
				$('#staticBackdropTim').modal('hide');				
				$('#staticBackdropAtlet').modal('hide');
			});

			$('.select-tim').select2({
				dropdownParent: $('#staticBackdropAtlet')
			});

			$(document).on('change', '.select-tim', function() {
				if (counter != 0) {
					if ($(this).val() != tim) {
						swal({
							title: "Waitt",
							text: "Data atlet sebelumnya belum disubmit, apakah anda yakin?",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
							if (willDelete) {
								kyorugi = 0;
								individu = 0;
								pair = 0;
								group = 0;
								counter = 0;
								tim = "";
								$('.summary').css('display', 'none');
								
								swal("Poof! data atlet sebelumnya tidak jadi disimpan.", {
								icon: "success",
								});

								
							} else {
								
							}
						});		
					}
				}
			});

			$(document).on('change', '.cat', function()  {
				const cat = $(this).val();				
				const catId = $(this).data('id');
				$('.ket_berat').remove();					
				if (cat == "poomsae") {					
															
					$('.berat').replaceWith('<select name="person[]" data-id="1" data-cat="" class="form-control form-control-sm person"></select>');								
					$('.person').empty();
					$('.person').append('<option value="individual" selected>INDIVIDUAL</option>');	
					$('.person').append('<option value="pair">PAIR</option>');	
					$('.person').append('<option value="group">GROUP</option>');	
					// $('.atl').append('<div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir[]" class="form-control" data-id="1" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto[]" accept="image/*" class="form-control foto" required></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup[]" accept="image/*, .pdf" class="form-control" required></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte[]" accept="image/*, .pdf" class="form-control" required></div></div>');					
				} else if (cat == "kyorugi") {												
					$('.person').replaceWith('<input type="text" name="berat_badan[]" class="form-control form-control-sm berat" placeholder="Berat Badan"> <input type="hidden" name="person[]" class="form-control form-control-sm" value="kyorugi"> <small class="ket_berat">Berat badan dalam satuan Kg</small>');										
				} else {
					$('.kelas').empty();	
					$('.berat').attr('disabled', 'disabled');	
					$('.person').attr('disabled', 'disabled');	
					return;
				}				
				$('.berat').prop('disabled', false);
				$('.person').prop('disabled', false);
				$.get('/getClass', {person: "individual", cat: cat}, function(data) {
					const listClass = JSON.parse(data);
					$('.kelas').empty();
					for (var i = 0; i < listClass.length; i++) {
						$('.kelas').append('<option value="'+listClass[i]['id']+'">'+listClass[i]['kategori']+'</option>');
					}
				});						
			});


			$(document).on('change', '.kelas', function(){
				const kelas = $(this).val();
				const person = $('.person').val();
				var listKelas = ['6', '7', '13', '14', '20', '21', '27', '28'];
				if (listKelas.includes(kelas) ) {
					$('.akte').remove();
				} else {
					$('.akte').remove();
					if (person == 'pair') {
						$('.berkas-syarat').append('<div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_pair[]" accept="image/*, .pdf" class="form-control" required></div>');
					} else if (person == 'group') {
						$('.berkas-syarat').append('<div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_group[]" accept="image/*, .pdf" class="form-control" required></div>');
					} else {
						$('.berkas-syarat').append('<div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte[]" accept="image/*, .pdf" class="form-control" required></div>');
					}
				}
			});
			

			$(document).on('change', '.person', function() {
				const person = $(this).val();
				const cat = $(this).data('cat');				
				$('.first').remove();
				$('.berkas-syarat').remove();
				$('.akte').remove();
				$.get('/getClass', {person: person, cat: cat}, function(data) {
					const listClass = JSON.parse(data);
					$('.kelas').empty();
					for (var i = 0; i < listClass.length; i++) {
						$('.kelas').append('<option value="'+listClass[i]['id']+'">'+listClass[i]['kategori']+'</option>');
					}
				});
				$('.atlet').remove();	
				if (person == "pair") {		
												
					$('.atl').append('<div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama_pair[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin_pair[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir_pair[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto_pair[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup_pair[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_pair[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div><div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama_pair[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin_pair[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir_pair[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto_pair[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup_pair[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_pair[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div>');
				} else if (person == "group") {					
					$('.atl').append('<div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama_group[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin_group[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir_group[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto_group[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div><div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama_group[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin_group[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir_group[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto_group[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div><div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama_group[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin_group[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir_group[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto_group[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte_group[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div>');
				} else {
					$('.atl').append('<div class="col-sm-3 mt-2 atlet"><label for="">Nama Lengkap</label><input type="text" name="nama[]" class="form-control" placeholder="Nama Lengkap" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Jenis Kelamin</label><select name="jenis_kelamin[]" class="form-control" required><option value="">-</option><option value="PUTRA">PUTRA</option><option value="PUTRI">PUTRI</option></select></div><div class="col-sm-3 mt-2 atlet"><label for="">Tanggal lahir</label><input type="date" name="tgl_lahir[]" class="form-control" required></div><div class="col-sm-3 mt-2 atlet"><label for="">Pas Foto</label><input type="file" name="foto[]" accept="image/*" class="form-control" required><small>Maksimum file berukuran 1MB</small></div><div class="row berkas-syarat'+'"><hr class="hr-text" data-content="Upload Berkas"><div class="col-sm-6 mt-2 atlet"><label for="">1. Sertifikat Geup/POOM/DAN</label><input type="file" name="geup[]" accept="image/*, .pdf" class="form-control" required></div><div class="col-sm-6 mt-2 akte atlet"><label for="">2. Akte Kelahiran</label><input type="file" name="akte[]" accept="image/*, .pdf" class="form-control" required><small>Maksimum file berukuran 1MB</small></div></div>');					
				}
				
			});

			$('.add-peserta').click(function() {
				id = id + parseInt($(this).data('id'));
				
				$(this).attr('data-id', id);
				$('.next-peserta').append('<div class="col-sm-12 mt-2 section_'+id+'"><hr><div style="margin:0;"><div style="margin:0;float:left"><h6>Atlet '+id+'</h6></div><div style="margin:0;float:right"><a href="#" data-toggle="modal" data-id="'+id+'" class="text-danger close"><i class="fa fa-close"></i></a></div></div></div><div class="col-sm-4 mt-2 section_'+id+'"><input type="hidden" name="id[]" class="id" value="'+id+'"><label for="">Kategori</label><select name="category[]" data-id="1" class="form-control form-control-sm-4 cat cat_'+id+'"><option value="">-</option><option value="kyorugi">KYORUGI</option><option value="poomsae">POOMSAE</option></select></div><div class="col-sm-4 mt-2 section_'+id+'"><label for=""></label><select name="person[]" data-id="1" data-cat="" class="form-control form-control-sm person person'+'"><option value="individual">INDIVIDUAL</option><option value="pair">PAIR</option><option value="group">GROUP</option></select></div><div class="col-sm-4 mt-2 section_'+id+'"><label for="">Kelas</label><select name="kelas[]" data-id="1" class="form-control form-control-sm kelas kelas"></select></div><div class="row atl"></div><div></div>');
				
			});

			$(document).on('click', '.close', function(e) {
				e.preventDefault();
				const section = $(this).data('id');

				$('.section_'+section).remove();
				$('.atl_'+section).remove();
			});
			

			$(document).on('change', 'input[type=file]', function(){ 
			    
			    
			    if(this.files[0].size > 1097152){
                  swal("File terlalu besar!", "Ukuran file tidak boleh melebihi 1mb");
                  this.value = "";
                }
			});
			
			
		});
		
	</script>
	<a href="https://api.whatsapp.com/send?phone=+6282216107484&text=Assalamualaikum." class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>
</body>
</html> 

