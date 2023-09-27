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
                    <b>
                        <?php echo estd; ?>
                    </b>
                    <br>

                    <i class="bi-phone "><span>
                            <?php echo scmobile; ?>
                        </span></i> &nbsp; &nbsp; &nbsp;
                    <i class="bi-envelope"><a href="mailto:<?php echo scemail; ?>">
                            <?php echo scemail; ?>
                        </a></i>

                </p>


            </div>



        </div>




        <div class="social-links d-none d-md-flex align-items-center">
            <table>
                <?php
                $sql0 = "SELECT * FROM txtnote where title='socialicon' and texten!='#' order by id";
                $result0t = $conn->query($sql0);
                if ($result0t->num_rows > 0) {
                    echo '<tr><td style="text-align:right;">';
                    while ($row0 = $result0t->fetch_assoc()) {
                        $slnk = $row0["texten"];
                        $sico = $row0["textbn"];

                        echo '<a href="' . $slnk . '" class="' . $sico . '"><i class="bi bi-' . $sico . '"></i></a>';
                    }
                    echo '</td></tr>';
                }
                ?>

                <tr>
                    <td>
                        <div style="float:right; text-align:right; color:white; padding-top:5px; position:relative;">

                            <?php echo EIIN . SCCODE; ?>
                            <br>
                            <?php echo MPOINDEX . scmpo; ?>



                            <div id="langbox" style="margin:12px 0;">


                                <?php if ($lang == 'en') {
                                    ?>
                                    <a class="langon enn" href="?lang=en">
                                        English</a>
                                    <a class="langoff bnn" href="?lang=bn">
                                        বাংলা</a>

                                    <?php
                                } else {
                                    ?>
                                    <div>
                                        <a class="langoff enn" href="?lang=en">
                                            English</a>
                                        <a class="langon bnn" href="?lang=bn">
                                            বাংলা</a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>


                    </td>
                </tr>
            </table>
        </div>





    </div>


</section><!-- End Top Bar -->