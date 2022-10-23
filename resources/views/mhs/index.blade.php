@include('mhs\dashboard-header')
@include('mhs\sidebar')



<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Profile </h4>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <h5 style="color:rgb(108, 0, 162); font-weight:700;">Data Mahasiswa</h5>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">NIM</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">: {{session()->get('datamahasiswa')->NIM}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Nama</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">: {{session()->get('datamahasiswa')->NAMA_MHS}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Email</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">: {{session()->get('datamahasiswa')->EMAIL_MHS}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">No Telepon</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">: {{session()->get('datamahasiswa')->NO_TLP_MHS}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Alamat</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">: {{session()->get('datamahasiswa')->ALAMAT_MHS}}</h5>
                            </div>
                        </div>
                        <h5 style="color:rgb(108, 0, 162); font-weight:700; margin-top:30px;">Data Dosen</h5>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Dosen Pembimbing</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">:  {{session()->get('dospem')->NAMA_DOSEN}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>



 







@include('templates.dashboard-footer')
