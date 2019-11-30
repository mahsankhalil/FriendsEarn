<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Friends Earn</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../images.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
		  <a href="#" class="d-block"><?php echo $_SESSION['name']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        <li class="nav-item">
          <a href="videos.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Videos
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-header">User Account</li>
        <li class="nav-item">
          <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="profile_view.php" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              View Profile
            </p>
          </a>
        </li>
		  <li class="nav-item">
			  <a href="profile_update.php" class="nav-link">
				  <i class="nav-icon far fa-image"></i>
				  <p>
					  Update Profile
				  </p>
			  </a>
		  </li>
		  <li class="nav-item">
			  <a href="profile_password.php" class="nav-link">
				  <i class="nav-icon far fa-image"></i>
				  <p>
					  Change Password
				  </p>
			  </a>
		  </li>

        <li class="nav-header">Earning Stats</li>
        <li class="nav-item">
          <a href="client_earning.php" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Stats</p>
          </a>
        </li>
		  <li class="nav-header">About Owner</li>
		  <li class="nav-item">
			  <a href="about_owner.php" class="nav-link">
				  <i class="nav-icon fas fa-file"></i>
				  <p>About</p>
			  </a>
		  </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- End Main Sidebar Container -->
