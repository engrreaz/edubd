<?php
require_once 'inc.php';


// $fl = "http://eimbox.com/cdn/hd.txt";
// $cont = fopen($fl, "r");
// echo '<pre>' . print_r(fread($cont, 5000)) . '</pre>';
// fclose($cont);


// active function
// include "http://eimbox.com/cdn/hd.txt";
?>










<section id="hero2" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">

            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <?php
                    $sql0 = "SELECT count(*) as cnt FROM upload where uploadtype='slider' and status = 1 ";
                    $result0x = $conn->query($sql0);
                    if ($result0x->num_rows > 0) {
                        while ($row0 = $result0x->fetch_assoc()) {
                            $tcnt = $row0["cnt"];
                        }
                    }
                    for ($i = 0; $i < $tcnt; $i++) {
                        if ($i == 0) {
                            $actv = ' class="active" ';
                        } else {
                            $actv = '';
                        }
                        ?>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $i; ?>" <?php echo $actv; ?>></button>
                        <?php
                    }
                    ?>
                </div>
                <style>
                    .carousel-item {
                        background-color: var(--color-primary);
                        height: 400px;
                        width: 100%;
                    }
                </style>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">

                    <div style="position:absolute; z-index:990; right:15px; bottom:15px; height:60px; width:60px;">
                        <img src="resources/logo-white.png" style=" height:60px; width:60px;" />
                    </div>

                    <?php
                    $sql0 = "SELECT * FROM upload where uploadtype='slider' and status = 1 order by id ";
                    $result0bb = $conn->query($sql0);
                    if ($result0bb->num_rows > 0) {
                        while ($row0 = $result0bb->fetch_assoc()) {
                            $filepath = $row0["location"];
                            $piclink = $row0["link"];
                            $pictitle = $row0["title" . $lang];
                            $picsubtitle = $row0["subtitle" . $lang];

                            ?>
                            <div class=" carousel-item active">
                                <img src="<?php echo $filepath; ?>" alt="Los Angeles" class="d-block"
                                    style="width:100%; position:absolute; top:-40%;">
                                <div class="carousel-caption">
                                    <h3>
                                        <?php echo $pictitle; ?>
                                    </h3>
                                    <p>
                                        <?php echo $picsubtitle; ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>







                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <div class="container-fluid mt-3">
                <!-- <h3>Carousel Example</h3>
                <p>The following example shows how to create a basic carousel with indicators and controls.</p> -->
            </div>


        </div>
    </div>


    <style>
        #grad {
            background-image: conic-gradient(white 0deg, white 68deg, red 68deg, red 211deg, gray 211deg);

        }

        .pts {
            padding: 0;
            margin: 0;
            background: red;

        }

        .title {
            font-size: 10px;
        }
    </style>




    <!-- 
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box pts ">
                        <div>
                            <div id="grad" class="out-circle">
                                <div class="mid-circle"></div>
                            </div>
                        </div>
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <div class="title"><a href="" class="stretched-link">Today's<br>Attendance</a></div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gem"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
 -->


</section>







<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php include 'index_content.php'; ?>
            </div>
            <div class="col-lg-4">
                <div class="cell" data-aos="fade-up">
                    <?php include 'index_content_right.php'; ?>
                </div>
            </div>
        </div>
    </div>



</main><!-- End #main -->




<?php include 'bottom.php'; ?>