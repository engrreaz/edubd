<style>
    .userlogo {
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }
</style>
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Impact<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php">
                        <?php echo HOME; ?>
                    </a></li>

                <li class="dropdown"><a href="#"><span>About</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">At-A-Glance</a></li>
                        <li><a href="#">Our Time Line</a></li>
                    </ul>
                </li>


                <li class="dropdown"><a href="#"><span>
                            <?php echo INSNAV; ?>
                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>


                        <li><a href="permission.php">
                                <?php echo INSTEACHING; ?>
                            </a></li>
                        <li><a href="acknowledgement.php">
                                <?php echo INSACK; ?>
                            </a></li>
                        <li><a href="mpo.php">
                                <?php echo INSMPO; ?>
                            </a></li>
                        <li><a href="affiliation.php">
                                <?php echo INSAFF; ?>
                            </a></li>
                    </ul>
                </li>


                <li class="dropdown"><a href="#"><span>
                            <?php echo MANAGEMENT; ?>
                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="teachers.php">
                                <?php echo TEACHER; ?>
                            </a></li>
                        <li><a href="staffs.php">
                                <?php echo STAFF; ?>
                            </a></li>
                        <li><a href="smc.php">
                                <?php echo SMC; ?>
                            </a></li>
                        <li><a href="#">
                                <?php echo COUNCIL; ?>
                            </a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Academic</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="clssec.php">
                                <?php echo CLSSEC; ?>
                            </a></li>
                        <li><a href="clssecstat.php">
                                <?php echo CLSSECSTAT; ?>
                            </a></li>
                        <li><a href="routine.php">
                                <?php echo ROUTINE; ?>
                            </a></li>

                        <li><a href="syllabus.php">
                                <?php echo SYLLABUS; ?>
                            </a></li>
                        <li><a href="#">Scholarship & Stipend</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                    </ul>
                </li>


                <li><a href="#about">Gallery</a></li>
                <li><a href="blog.htmls">Blog</a></li>
                <li><a href="contacts.php">
                        <?php echo CONTACTS; ?>
                    </a></li>


                <li class="dropdown"><a href="#"><span>
                            <img class="userlogo" src="images/favicon.png" />
                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><b> USER NAME</b></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </li>



                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> -->





            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->