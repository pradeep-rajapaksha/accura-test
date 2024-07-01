
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse vh-100">
    <div class="position-sticky pt-3">
        <ul class="nav nav-pills nav-fill flex-column align-items-start">
            <li class="nav-item c-nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page" href="{{route('dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item c-nav-item">
                <a class="nav-link {{ request()->routeIs('members.*') ? 'active' : '' }}" href="{{route('members.index')}}">
                    Members
                </a>
            </li>
            <li class="nav-item c-nav-item">
                <a class="nav-link {{ request()->routeIs('ds-divisions.*') ? 'active' : '' }}" href="{{route('ds-divisions.index')}}">
                    DS Divisions
                </a>
            </li>
        </ul>
        
        {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Configurations</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
            </a>
        </h6> --}}
        <hr>
        <ul class="nav flex-column mb-2">
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">
                    Profile
                </a>
            </li> --}}
            <li class="nav-item">
                {{ html()->form('POST')->route('auth.logout')
                    ->class('d-inline')
                    ->open() }}

                    <button type="submit" class="nav-link">Logout</button>
                {{ html()->form()->close() }}
            </li>
        </ul>
    </div>
</nav>