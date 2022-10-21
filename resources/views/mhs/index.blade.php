@include('mhs\dashboard-header')
@include('mhs\sidebar')



<section>
    <div class="container" style="padding:30px;">
       
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <a href="/cetak-pengurus" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>
                    <div class="card-body">
                        {{-- {{var_dump(session()->get('datamahasiswa'))}}; --}}
                        {{session()->get('datamahasiswa')->NIM}}
                        {{session()->get('datamahasiswa')->NAMA_MHS}}
                        {{session()->get('datamahasiswa')->EMAIL_MHS}}
                        {{session()->get('datamahasiswa')->NO_TLP_MHS}}
                        {{session()->get('datamahasiswa')->ALAMAT_MHS}}

                        <br>
                        DOSPEM SAYA ADALAH
                        {{session()->get('dospem')->NAMA_DOSEN}}
                    </div>
                </div>
    </div>
</section>



 









@include('templates.dashboard-footer')
