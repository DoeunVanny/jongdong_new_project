<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo-light" height="20">
                    </span>
                </a>
            </div>
        </div>
        
        <div class="d-flex">
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="object-fit: cover;" class="rounded-circle header-profile-user" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): url('no_image.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href=""><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                  </form>

                   <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                         </a>

                    
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.querySelector('a.logout').addEventListener('click', function(event) {
    event.preventDefault();
    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("{{ route('logout') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
    }).then(response => {
        if (response.ok) {
            window.location.href = '/';
        }
    });
});

</script>