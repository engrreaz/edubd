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
                    <?php echo ATAGLANCE; ?>
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
                                <?php echo ATAGLANCE; ?>
                            </h2>
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

                            .extra {
                                font-style: normal;
                                font-size: 14px;
                                font-weight: 400;
                            }

                            .extra::before {
                                content: "\F28A";
                                display: inline-block;
                                font-family: "bootstrap-icons";
                                font-size: 1rem;
                                margin-left: -5px;
                                width: 25px;
                                margin-top: 5px;
                                color: white;
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
                        <div class="extra">
                            <?php echo estd; ?>
                        </div>
                        <div class="extra">
                            <?php echo scfounder; ?>
                        </div>


                    </div>

                    <div class="container" data-aos="fade-down" style="margin-top:25px;">
                        <table class="table table-striped">

                            <tr>
                                <td>EIIN</td>
                                <td> : </td>
                                <td>
                                    <?php echo $sccode; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>MPO Code</td>
                                <td> : </td>
                                <td>
                                    <?php echo scmpo; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Stipend Code</td>
                                <td> : </td>
                                <td>
                                    <?php echo $stipend ?? 0; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Center Code</td>
                                <td> : </td>
                                <td>
                                    <?php echo $examcentercode ?? 0; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Education Board Code</td>
                                <td> : </td>
                                <td>
                                    <?php echo $boardcode ?? 0; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Institute Head</td>
                                <td> : </td>
                                <td>
                                    <?php echo $ht ?? '...'; ?><br><small>Principal</small>
                                </td>
                            </tr>
                            <tr>
                                <td>SMC Chairman</td>
                                <td> : </td>
                                <td>
                                    Mr. Md. Moshiur Rahman, <small>NDC</small>
                                </td>
                            </tr>
                            <tr>
                                <td>SMC Validity Period </td>
                                <td> : </td>
                                <td>
                                    ....... to ........
                                </td>
                            </tr>
                            <tr>
                                <td>Total Teachers & Staffs</td>
                                <td> : </td>
                                <td>
                                    <?php echo 'Teachers : ' . $totalteacher ?? 0 . ' | Staffs : ' . $totalstaffs ?? 0; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Class & Sections</td>
                                <td> : </td>
                                <td>
                                    ....... to ........
                                </td>
                            </tr>
                            <tr>
                                <td>Total Students</td>
                                <td> : </td>
                                <td>
                                    <?php echo $totalst ?? 0; ?>
                                    <br>
                                    <?php echo 'Boys : ' . $totalboys ?? 0 . ' | Girls : ' . $totalgirls ?? 0; ?>
                                </td>
                            </tr>




                        </table>

                    </div>
                    <!-- <div id="googleMap" style="margin-top:30px; width:100%;height:400px;">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.560987516783!2d90.84201147366639!3d23.72736658966337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375441b49bb56edb%3A0xa11bb99c2b69fac2!2z4Kat4KeB4Kaw4Kat4KeB4Kaw4Ka_4Kef4Ka-IOCmhuCmsOCnjeCmpuCmtiDgpongpprgp43gppog4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4KefIChCaHVyYmh1cmlhIEFkYXJzaGEgSGlnaCBTY2hvb2wp!5e0!3m2!1sen!2sbd!4v1695412464838!5m2!1sen!2sbd"
                            width="100%" height="450" class="docpic" style="border-radius:12px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div> -->



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