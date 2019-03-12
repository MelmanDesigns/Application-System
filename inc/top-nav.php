<link rel="stylesheet" href="/assets/css/materialize.css">
<link rel="icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/images/saflogo.ico" type="image/x-icon"/>

<script src="/assets/js/materialize.js"></script>
<header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div class="logo">
                    <a href="<?php echo $url['index']; ?>" class="logo">
                    <?php echo '<img src="assets/images/saflogo.png" alt="imgbroke" width="85" height="60">'; ?>
                    <span class="logo-small"> SAFRP Apps</span>
                    <span class="logo-large"> San Andreas' Finest's Application Website </span>
                    </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <?php
                                if (empty($user['avatar'])) {
                                    echo '<img src="assets/images/users/placeholder.png" alt="user" class="rounded-circle">';
                                } else {
                                    echo '<img src="'. $user['avatar'] .'" alt="user" class="rounded-circle">';
                                }

                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item notify-item" href="<?php echo $url['register']; ?>">
                                <i class="ti-plus m-r-5"></i> Register - Login</a>
                                <!-- item-->
                                <a href="<?php echo $url['settings']; ?>" class="dropdown-item notify-item">
                                <i class="ti-settings m-r-5"></i> Settings</a>
                                <!-- item-->
                                <a href="<?php echo $url['logout']; ?>" class="dropdown-item notify-item">
                                <i class="ti-power-off m-r-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="<?php echo $url['index']; ?>"><i class="mdi mdi-home"></i> <span> Home </span> </a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo $url['apply']; ?>"><i class="mdi mdi-format-list-bulleted"></i> <span> Apply </span> </a>
                        </li>
                          <li class="has-submenu">
                            <a href="#"><i class="mdi mdi-contacts"></i><span> Departments </span></a>
                                <ul class="submenu megamenu">
                                    <li class="has-submenu">
                                        <a href="<?php echo $url['civilian']; ?>?m=nosession">Civilian</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="<?php echo $url['state']; ?>?m=nosession">State Patrol</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="<?php echo $url['sheriff']; ?>?m=nosession">Sheriff's Office</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="<?php echo $url['pd']; ?>?m=nosession">Police Department</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="<?php echo $url['fire']; ?>?m=nosession">Fire / EMS</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="dispatch.php?v=nosession">Dispatch</a>
                                    </li>
                                </ul>
                          </li>
					 <li class="has-submenu">
							<a href="#"><i class="mdi mdi-file-lock"></i><span> Staff </span></a>
								<ul class="submenu megamenu">
									<li>
										<ul>
											<a href="<?php echo $url['staff']; ?>?m=settings">Settings</a>
										</ul>
									</li>
									<li>
										<ul>
											<a href="<?php echo $url['staff']; ?>?m=users">Users</a>
										</ul>
									</li>
									<li>
										<ul>
											<a href="<?php echo $url['staff']; ?>?m=accepted-users">Pending Applications</a>
										</ul>
									</li>
                                    <li>
                                        <ul>
                                            <a href="<?php echo $url['staff']; ?>?m=pending-users">Accepted Applications</a>
                                        </ul>
                                    </li>
									<li>
										<ul>
											<a href="<?php echo $url['staff']; ?>?m=usergroups">Usergroups</a>
										</ul>
									</li>
								</ul>
					 </li>
                    </ul>
                    <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
</header>
