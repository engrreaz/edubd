<?php
$sql0 = "SELECT count(*) as cnt FROM visitor where uri='$uri'";
$result0bb = $conn->query($sql0);
if ($result0bb->num_rows > 0) {
    while ($row0 = $result0bb->fetch_assoc()) {
        $cnt = $row0["cnt"];
    }
}
$st = $cnt - 5;
?>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="resources/logo-white.png" alt="logo" />
                </a>
                <div id="visitor">
                    <div id="counter" style="font-size:26px; font-weight:bold;">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="<?php echo $st; ?>" data-purecounter-end="<?php echo $cnt; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                        </div><!-- End Stats Item -->

                    </div>
                    <div id="countertitle">
                        <?php echo PAGEVIEW; ?>
                    </div>
                    <div id="unique">
                        <?php echo UNIQUE; ?> : <span>1326</span>
                    </div>
                </div>

                <p style="font-size:13px; margin-top:15px;">
                    Page Last Updated On : <br><span style="font-style:normal;">Thursday, 28 September, 2023</span>
                </p>
                <div class=" social-links d-flex mt-4">
                    <?php
                    $sql0 = "SELECT * FROM txtnote where title='socialicon' and texten!='#' order by id";
                    $result0t = $conn->query($sql0);
                    if ($result0t->num_rows > 0) {

                        while ($row0 = $result0t->fetch_assoc()) {
                            $slnk = $row0["texten"];
                            $sico = $row0["textbn"];

                            echo '<a href="' . $slnk . '" class="' . $sico . '"><i class="bi bi-' . $sico . '"></i></a>';
                        }

                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>
                    <?php echo LINKS; ?>
                </h4>
                <ul>
                    <li><a href="index.php">
                            <?php echo FHOME; ?>
                        </a></li>
                    <li><a href="about-us.php">
                            <?php echo FABOUT; ?>
                        </a></li>
                    <li><a href="document.php">
                            <?php echo FDOC; ?>
                        </a></li>
                    <li><a href="teacher.php">
                            <?php echo FTEACHER; ?>
                        </a></li>
                    <li><a href="committees">
                            <?php echo FCOMM; ?>
                        </a></li>

                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>
                    <?php echo LINKS2; ?>
                </h4>
                <ul>
                    <li><a href="clssec.php">
                            <?php echo FCLSSEC; ?>
                        </a></li>
                    <li><a href="gallery.php">
                            <?php echo FGALLERY; ?>
                        </a></li>
                    <li><a href="blog.php">
                            <?php echo FBLOG; ?>
                        </a></li>
                    <li><a href="resources.php">
                            <?php echo FRESOURCE; ?>
                        </a></li>
                    <li><a href="cca">
                            <?php echo FCCA; ?>
                        </a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>
                    <?php echo CONTACTS; ?>
                </h4>
                <p>
                    <?php echo scname . '<br>' . scaddress; ?> <br><br>
                    <strong>Phone:</strong>
                    <?php echo scmobile; ?><br>
                    <strong>Email:</strong>
                    <?php echo scemail; ?><br>
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Xeneen</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            Designed by <a href="https://xeneen.com/">xeneen</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->


<?php include 'cdn/footer.php'; ?>