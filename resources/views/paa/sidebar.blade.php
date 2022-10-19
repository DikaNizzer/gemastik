<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.blade.php " target="_blank">
        <img src="assets/images/navbar logo.png" class="navbar-brand-img h-80" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " style="height:auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="nav-link " data-bs-toggle="dropdown" >
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <iconify-icon icon="bi:people-fill" style="color: #6d0cba;"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Buat AKun</span>
        </div>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Akun Dosen</a></li>
            <li><a class="dropdown-item" href="">Akun Mahasiswa</a></li>
          </ul>

        </li>
        <li class="nav-item">
          <div class="nav-link " data-bs-toggle="dropdown" >
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <iconify-icon icon="bi:people-fill" style="color: #6d0cba;"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Data Dosen</span>
        </div>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Dosen Pembimbing</a></li>
            <li><a class="dropdown-item" href="">Dosen Penguji</a></li>
          </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link " href="">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <iconify-icon icon="bi:people-fill" style="color: #6d0cba;"></iconify-icon>
              </div>
              <span class="nav-link-text ms-1">Mahasiswa</span>
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link " href="">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                  <iconify-icon icon="fa6-solid:book-open" style="color: #6d0cba;"></iconify-icon>
              </div>
              <span class="nav-link-text ms-1">TA Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <iconify-icon icon="fluent:document-28-filled" width="18" style="color: #6d0cba;"></iconify-icon>
              </div>
              <span class="nav-link-text ms-1">Pengajuan Sidang</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <iconify-icon icon="bi:calendar-event-fill" style="color: #6d0cba;"></iconify-icon>
              </div>
              <span class="nav-link-text ms-1">Jadwal Sidang</span>
            </a>
          </li>     
      </ul>
    </div>
  </aside>


  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
          {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div> --}}
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>