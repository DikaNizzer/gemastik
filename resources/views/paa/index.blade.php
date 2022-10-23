@include('paa\dashboard-header')
@include('paa\sidebar')


<section>
    <div class="container" style="padding:30px;">
        <h4 style="color:#ffff">Profile </h4>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <h5 style="color:rgb(108, 0, 162); font-weight:700;">Data PAA</h5>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">ID PAA</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">:    {{session()->get('datapaa')->ID_PAA}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Nama</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">:     {{session()->get('datapaa')->NAMA_PAA}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 style="font-size:16px; font-weight:700">Email</h5>
                            </div>
                            <div class="col-9">
                                <h5 style="font-size:16px; font-weight:500">:           {{session()->get('datapaa')->EMAIL_PAA}}</h5>
                            </div>
                        </div>
                       
                    </div>
                </div>
    </div>
</section>









@include('templates.dashboard-footer')
