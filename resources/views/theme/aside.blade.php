<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
              <img src="img/Logo.jpg"></span>
            <h2 class="brand-text">UPT Bahasa</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item">
            <a class="d-flex align-items-center" href="dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
            </a>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            <span class="menu-title text-truncate" data-i18n="Invoice">Home</span>
        </a>
          <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="{{ route('background') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Background</span></a>
            </li>
            <li><a class="d-flex align-items-center" href="{{ route('staff') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Staff</span></a>
            </li>
          </ul>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('galery') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
            <span class="menu-title text-truncate" data-i18n="File Manager">Galery</span>
        </a>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href=" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
            <span class="menu-title text-truncate" data-i18n="Pages">Layanan</span>
        </a>
          <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Account Settings">Umum</span></a>
              <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{ route('kelasbahasainggris') }}"><span class="menu-item text-truncate" data-i18n="Account">Kelas Bahasa Inggris</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('ujiantoefl') }}"><span class="menu-item text-truncate" data-i18n="Security">Ujian TOEFL</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('penerjemah') }}"><span class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Penerjemah</span></a>
                </li>
              </ul>
            </li>
            <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Mail Template">Mahasiswa</span></a>
              <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{ route('kelasbahasainggris') }}"><span class="menu-item text-truncate" data-i18n="Welcome">Kelas Bahasa Inggris</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('ujiantoefl') }}"><span class="menu-item text-truncate" data-i18n="Reset Password">Ujian TOEFL</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('penerjemah') }}"><span class="menu-item text-truncate" data-i18n="Verify Email">Penerjemah</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('requestinventory.index') }}"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Request Inventori</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="{{ route('requestruangan') }}"><span class="menu-item text-truncate" data-i18n="Invoice">Request Ruangan</span></a>
                </li>
              </ul>
            </li>
            <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Miscellaneous">Dosen/Staff</span></a>
              <ul class="menu-content">
                  <li><a class="d-flex align-items-center" href="{{ route('kelasbahasainggris') }}"><span class="menu-item text-truncate" data-i18n="Welcome">Kelas Bahasa Inggris</span></a>
                  </li>
                  <li><a class="d-flex align-items-center" href="{{ route('ujiantoefl') }}"><span class="menu-item text-truncate" data-i18n="Reset Password">Ujian TOEFL</span></a>
                  </li>
                  <li><a class="d-flex align-items-center" href="{{ route('penerjemah') }}"><span class="menu-item text-truncate" data-i18n="Verify Email">Penerjemah</span></a>
                  </li>
                  <li><a class="d-flex align-items-center" href="{{ route('requestinventory.index') }}"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Request Inventori</span></a>
                  </li>
                  <li><a class="d-flex align-items-center" href="{{ route('requestruangan') }}"><span class="menu-item text-truncate" data-i18n="Invoice">Request Ruangan</span></a>
                  </li>
              </ul>
            </li>
{{-- <<<<<<< Updated upstream --}}
{{-- ======= --}}           
            <li><a class="d-flex align-items-center" href="{{ route('conversation.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Verify Email">Contact Us</span></a>
            </li>
{{-- >>>>>>> Stashed changes --}}
          </ul>

        <li class=" nav-item"><a class="d-flex align-items-center" href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            <span class="menu-title text-truncate" data-i18n="Raise Support">Role</span>
        </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->