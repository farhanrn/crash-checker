                    <li class="dropdown">
                            <!-- Profile Image in the dropdown button -->
                            <button class="dropdown-btn">
                                <a>Akun</a>
                            </button>
                            <div class="dropdown-content">
                                <div class="dropdown-header">
                                    <!-- Dropdown header content -->
                                    <h5><?php echo $_SESSION['username'];?></h5>
                                    <h6><?php echo $_SESSION['email'];?></h6>
                                </div>
                                <!-- Dropdown Divider -->
                                <div class="dropdown-divider"></div>
                                <a href="http://localhost/UAS/login regis page/switch_akun.php">Use Another Account</a>
                                <!-- Dropdown Divider -->
                                <div class="dropdown-divider"></div>
                                <a href="http://localhost/UAS/login regis page/logout.php">Logout</a>
                            </div>
                        </li>
 