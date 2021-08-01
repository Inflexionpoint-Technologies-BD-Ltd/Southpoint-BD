{{-- -------------------------------- Home Page elements ------------------------------------- --}}

<!-- Heading -->
<div class="sidebar-heading">Home</div>

{{-- ----------------------- Home - slider item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseSlider"
        aria-expanded="true"
        aria-controls="collapseSlider"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider</span>
    </a>
    <div
        id="collapseSlider"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="cards.html">Add slider information</a>
            <a class="collapse-item" href="buttons.html">View all sliders</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Home - slider item  --}}


{{-- ------------------------------------------------------------------ end - Home Page elements --}}


{{-- ---------------------------------- About us page elements --------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">About</div>

{{-- ----------------------- About us item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseAbout"
        aria-expanded="true"
        aria-controls="collapseAbout"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>About</span>
    </a>
    <div
        id="collapseAbout"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('about.create')}}">Add about page info</a>
            <a class="collapse-item" href="{{route('about.index')}}">View all info</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------ end - About us item  --}}

{{-- -----------------------  Directors message item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseMessage"
        aria-expanded="true"
        aria-controls="collapseMessage"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Director's Message</span>
    </a>
    <div
        id="collapseMessage"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('message.create')}}">Add directors message</a>
            <a class="collapse-item" href="{{route('message.index')}}">View all </a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - Directors message item  --}}

{{-- -----------------------  company profile item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseProfile"
        aria-expanded="true"
        aria-controls="collapseProfile"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Company Profile</span>
    </a>
    <div
        id="collapseProfile"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('profile.create')}}">Add company profile</a>
            <a class="collapse-item" href="{{route('profile.index')}}">View all profiles</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - company profile item  --}}

{{-- -----------------------  company profile item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseClient"
        aria-expanded="true"
        aria-controls="collapseClient"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Clients List</span>
    </a>
    <div
        id="collapseClient"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('client.create')}}">Add clients info</a>
            <a class="collapse-item" href="{{route('client.index')}}">View all info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - company profile item  --}}



{{-- ------------------------------------------------------------------------ end - About us page elements --}}


{{-- ------------------------------------------ Trade page -------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Trades</div>

{{-- ----------------------- trades slider item -------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseTradeSlider"
        aria-expanded="true"
        aria-controls="collapseTradeSlider"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider</span>
    </a>
    <div
        id="collapseTradeSlider"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('trades.create') }}">Add trade slider</a>
            <a class="collapse-item" href="{{ route('trades.index') }}">View all trade sliders</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------------------- end - trades slider item --}}

{{-- ---------------------------- Training activities ------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseTrainingActivities"
        aria-expanded="true"
        aria-controls="collapseTrainingActivities"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Training Activities</span>
    </a>
    <div
        id="collapseTrainingActivities"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('trainings.create') }}">Add training activities</a>
            <a class="collapse-item" href="{{ route('trainings.index') }}">View all training activities</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------------------ end - training activities --}}


{{-- --------------------------------------------------------------------------------------- end - trade page  --}}


{{-- ----------------------------------- Infrastructure elements -------------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Infrastructure</div>

{{-- ----------------------- Infrastructure - title item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseInfrastructure"
        aria-expanded="true"
        aria-controls="collapseInfrastructure"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Infrastructure</span>
    </a>
    <div
        id="collapseInfrastructure"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('infrastructure.create') }}">Add Infrastructure</a>
            <a class="collapse-item" href="{{ route('infrastructure.index') }}">View all info</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Infrastructure - title item  --}}

{{-- ----------------------- Infrastructure - image slider item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseInfrastructureSlide"
        aria-expanded="true"
        aria-controls="collapseInfrastructureSlide"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Image slider</span>
    </a>
    <div
        id="collapseInfrastructureSlide"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('infrastructure-images.create') }}">Add info</a>
            <a class="collapse-item" href="{{ route('infrastructure-images.index') }}">View all info</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Infrastructure - image slider item  --}}

{{-- ----------------------------------- end - Infrastructure Page elements ------------------------------------------ --}}


{{-- ------------------------------------------- logout option --------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>


<li class="nav-item">
    <a class="nav-link" data-toggle="modal" data-target="#logoutModal" style="cursor: pointer">
        <i class="fas fa-fw fa-cog"></i>
        <span>Logout</span></a
    >
</li>


<!-- ----------------- Logout Modal --------------- -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModal">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href={{ route("logging-out") }}>
                    <button type="button" class="btn btn-danger">Logout</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- -------------------------- end - Logout Modal  -->


{{-- --------------------------------------------------------------------------------- end - logout option --}}



