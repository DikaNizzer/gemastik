@include('paa\dashboard-header')
@include('paa\sidebar')



<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Bimbingan</h4>
        <div><a href="/form-create-pengurus"><button class="btn btn-primary " type="submit">Add</button></div></a>
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
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Kartu Kendali</th>
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



 









@include('templates.dashboard-footer')
