<div id="bdSidebar"
    class="d-flex flex-column
                    bg-white text-center
                    justify-content-center">
    <h1 class="navbar-brand position-absolute top-0 mt-5 fs-3 fw-bold">Progress</h1>
    <ul class="mynav nav nav-pills flex-column">
        <li class="nav-item mb-3">
            <span class="{{ request()->is('tiket*') ? 'active' : '' }}">
                <i class="fa-solid fa-ticket"></i>
                Pesan Tiket
            </span>
        </li>

        <li class="nav-item mb-3">
            <span class="{{ request()->is('pembayaran*') ? 'active' : '' }}">
                <i class="fa-solid fa-credit-card"></i>
                Pembayaran
                <!-- <span class="notification-badge">5</span> -->
            </span>
        </li>
        <li class="nav-item">
            <span class="{{ request()->is('cetak*') ? 'active' : '' }}">
                <i class="fa-solid fa-print"></i>
                Cetak Tiket
            </span>
        </li>
    </ul>
</div>
