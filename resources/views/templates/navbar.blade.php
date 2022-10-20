<!-- Navbar -->
<nav class="navbar navbar-expand-md  fixed-top transition-color pt-4 pb-4" >
	<div class="container">
		<a class="navbar-brand" href="">
			<img src="assets/images/navbar logo.png" alt="" width="auto" height="40">
		</a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
			<ul class="navbar-nav mb-3 mb-md-0  mt-2 mt-lg-0 pe-lg-4 gap-3">
				<li class="nav-item">
					<a class="nav-link active link-primary text-center" href="" aria-current="page"><b>Home</b> <span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark link-primary text-center" href=""><b>About</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark link-primary text-center" href=""><b>Event</b></a>
				</li>
			</ul>
			<?php if (isset($_SESSION['user_data'])) : ?>
				<div class="dropdown d-none d-md-block">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<iconify-icon inline icon="bi:person" width="20" height="20"></iconify-icon>
					</a>
					<ul class="dropdown-menu dropdown-menu-end my-2">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><a class="dropdown-item" href="">Logout</a></li>
					</ul>
				</div>
			<?php else : ?>
				<div class="d-grid gap-3 d-md-block">
					{{-- <button class="btn-custom-daftar" style="margin:auto" data-bs-toggle="modal" data-bs-target="#registerModal"> REGISTER</button> --}}
					<button class="btn-custom-login" style="margin:auto" data-bs-toggle="modal" data-bs-target="#loginOption"> LOGIN</button>
				</div>
			<?php endif; ?>
		</div>
	</div>
</nav>


  {{---------------------------
	 LOGIN OPTION 
   ----------------------------}}
  <div class="modal fade" id="loginOption" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header justify-content-end mb-0">		
			<button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>		   
	  </div>
		<div class="modal-body" style="padding:40px">
			<center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Log into your account</h5>
		 <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#loginPAA"> Login sebagai PAA</div>
		 <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#loginMahasiswa"> Login sebagai mahasiswa</div>
		 <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#loginDosen"> Login sebagai dosen</div>
		</div>
	  </div>
	</div>
  </div>




  {{------------------------------------
	LOGIN PAA
	------------------------------------}}
<div class="modal fade" id="loginPAA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header justify-content-end mb-0">		
			<button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>		   
	  </div>
		<div class="modal-body" style="padding:40px">
			<center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Log into your account</h5>
		  <form action="">
			<div class="mb-4 mt-4">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Email </label>
			  <input class="form-control auth-form" type="email" aria-label="default input example" required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Password </label>
			  <input class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>
			<center><button type="submit" class="register" style="margin:auto" >LOGIN </button></center>
		  </form>
		</div>
	  </div>
	</div>
  </div>



    {{------------------------------------
	LOGIN MAHASISWA
	------------------------------------}}
<div class="modal fade" id="loginMahasiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header justify-content-end mb-0">		
			<button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>		   
	  </div>
		<div class="modal-body" style="padding:40px">
			<center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Log into your account</h5>
		  <form action="">
			<div class="mb-4 mt-4">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Email </label>
			  <input class="form-control auth-form" type="email" aria-label="default input example" required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Password </label>
			  <input class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>
			<center><button type="submit" class="register" style="margin:auto" >LOGIN </button></center>
		  </form>
		</div>
	  </div>
	</div>
  </div>



    {{------------------------------------
	LOGIN DOSEN
	------------------------------------}}
<div class="modal fade" id="loginDosen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header justify-content-end mb-0">		
			<button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>		   
	  </div>
		<div class="modal-body" style="padding:40px">
			<center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Log into your account</h5>
		  <form action="">
			<div class="mb-4 mt-4">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Email </label>
			  <input class="form-control auth-form" type="email" aria-label="default input example" required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="exampleFormControlInput1" class="form-label auth-label">Password </label>
			  <input class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>
			<center><button type="submit" class="register" style="margin:auto" >LOGIN </button></center>
		  </form>
		</div>
	  </div>
	</div>
  </div>