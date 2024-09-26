<!-- ======= Header ======= -->
<header id="header" class="kkls header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    <!-- <a href="../dashboard.html" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block">Logo Here</span>
    </a> -->
    <a href="" class="ml_25 d-flex align-items-center">
        <img src="assets/images/samples/logo_horizontal.png" alt="Stageplan Logo" class="img_size_40">
      </a>

    <div class="option-bar d-none" id="options_">
      <i id="btnSaveBoard" class="bi bi-save option-bar-icons" title="Save Stage"></i>
      <i id="btndownload" class="bi bi-cloud-download option-bar-icons" title="Download PNG"></i>
      <i id="btnfullscreen" class="bi bi-arrows-fullscreen" title="FullScreen"></i>
    </div>
  </div>
  <!-- End Logo -->

   <div id="search_bar_" class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" id="query" name="query" placeholder="Search your projects..." title="Enter search keyword" />
      <button type="submit" title="Search">
        <i class="bi bi-search"></i>
      </button>
    </form>
  </div> 

  <!-- <div class="option-bar d-none" id="options_">
    <i id="btnSaveBoard" class="bi bi-save"></i>
    <i id="btndownload" class="bi bi-cloud-download"></i>
  </div> -->



  <!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="" class="rounded-circle avatar imagePreviewUpdate" />
          <span class="d-none d-md-block dropdown-toggle ps-2 user_name name_update"></span> </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6 class="user_name name_update"></h6>
            <span class="job job_update"></span>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('user_profile_view') }}">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" onclick="logout()">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
        <!-- End Profile Dropdown Items -->
      </li>
      <!-- End Profile Nav -->
    </ul>
  </nav>
  <!-- End Icons Navigation -->
</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var user = getUser();
    var url = baseURL();
    if (user != null) {
      $('.user_name').text(user.name);
      $('.avatar').attr('src', user.avatar);
      $('.bio').text(user.bio);
      $('.company').text(user.company);
      $('.job').text(user.job);
      $('.country').text(user.country);
      $('.address').text(user.address);
      $('.contact').text(user.contact);
      $('.email').text(user.email);

      $('.user_name').val(user.name);
      $('.bio').val(user.bio);
      $('.company').val(user.company);
      $('.job').val(user.job);
      $('.country').val(user.country);
      $('.address').val(user.address);
      $('.contact').val(user.contact);
      $('.email').val(user.email);
    }
  });

  
   window.addEventListener('DOMContentLoaded', (event) => {
     var completeURL = window.location.href;
     var basicURL = window.location.origin;
     var createProjectURL = basicURL + '/create_project';

     // Check if the current URL matches the createProjectURL
     if (completeURL === createProjectURL) {       
      var optionsDiv = document.getElementById('options_');
      var hide_search_ = document.getElementById('search_bar_');
      
      optionsDiv.classList.remove('d-none');
      hide_search_.style.display = "none";

     } 
   });


</script>
<!-- End Header -->