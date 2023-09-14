<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <div id="insinfo">
                <h1>
                    <?php echo scname; ?>
                </h1>
                <p>
                    <?php echo scaddress; ?>
                    <br>
                    <?php echo scfounder; ?></b>
                    <br>

                    <i class="bi-phone "><span>
                            <?php echo scmobile; ?>
                        </span></i> &nbsp; &nbsp; &nbsp;
                    <i class="bi-envelope"><a href="mailto:<?php echo scemail; ?>"><?php echo scemail; ?></a></i>

                </p>


            </div>



        </div>

        <style>
            .langon {
                background-color: white;
                ;
                border: 1px solid var(--primary-color);
                border-radius: 8px;
                color: var(--color-primary) !important;
            }

            .langoff {
                background-color: transparent;
                border: 1px solid white;
                border-radius: 8px;
                color: white !important;
            }

            #langbox a {
                padding: 5px 15px;
            }

            .lengen {
                font-size: 12px;
            }

            .langbn {
                font-size: 18px;
                font-family: SutonnyOMJ;
            }
        </style>


        <div class="social-links d-none d-md-flex align-items-center">
            <table>
                <tr>
                    <td>
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="float:right; text-align:right; color:white; padding-top:5px; position:relative;">
                            EIIN : <b>102030</b><br>MPO Index : <b>90807060</b>


                            <div id="langbox" style="margin:12px 0;">


                                <?php if ($lang == 'en') {
                                    ?>
                                    <a class="langon" href="?lang=en">
                                        English</a>
                                    <a class="langoff" href="?lang=bn">
                                        বাংলা</a>

                                    <?php
                                } else {
                                    ?>
                                    <div>
                                        <a class="langoff" href="?lang=en">
                                            English</a>
                                        <a class="langon" href="?lang=bn">
                                            বাংলা</a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
        </div>



        </td>
        </tr>
        </table>

    </div>



    </div>
</section><!-- End Top Bar -->