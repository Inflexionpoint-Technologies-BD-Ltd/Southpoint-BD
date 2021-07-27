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
  <hr class="sidebar-divider" />

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
        <a class="collapse-item" href="cards.html">About page information</a>
      </div>
    </div>
  </li>

  {{-- ---------------------------------------- end - About us item  --}}


  {{-- ------------------------------------------------------------------ end - About us page elements --}}


  {{-- ------------------------------------------ trades slider -------------------------------------------- --}}

         <!-- Divider -->
    <hr class="sidebar-divider" />

     <!-- Heading -->
        <div class="sidebar-heading">Trades</div>

        {{-- ----------------------- Home - slider item ----------------------- --}}

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
                <a class="collapse-item" href="cards.html">Add slider</a>
                <a class="collapse-item" href="buttons.html">View all sliders</a>
            </div>
            </div>
        </li>

   {{-- --------------------------------------------------------------------------------- end - trades slider --}}


   {{-- ------------------------------------------- logout option --------------------------------------------- --}}

            <!-- Divider -->
            <hr class="sidebar-divider" />


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
                      <a href={{ route("logging-out") }}><button type="button" class="btn btn-danger">Logout</button></a>
                      </div>
                  </div>
                  </div>
              </div>

              <!-- -------------------------- end - Logout Modal  -->


          {{-- --------------------------------------------------------------------------------- end - logout option --}}



