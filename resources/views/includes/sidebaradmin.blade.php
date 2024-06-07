<div id="bdSidebar"
    class="d-flex flex-column
                    bg-white text-center
                    justify-content-center">
    <h1 class="navbar-brand position-absolute top-0 mt-5 fs-3 fw-bold">ADMIN</h1>
    <ul class="mynav nav nav-pills flex-column">
        <li class="nav-item mb-3">
            <span class="{{ request()->is('home*') ? 'active' : '' }}">
                <a href="{{ url('/home') }}" class="text-decoration-none text-black">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </span>
        </li>

        <li class="nav-item mb-3">
            <span class="{{ request()->is('manage-tiket*') ? 'active' : '' }}">
                <a href="{{ url('/manage-tiket') }}" class="text-decoration-none text-black">
                    <i class="fa-solid fa-ticket"></i>
                    Manage Tiket
                </a>
            </span>
        </li>
        <li class="nav-item">
            <span class="{{ request()->is('laporan-pengunjung*') ? 'active' : '' }}">
                <a href="{{ url('/laporan-pengunjung') }}" class="text-decoration-none text-black">
                    <i class="fa-solid fa-scroll"></i>
                    Laporan Pengunjung
                </a>
            </span>
        </li>
    </ul>
</div>
