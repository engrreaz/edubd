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
                    <?php echo CLSSECSTAT; ?>
                </li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->

<style>
    th {
        vertical-align: middle;
        text-align: center;
        ;
    }
</style>

<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>
                                <?php echo CLSSECSTAT_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo CLSSECSTAT_SUBTITLE; ?>
                            </p>
                        </div>

                        <div class="section-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Class</th>
                                        <th rowspan="2">Section</th>
                                        <th rowspan="2">Students</th>
                                        <th colspan="2">Gender</th>
                                        <th colspan="4">Religion</th>


                                    </tr>
                                    <tr>

                                        <th>Boys</th>
                                        <th>Girls</th>
                                        <th>Muslim</th>
                                        <th>Hindu</th>
                                        <th>Christian</th>
                                        <th>Buddist</th>

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

                                            ?>
                                            <tr>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <?php echo $cls; ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <?php echo $sec; ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>

                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-right:15px; text-align:center;">
                                                    <?php echo random_int(55, 100); ?>
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