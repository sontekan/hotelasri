  <!--APP-SIDEBAR-->
  <div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{asset ('assets')}}/images/brand/logo-white-update.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset ('assets')}}/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset ('assets')}}/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset ('assets')}}/images/brand/logo-green-update.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
            <ul class="side-menu">
                @if ((auth()->user()->role=="admin" || auth()->user()->role=="resepsionis"))
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('dashboard')}}"><i class="side-menu__icon bi bi-house"></i><span class="side-menu__label">Dashboard</span></a>
                </li> 
                <li class="sub-category">
                    <h3>Resepsionis</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href={{ url('pemesanan')}}><i class="side-menu__icon bi bi-calendar2-check"></i><span class="side-menu__label">Reservasi</span></a>
                </li>
                @endif
                @if ((auth()->user()->role=="admin"))
                <li class="sub-category">
                    <h3>Administrator</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('tipekamar')}}"><i class="side-menu__icon bi-door-closed"></i><span class="side-menu__label">Tipe Kamar</span></a>
                   
                </li>
                
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('kamar')}}"><i class="side-menu__icon bi-door-open"></i><span class="side-menu__label">Kamar</span></a>
                    
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('tipekamar/galery')}}"><i class="side-menu__icon bi bi-images"></i><span class="side-menu__label">Galeri Kamar</span></a>
                    
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('user')}}"><i class="side-menu__icon bi bi-people"></i><span class="side-menu__label">Pengguna</span></a>
                </li>
                
                @endif

                @if ((auth()->user()->role=="member" || auth()->user()->role=="admin"))
                <li class="sub-category">
                    <h3>Customer</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('booking/cek-kamar')}}"><i class="side-menu__icon fa fa-calendar"></i><span class="side-menu__label">Pesan Kamar</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('user/'. Crypt::encryptString(auth()->user()->id) .'/riwayat-transaksi')}}"><i class="side-menu__icon fa fa-files-o"></i><span class="side-menu__label">Riwayat Pemesanan</span></a>
                </li>
                @endif
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>