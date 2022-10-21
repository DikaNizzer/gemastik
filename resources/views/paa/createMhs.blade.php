@include('paa\dashboard-header')
@include('paa\sidebar')



<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Akun Mahasiswa</h4>
        <div><button type="button" data-bs-toggle="modal" data-bs-target="#create-ta" class="btn btn-primary"> Buat Akun +</button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <a href="/cetak-pengurus" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          @if(session()->has('success'))
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">    
                              <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                              </symbol>
                              </svg>
                              
                          <div class="alert d-flex align-items-center" role="alert" style="background-color: rgba(27, 219, 224, 0.2)">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                              <div>
                                  {{ session('success') }}
                              </div>
                          </div>
                          @endif
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Dosen Pembimbing</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telefon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mahasiswa->NIM }}</td>
                                        <td>{{ $mahasiswa->dosen->NAMA_DOSEN }}</td>
                                        <td>{{ $mahasiswa->NAMA_MHS }}</td>
                                        <td>{{ $mahasiswa->EMAIL_MHS }}</td>
                                        <td>{{ $mahasiswa->NO_TLP_MHS }}</td>
                                    </tr>   
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
              <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Buat AKun Mahasiswa</h5>
            <form action="/store-akun-mhs" method="post" >
                @csrf
                <div class="mb-4 mt-4">
                  <label for="nim" class="form-label auth-label">NIM </label>
                  <input class="form-control auth-form" id="nim" type="text" name="NIM" aria-label="default input example" >
                </div>
                <div class="mb-4 mt-4">
                    <label for="dosen_nip" class="form-label auth-label">NIP DOSEN PEMIMBING </label>
                    <select name="dosen_NIP" id="" class="form-control">
                        @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->NIP }}">{{ $dosen->NAMA_DOSEN }}</option>
                        @endforeach
                    </select>
                    {{-- <input class="form-control" list="datalistOptions" id="dosen_nip" placeholder="Type to search..." name="dosen_NIP" >
                    <datalist id="datalistOptions">
                    @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->NIP }}">{{ $dosen->NAMA_DOSEN }}</option>
                    @endforeach
                    </datalist> --}}
                </div>
                <div class="mb-4 mt-4">
                    <label for="nama_mhs" class="form-label auth-label">NAMA</label>
                    <input class="form-control auth-form" id="nama_mhs" type="text" name="NAMA_MHS" aria-label="default input example">
                </div>
                <div class="mb-4 mt-4">
                    <label for="email_mhs" class="form-label auth-label">EMAIL </label>
                    <input class="form-control auth-form" id="email_mhs" type="text" name="EMAIL_MHS" aria-label="default input example" >
                </div>
                <div class="mb-4 mt-4">
                    <label for="telp_mhs" class="form-label auth-label">NO. TELEFON </label>
                    <input class="form-control auth-form" id="telp_mhs" type="number" name="NO_TLP_MHS" aria-label="default input example" >
                </div>
                <div class="mb-4 mt-4">
                    <label for="alamat_mhs" class="form-label auth-label">Alamat </label>
                    <input class="form-control auth-form" id="alamat_mhs" type="text" name="ALAMAT_MHS" aria-label="default input example" >
                </div>
                <div class="mb-4 mt-4">
                    <label for="pass_mhs" class="form-label auth-label"> PASSWORD</label>
                    <input class="form-control auth-form" id="pass_mhs" type="password" name="PASSWORD_MHS" aria-label="default input example" >
                </div>
                @if ($errors->any())
                <div class="alert" style="background-color:rgba(255, 77, 107, 0.2)">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <center><button type="submit" class="btn btn-primary px-3" style="margin:left" >Tambah Data</button></center>
            </form>
            </div>
          </div>
        </div>
      </div>
 









@include('templates.dashboard-footer')
