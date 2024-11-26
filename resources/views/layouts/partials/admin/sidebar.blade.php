<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/dashboard') ? 'bg-primary' : '' }}"
                        href="/admin/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/user-admin') ? 'bg-primary' : '' }}"
                        href="/admin/user-admin" aria-expanded="false"><i class="fa-solid fa-user me-2"></i><span
                            class="hide-menu">User Admin</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/konsumen') ? 'bg-primary' : '' }}"
                        href="/admin/konsumen" aria-expanded="false"><i class="fa-solid fa-address-card me-2"></i><span
                            class="hide-menu">Konsumen</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/project') ? 'bg-primary' : '' }}"
                        href="/admin/project" aria-expanded="false"><i class="fa-solid fa-folder-open me-2"></i><span
                            class="hide-menu">Project</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/progres-bangunan') ? 'bg-primary' : '' }}"
                        href="/admin/bangunan" aria-expanded="false"><i class="fa-solid fa-bars-progress me-2"></i><span
                            class="hide-menu">Progres
                            Bangunan</span></a></li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
