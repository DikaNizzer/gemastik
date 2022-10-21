@include('paa\dashboard-header')
@include('paa\sidebar')



<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Akun Dosen</h4>
        <div><button type="button" data-bs-toggle="modal" data-bs-target="#create-ta" class="btn btn-primary"> Buat Akun +</button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <a href="/cetak-pengurus" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
   
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
</section>


{{------------------------------------
	CREATE TA MODAL
	------------------------------------}}
    <div class="modal fade" id="create-ta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content auth-modal">
            <div class="modal-header auth-header justify-content-end mb-0">		
                <button type="button" class=" btn-close end-0" data-bs-dismiss="modal"  style="margin:5px" >
                    <iconify-icon icon="ep:close-bold" style="color: #6d0cba;"></iconify-icon>
                </button>		   
          </div>
            <div class="modal-body" style="padding:40px">
                <center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
              <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Buat AKun Dosen</h5>
              <form action="upload-ta" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 mt-4">
                  <label for="exampleFormControlInput1" class="form-label auth-label">NIP </label>
                  <input class="form-control auth-form" type="text" name="JUDUL_TA" aria-label="default input example" required>
                </div>
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">NAMA </label>
                    <input class="form-control auth-form" type="text" name="JUDUL_TA" aria-label="default input example" required>
                </div>
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">EMAIL </label>
                    <input class="form-control auth-form" type="text" name="JUDUL_TA" aria-label="default input example" required>
                  </div>
                  <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">Lanjutin </label>
                    <input class="form-control auth-form" type="text" name="JUDUL_TA" aria-label="default input example" required>
                  </div>
                <center><button type="submit" class="register mt-4" style="margin:auto" >BUAT</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>
 









@include('templates.dashboard-footer')
