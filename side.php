<?php
session_start();
?>

<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/clinicimg.png" class="header-logo" /> <span
                class="logo-name">clinic</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Home</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Paitient</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo $_SESSION['role'] == 'doctor' ? "paitients_list.php" : 'profile.php' ?>">
                    <?php echo $_SESSION['role'] == 'doctor' ? "paitient list" : 'paitient form' ?>
                  </a></li>
                
                <?php echo $_SESSION['role'] == 'doctor' ? '' : "<li><a class='nav-link' href='paitient info.php'>paitient info</a></li>" ?>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>About</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div> 