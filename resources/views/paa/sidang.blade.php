@include('paa.dashboard-header')
@include('paa.sidebar')

<?php
$counter = 1;
?>

<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Pengajuan Sidang </h4>
        {{-- <div></div> --}}
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
                                        <th>NIM </th>
                                        <th>Nama </th>
                                        <th>Lembar Pengesahan</th>
                                        <th>Laporan Final Ta</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($mahasiswa as $mhs)
                                        
                                    <tr>
                                        <th>1</th>
                                        <th>{{ $mhs->NIM}}</th>
                                        <th>{{ $mhs['NAMA_MHS']}}</th>
                                        @foreach($mhs->tugas_akhirs as $ta)
                                            <th><a href="uploads/LEMBAR_PENGESAHAN/{{ $ta->LEMBAR_PENGESAHAN }}"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button></a></th>
                                            <th><a href="uploads/LAPORAN_FINALTA/{{ $ta->LAPORAN_FINAL_TA}}"><button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button></a></th>
                                            <th> {{ date('d F Y', strtotime($ta->pengajuan_sidang)); }}</th>
                        
                                        @endforeach
                                        <th><button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#create-bimbingan" onclick="idbar('{{$mhs->NAMA_MHS}}', '{{$mhs->NIM}}')" onclick="nim('{{$mhs->NIM}}')"  data-idbar="{{$mhs->NIM}}" data-namabar="{{$mhs->NIM}}">
                                            Jadwalkan Sidang +</button></th>
                                    </tr>  
                                   <?php $counter++ ?>
                                   @endforeach
                                    {{-- @endif                                              --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
</section>
<script>
    $(document).on("click", "#modbarang", function(){
      let idd = $(this).data('idbar');
      let namaa = $(this).data('namabar');
  
      $('.modal-body #id').val(idd);
      $('.modal-body #nama').val(namaa);
    })
  
    function idbar(id, nim){
      document.querySelector("#hasilid").value = id;
      document.querySelector("#nim").value = nim;
    }
    // function nim(nim){
    //   document.querySelector("#nim").value = nim;
    // }
  </script>

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
              <form action="create-jadwal" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">Nama Mahasiswa </label>
                    <input class="form-control auth-form" type="text" id="hasilid" aria-label="default input example" readonly>
                </div>
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">NIM Mahasiswa </label>
                    <input class="form-control auth-form" name="mahasiswa_NIM" type="text" id="nim" aria-label="default input example" readonly>
                </div>
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">Waktu Sidang </label>
                    <input class="form-control auth-form" type="datetime-local" name="WAKTU_SIDANG" aria-label="default input example" required>
                </div>
                <div class="mb-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label auth-label">Dosen Penguji </label>
                    <select name="DOSEN_PENGUJI" id="" class="form-control">
                        <option selected>Pilih Dosen Penguji</option>
                        @foreach ($dosen as $data)
                        <option value="{{ $data->NAMA_DOSEN }}">{{ $data->NAMA_DOSEN }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 mt-4" >
                    <input class="form-control auth-form" type="hidden" name="STATUS_SIDANG" aria-label="default input example" value="0">
                </div>
                <center><button type="submit" class="register mt-4" style="margin:auto" >Buat</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>



 

 









@include('templates.dashboard-footer')
