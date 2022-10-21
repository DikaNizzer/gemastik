@include('dosen\dashboard-header')
@include('dosen\sidebar')



<section>
    <div class="container" style="padding:30px;">
        
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <a href="/cetak-pengurus" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>
                    <div class="card-body">
                        {{session()->get('datadosen')->NIP}}
                        {{session()->get('datadosen')->NAMA_DOSEN}}
                        {{session()->get('datadosen')->EMAIL_DOSEN}}
                    </div>
                </div>
    </div>
</section>



 









@include('templates.dashboard-footer')
