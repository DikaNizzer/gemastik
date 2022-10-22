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
                                        <th>Waktu Sidang</th>
                                        <th>Dosen Penguji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($mahasiswa as $mhs)
                                        
                                    <tr>
                                        <th>1</th>
                                        <th>{{ $mhs->NIM}}</th>
                                        <th>{{ $mhs['NAMA_MHS']}}</th>
                                        @foreach($mhs->jadwalsidangs as $ta)
                                            <th>{{ $ta->WAKTU_SIDANG}}</th>
                                            <th>{{ $ta->DOSEN_PENGUJI}}</th>
                                        @endforeach
                                        
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










@include('templates.dashboard-footer')
