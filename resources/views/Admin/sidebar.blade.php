<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo"><img src="Admin/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="Admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
         
          <!-- adding user_profiles for database  -->
          <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('view_userprofile')}}">
              <span class="menu-icon">
              <i class="fas fa-user"></i>
              </span>
              <span class="menu-title">Create New Profile</span>
            </a>
          </li>
          <!-- adding user_profiles for database  -->



                <!-- delete profile -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_deleteprofile')}}">
              <span class="menu-icon">
              <i class="mdi mdi-delete"></i>
              </span>
              <span class="menu-title">Edit/Delete Profile</span>
            </a>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_education')}}">
              <span class="menu-icon">
              <i class="mdi mdi-school"></i>
              </span>
              <span class="menu-title">Education</span>
            </a>
          </li>

            <!-- delete profile -->
            <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_deleteeducation')}}">
              <span class="menu-icon">
              <i class="mdi mdi-delete"></i>
              </span>
              <span class="menu-title">Edit/Delete Education</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_Professional')}}">
              <span class="menu-icon">
              <i class="mdi mdi-briefcase"></i> 
              </span>
              <span class="menu-title">Professional Experiences</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_professional_delete')}}">
              <span class="menu-icon">
              <i class="mdi mdi-delete"></i>
              </span>
              <span class="menu-title">Edit/Delete Professional</span>
            </a>
          </li>
                             
          
        </ul>