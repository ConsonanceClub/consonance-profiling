
<header id="header" class="header dark">

  <!--=================================
 mega menu -->

  <div class="menu">
    <!-- menu start -->
    <nav id="menu" class="mega-menu">
      <!-- menu list items container -->
      <section class="menu-list-items">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 header-div">
              <!-- menu logo -->
              <ul class="menu-logo col-md-3">
                <li>
                  <a href="/">
                    <img id="logo_img" src="/images/logo-146x150.png" alt="Consonance-logo"> <span class="logo-txt">Consonance</span> </a>
                </li>
              </ul>
              <!-- menu links -->
							@if(Auth::check())
              <div class="menu-bar col-md-6">
                <ul class="menu-links" style="float: right;">
                  <li>
                    <a href="{{route('activity')}}">Activity</a>
                  </li>
                  <li>
                    <a href="{{route('groupn.index')}}">Groups</a>
                  </li>
									@if(Auth::user()->role_id == 1)
                  <li>
                    <a href="{{url('/members')}}">Members</a>
                  </li>
									@endif
                  <li>
                    <a href="">Hi {{isset(Auth::user()->first_name)?Auth::user()->first_name:'Friend'}}! </a>
                  </li>
                </ul>
              </div>

              
              <div class="spacer col-md-3">
                  <ul class="thumb menu-links mt-30">
                      <li>
                          <a href="javascript:void(0)">
                              <img class="img-responsive thumbnail-pic" src="{{Auth::user()->avatar}}">
                              <i class="dropdown-arrow fa fa-angle-down"></i>
                          </a>
                          <ul class="dark-dropdown drop-down-multilevel">
                              <li>
                                  <a href="{{url('/profile')}}">
                                      <i class="fa fa-user"></i> View Profile</a>
                              </li>
                              <li>
                                  <a href="{{url('/logout')}}">
                                      <i class="fa fa-sign-out"></i> Sign Out </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
							@endif
            </div>
          </div>
        </div>
      </section>
    </nav>
    <!-- menu end -->
  </div>
</header>
              
<!--=================================
        header -->
