   <!-- Sidebar Start -->
   <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
         
          <li class="sidebar-item">
            <a class="sidebar-link" href="/barang" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Barang</span>
              </a>
          </li>
          @can('pelanggan')
              
          <li class="sidebar-item">
            <a class="sidebar-link" href="/pengeluaran" aria-expanded="false">
              <span>
                {{-- <i class="ti ti-clipboard"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-export" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M15 18h7" /><path d="M19 15l3 3l-3 3" /></svg>
              </span>
              <span class="hide-menu">Pengeluaran</span>
            </a>
          </li>

          @endcan
          @can('supplier')
          <li class="sidebar-item">
            <a class="sidebar-link" href="/penerimaan" aria-expanded="false">
              <span>
                {{-- <i class="ti ti-box-arrow-left"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package-import" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M22 18h-7" /><path d="M18 15l-3 3l3 3" /></svg>
              </span>
              <span class="hide-menu">Penerimaan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/cetak" aria-expanded="false">
              <span>
                {{-- <i class="ti ti-box-arrow-left"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>              </span>
              <span class="hide-menu">Cetak</span>
            </a>
          </li>
          @endcan
          <li class="sidebar-item">
            <a class="sidebar-link" href="/permintaan" aria-expanded="false">
              <span>
                <i class="ti ti-clipboard"></i>
              </span>
              <span class="hide-menu">Permintaan</span>
            </a>
          </li>
          
        </ul>
        
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>