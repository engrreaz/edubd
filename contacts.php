<?php
require_once 'inc.php';
?>




<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <nav>
        <div class="container">
            <ol>
                <li><a href="index.php">
                        <?php echo HOME; ?>
                    </a></li>
                <li>
                    <?php echo CONTACTS; ?>
                </li>
            </ol>
        </div>
    </nav>
</div>



<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>
                                <?php echo CONTACTS_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo ROUTINE_SUBTITLE; ?>
                            </p>
                        </div>

                        <style>
                            .logo {
                                height: 100px;
                                margin-bottom: 10px;
                            }

                            .ins {
                                color: var(--color-primary);
                                font-weight: 600;
                            }

                            .address {
                                font-style: italic;
                                font-size: 15px;
                            }

                            .address::before {

                                content: "\F3E7";
                                color: var(--color-primary);
                                display: inline-block;
                                font-family: "bootstrap-icons";
                                font-style: normal;
                                font-size: 1rem;
                                margin-left: -5px;
                                width: 25px;
                                margin-top: 5px;
                            }

                            .phone {
                                font-style: normal;
                                font-size: 14px;
                                font-weight: 500;
                            }

                            .phone::before {
                                content: "\F5B4";
                                display: inline-block;
                                font-family: "bootstrap-icons";
                                font-size: 1rem;
                                margin-left: -5px;
                                width: 25px;
                                margin-top: 5px;
                            }

                            .email {
                                font-style: normal;
                                font-size: 14px;
                                font-weight: 400;
                            }

                            .email::before {
                                content: "\F84B";
                                display: inline-block;
                                font-family: "bootstrap-icons";
                                font-size: 1rem;
                                margin-left: -5px;
                                width: 25px;
                                margin-top: 5px;
                            }
                        </style>

                        <img class="logo" src="resources/logo.png" alt="Logo" />
                        <h2 class="ins">
                            <?php echo scname; ?>
                        </h2>
                        <div class="address">
                            <?php echo scaddress; ?>
                        </div>
                        <div class="phone">
                            <?php echo scmobile; ?>
                        </div>
                        <div class="email">
                            <?php echo scemail; ?>
                        </div>


                    </div>


                    <div id="googleMap" style="margin-top:30px; width:100%;height:400px;"></div>

                    <script>
                        function myMap() {
                            var mapProp = {
                                center: new google.maps.LatLng(51.508742, -0.120850),
                                zoom: 9,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key234=&callback=myMap"></script>



                </section><!-- End Testimonials Section -->
            </div>
            <div class="col-lg-4">
                <div class="cell" data-aos="fade-up">
                    <?php include 'content_right.php'; ?>
                </div>
            </div>
        </div>
    </div>



</main><!-- End #main -->




<?php include 'bottom.php'; ?>