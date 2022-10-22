@include('mhs.dashboard-header')
@include('mhs.sidebar')

<?php
$counter = 1;
?>

<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Pengajuan Sidang </h4>
        <div><button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#create-bimbingan">Add +</button></div>
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
                                        <th>No </th>
                                        <th>Lembar Pengesahan</th>
                                        <th>Laporan FInal Ta</th>
                                        <th>Tanggal Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(blank($laporanAkhir))
                                        <tr><b>Belum ada sidang yang dijadwalkan</b></tr>
                                    @else
                                    {{-- @foreach ($datasidang as $data) --}}
                                        
                                    <tr>
                                        <th>1</th>
                                        <th><a href="uploads/LEMBAR_PENGESAHAN/{{ $lembarPengesahan}}"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button></a></th>
                                        <th><a href="uploads/LAPORAN_FINALTA/{{ $laporanAkhir}}"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button></a></th>
                                        <th> {{ date('d F Y', strtotime($tanggal)); }}</th>
                                    </tr>  
                                   {{-- <?php $counter++ ?> --}}
                                    @endif                                             
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
    <div class="modal fade" id="create-bimbingan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content auth-modal">
            <div class="modal-header auth-header justify-content-end mb-0">		
                <button type="button" class=" btn-close end-0" data-bs-dismiss="modal"  style="margin:5px" >
                    <iconify-icon icon="ep:close-bold" style="color: #6d0cba;"></iconify-icon>
                </button>		   
          </div>
            <div class="modal-body" style="padding:40px">
                <center><img src="assets/images/navbar logo.png" height="auto" width="50%" style="margin-bottom:20px" alt=""></center>
              <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Lengkapi Berkas Tugas Akhir</h5>
              <form action="update-ta" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="file" class="form-label">Upload Lembar Pengesahan</label><br/>
                    <input class="form-control" type="file" id="file" name="LEMBAR_PENGESAHAN" >
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Upload Laporan Final TA</label><br/>
                    <input class="form-control" type="file" id="file" name="LAPORAN_FINAL_TA" >
                </div>
                <center><button type="submit" class="register mt-4" style="margin:auto" >UPLOAD</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>



 

 









@include('templates.dashboard-footer')
