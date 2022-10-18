
@include('templates.header')
@include('templates.navbar')



<section class="home" id="home">
    <div class="home-header" style="margin-top:">
      <div class="row" >
        <div class="col-lg-5" style="margin-top:20px">
            <h1>Temukan dan dapatkan pekerjaan impianmu</h1>
            <h5>Coba sekarang!</h5>
            <button class=" get-started mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#registerModal"> GET STARTED</button>
        </div>
        <div class="col-lg-6 " style="margin-left:3%">
          <img src="assets/images/home-img.svg"class="img-fluid home-img" style="margin:auto">
        </div>
      </div>
    </div>
</section>

<section id="artikel" class="artikel">
	<div class="container" data-aos="fade_up">
		<div class="row mb-4 ">
			<div class="col-lg-8">
				<div class="artikel-terbaru">
					<b>LOWONGAN TERBARU</b>
				</div>
			</div>
			<div class="col-lg-4 justify-content-end align-self-center">
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="" style="color:#BF0C0C; font-size:18px; font-weight: 500; text-decoration:none"><b>Lihat Lainnya</b></a>
				</div>
			</div>
		</div>

		<div class="card-body">
			<div class="row">
				<div class="mb-3 col-lg-3">
					<div class="border rounded h-100 d-flex flex-column justify-content-between pb-3" style="background-color:#ffff">
						<div class="overflow-hidden card-custom">
							<div class="position-relative overflow-hidden rounded-top over-shadow" style="margin:15px">
								<img class="artikel artikel-img" src="assets/images/job.png" alt="">
							</div>
							<div class="p-3 pb-0 over-headline">
								<h4><span class="artikel badge">Kategori</span></h4>
								<h6 class="artikel headline mb-1">
									JUDUL PEKERJAAN JUDUL PEKERJAAN JUDUL PEKERJAAN
								</h6>
								<p style="font-size:12px; font-weight:400">08 September 2022</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-3 col-lg-3">
					<div class="border rounded h-100 d-flex flex-column justify-content-between pb-3" style="background-color:#ffff">
						<div class="overflow-hidden card-custom">
							<div class="position-relative rounded-top overflow-hidden over-shadow" style="margin:15px">
								<img class="artikel artikel-img" src="assets/images/job.png" alt="">
							</div>
							<div class="p-3 pb-0">
								<h4><span class="artikel badge">Kategori</span></h4>
								<h6 class="artikel headline mb-1">
                  JUDUL PEKERJAAN JUDUL PEKERJAAN JUDUL PEKERJAAN
								</h6>
								<p style="font-size:12px; font-weight:400">08 September 2022</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-3 col-lg-3">
					<div class="border rounded h-100 d-flex flex-column justify-content-between pb-3" style="background-color:#ffff">
						<div class="overflow-hidden card-custom">
							<div class="position-relative rounded-top overflow-hidden over-shadow" style="margin:15px">
								<img class="artikel artikel-img" src="assets/images/job.png" alt="">
							</div>
							<div class="p-3 pb-0">
								<h4><span class="artikel badge">Kategori</span></h4>
								<h6 class="artikel headline mb-1">
											JUDUL PEKERJAAN JUDUL PEKERJAAN JUDUL PEKERJAAN
								</h6>
								<p style="font-size:12px; font-weight:400">08 September 2022</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-3 col-lg-3">
					<div class="border rounded h-100 d-flex flex-column justify-content-between pb-3" style="background-color:#ffff">
						<div class="overflow-hidden card-custom">
							<div class="position-relative rounded-top overflow-hidden over-shadow" style="margin:15px">
								<img class="artikel artikel-img" src="assets/images/job.png" alt="">
							</div>
							<div class="p-3 pb-0">
								<h4><span class="artikel badge">Kategori</span></h4>
								<h6 class="artikel headline mb-1">
											JUDUL PEKERJAAN JUDUL PEKERJAAN JUDUL PEKERJAAN
								</h6>
								<p style="font-size:12px; font-weight:400">08 September 2022</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('templates.footer')
















