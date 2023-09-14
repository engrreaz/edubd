<?php
require_once 'inc.php';
include 'cdn/header.php';


// $fl = "http://eimbox.com/cdn/hd.txt";
// $cont = fopen($fl, "r");
// echo '<pre>' . print_r(fread($cont, 5000)) . '</pre>';
// fclose($cont);

// $url = "https://eimbox.com/cdn/header.php";
// $ch = curl_init();
// curl_setopt($c)h, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_URL, $url);
// $result = curl_exec($ch);
// echo $result;



// active function
// include "http://eimbox.com/cdn/hd.txt";
?>







<body onclick="load();">

    <?php
    include 'cdn/home_top.php'; // CDN
    include 'cdn/nav.php';
    //include 'home_hero.php'; 
    // echo $scnamed;
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <!-- <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Syllabus</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.php">
                            <?php echo HOME; ?>
                        </a></li>
                    <li>
                        <?php echo ACADEMIC; ?>
                    </li>
                    <li>
                        <?php echo SYLLABUS; ?>
                    </li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->






    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <section id="testimonials" class="testimonials">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>
                                    <?php echo SYLLABUS_TITLE; ?>
                                </h2>
                                <p>
                                    <?php echo SYLLABUS_SUBTITLE; ?>
                                </p>
                            </div>

                            <div class="section-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Classes & Sections</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle; padding-left:15px;">
                                                Six (Shakhar Nam)
                                            </td>
                                            <td>
                                                <a href="resources/syllabus/ddn.pdf"><i style="font-size:30px;"
                                                        class="bi bi-file-earmark-arrow-down-fill"></i></a>
                                                <a href="#"><i style="font-size:30px;" class="bi bi-book-half"></i></a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
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
    <?php include 'cdn/footer.php'; ?>