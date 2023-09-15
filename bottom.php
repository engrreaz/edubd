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
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Impact</span>
                </a>
                <div id="visitor">
                    <div id="counter" style="font-size:26px; font-weight:bold;">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="<?php echo $st; ?>" data-purecounter-end="<?php echo $cnt; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                        </div><!-- End Stats Item -->

                    </div>
                    <div id="countertitle">Total Page Visitor</div>
                    <div id="unique">Unique Visitor : <span>1326</span></div>
                </div>

                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                    valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
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