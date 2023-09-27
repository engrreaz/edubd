<style>
    .userlogo {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background-image: url('images/favicon.png');
        background-color: white;
        ;
    }
</style>
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="../resources/logo.png" alt="">
            <img src="../resources/impact<?php echo $lang; ?>.png" alt="" style="width:300px;">
            <!-- <h1>Impact<span>.</span></h1> -->
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php">
                        <?php echo HOME; ?>
                    </a></li>

                <li class="dropdown"><a href="#"><span>
                            <?php echo ABOUT; ?>
                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="about-us.php">
                                <?php echo ABOUT_US; ?>
                            </a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">At-A-Glance</a></li>
                        <li><a href="#">Our Time Line</a></li>
                    </ul>
                </li>





                <li><a href="contacts.php">
                        <?php echo CONTACTS; ?>
                    </a></li>


                <li class="dropdown" style="">
                    <a href="#">
                        <span>
                            <img class="userlogo" src="<?php echo $usrpic; ?>" alt="" />
                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul style="position:absolute; right:0; left:-150px; ">
                        <li style="text-align:center;"><b>
                                <?php echo $usr; ?>
                            </b></li>

                        <?php
                        if ($usr == 'Guest') {
                            echo '<a href="../login.php">Login</a>';
                        } else {
                            ?>



                            <li><a href="../index.php">
                                    <?php echo DASHBOARD; ?>
                                </a></li>
                            <li><a href="#">
                                    <?php echo PROFILE; ?>
                                </a></li>
                            <li><a href="#">
                                    <?php echo SECURITY; ?>
                                </a></li>

                            <li><a href="../logout2.php">
                                    <?php echo 'Sign Out'; ?>
                                </a></li>
                            <?php
                        }
                        ?>

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