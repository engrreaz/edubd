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
                    <?php echo ACADEMIC; ?>
                </li>
                <li>
                    <?php echo CLSSEC; ?>
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
                                <?php echo CLSSEC_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo CLSSEC_SUBTITLE; ?>
                            </p>
                        </div>

                        <div class="section-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Students</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql0 = "SELECT * FROM areas where user='$rootuser' and sessionyear='$sy' order by idno; ";
                                    $result0bb = $eimbox->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $cls = $row0["areaname"];
                                            $sec = $row0["subarea"];

                                            $sql0x = "SELECT count(*) as stcnt FROM sessioninfo where sccode='$sccode' and sessionyear='$sy' and classname='$cls' and sectionname = '$sec'; ";
                                            $result0bbx = $eimbox->query($sql0x);
                                            if ($result0bbx->num_rows > 0) {
                                                while ($row0x = $result0bbx->fetch_assoc()) {
                                                    $stcnt = $row0x["stcnt"];
                                                }
                                            }
                                            ?>
                                            <tr>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <?php echo $cls; ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <?php echo $sec; ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:left;">
                                                    <?php echo $stcnt; ?>
                                                </td>

                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
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