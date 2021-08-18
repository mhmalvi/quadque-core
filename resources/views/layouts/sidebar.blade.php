<div class="mdk-drawer__content">
    <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left" data-perfect-scrollbar>
        <!-- Sidebar Content -->
        <a href="javascript:void(0)" class="sidebar-brand ">
            <span class="avatar avatar-xl sidebar-brand-icon h-auto">
                <img class="sidebar-brand-icon rounded-circle" src="{{asset('assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg')}}" alt="Quadque - LMS">
            </span>
            <span>John Doe</span>
        </a>

        @includeWhen(auth()->user()->isAdmin(), 'admin.layouts.sidebar')
    </div>
</div>