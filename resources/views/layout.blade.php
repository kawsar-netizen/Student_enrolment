
@include('admin/link/header')

<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <!-- <a class="navbar-brand brand-logo" href="{{URL::to('admin_dashboard')}}"><img src="images/salt_logo.svg" alt="Logo"></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
            <i class="fas fa-align-justify"></i>

            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <!-- <a class="dropdown-item" href="{{URL::to('view_profile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                </div>
              </a> -->
              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <div class="sender-img">
                <i class="fas fa-sign-out-alt"></i>
                  <!-- <img src="http://via.placeholder.com/47x47" alt=""> -->
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <!-- <img src="http://via.placeholder.com/47x47" alt=""> -->
              <img src="{{asset('images/khan7.jpg')}}" alt="">
            </div>
            <div class="details">
            <p class="user-name">WebCoderIT</p>
             <a href="{{route('admin_dashboard')}}"><span class="designation">Developer Company</span></a> 
            </div>
          </div>
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#student_submenu" aria-expanded="false" aria-controls="student_submenu">
              <i class="fas fa-user-graduate menu-icon"> </i>
                <span class="menu-title">Students</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="student_submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allstudnet')}}">All Student</a>
                    <a class="nav-link" href="{{URL::to('/addstudnet')}}">Add Student</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/tutionfree')}}">Tution Free</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/result')}}">Result</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="fab fa-discourse menu-icon"></i>
                <span class="menu-title">Courses</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cse')}}">CSE </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/eee')}}">EEE </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/ece')}}">ECE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/bba')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/mba')}}">MBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/llb')}}">LLB</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#teacher_Submenu" aria-expanded="false" aria-controls="teacher_Submenu">
              <i class="fas fa-chalkboard-teacher menu-icon"></i>
                <span class="menu-title">Teachers</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="teacher_Submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allteacher')}}">All Teacher</a>
                    <a class="nav-link" href="{{URL::to('/addteacher')}}">Add Teacher</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
        <div class="row">
            @yield('content')
        </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Client Admin</a> &copy; 2021
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
   @include('admin/link/js')
   @include('admin.link/js_code')
</body>
</html>
