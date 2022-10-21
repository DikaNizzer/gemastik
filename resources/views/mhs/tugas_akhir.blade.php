@include('mhs.dashboard-header')
@include('mhs.sidebar')


<?php
$counter = 1;
?>
<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Tugas Akhir</h4>
        <div><button type="button" data-bs-toggle="modal" data-bs-target="#create-ta" class="btn btn-primary"> Add +</button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width:10px">No</th>
                                        <th>Judul TA</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Laporan Awal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($tugasAkhir as $data)
                                    <tr>
                                        <th>{{ $counter }}</th>
                                        <th>{{ $data -> JUDUL_TA }}</th>
                                        <th>{{ date('d F Y', strtotime($data->TGL_PENGAJUAN)); }}</th>
                                        <th>{{ $data -> laporan_awal }}</th>
                                        <th>
                                            @if ($data -> STATUS_TA === 1)
                                                <span style="color:rgb(0, 216, 0)">Disetujui</span>
                                                @else
                                                <span style="color:rgb(53, 134, 255)">Belum Disetujui</span>                      
                                            @endif
                                        </th>
   
                                    </tr>  
                                   <?php $counter++ ?>
                                    @endforeach                              
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
              <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Upload Tugas Akhir</h5>
              <form action="upload-ta" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 mt-4">
                  <label for="exampleFormControlInput1" class="form-label auth-label">Judul Tugas Akhir </label>
                  <input class="form-control auth-form" type="text" name="JUDUL_TA" aria-label="default input example" required>
                </div>
                <div class="mb-4 mt-4" >
                    <input class="form-control auth-form" type="hidden" name="mahasiswa_NIM" aria-label="default input example" value="152011513024">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Laporan Awal</label><br/>
                    <input class="form-control" type="file" id="file" name="laporan_awal" >
                </div>
                <center><button type="submit" class="register mt-4" style="margin:auto" >UPLOAD</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>



 









@include('templates.dashboard-footer')
