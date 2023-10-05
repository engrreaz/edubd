<?php require_once 'global.php'; ?>
<div class="section-header">
    <h2>Sliding Area Setup</h2>
</div>

<div class="col-xl-12 col-md-12 d-flexx" data-aos="fade-up" data-aos-delay="300" style="display:block;">
    <div class="member" style="position:relative;">
        <div class="logo"><i class="bi bi-disc-fill cs"></i></div>
        <h5 class="text-center"><b>Sliding Area</b></h5>
        <table style="width:100%;">
            <tr style="margin-bottom:20px;">
                <td colspan="6" style="color:<?php echo $clr; ?>; font-size:24px; padding:0 10px 0 0;">
                    <?php $uutype = 'slider';
                    include 'upload.php'; ?>
                </td>

            </tr>
            <tr>
                <td colspan="6" style="height:20px;">
                    <hr>
                </td>
            </tr>
            <?php
            $sql0 = "SELECT * FROM upload where uploadtype='slider' and category='-' order by status desc, id desc; ";
            $result0bb1 = $conn->query($sql0);
            if ($result0bb1->num_rows > 0) {
                while ($row0 = $result0bb1->fetch_assoc()) {
                    $pth = $row0["location"];
                    $status = $row0["status"];
                    $ten = $row0["titleen"];
                    $tbn = $row0["titlebn"];
                    $sten = $row0["subtitleen"];
                    $stbn = $row0["subtitlebn"];
                    $id = $row0["id"];
                    $lnk = $row0["link"];
                    if ($status == 1) {
                        $stt = 'checked';
                    } else {
                        $stt = '';
                    }

                    ?>
                    <tr style="margin-bottom:20px;">
                        <td style="color:<?php echo $clr; ?>; font-size:24px; padding:0 10px 0 0;">
                            <img src="../<?php echo $pth; ?>" style="width:150px; padding:5px;" class="" />
                            <input type="text" id="pth<?php echo $id; ?>" value="<?php echo $pth; ?>" hidden />
                        </td>
                        <td>
                            <input type="text" class="input form-control" id="ten<?php echo $id; ?>" value="<?php echo $ten; ?>"
                                placeholder="Title" />
                            <br>
                            <input type="text" class="input form-control" id="tbn<?php echo $id; ?>" value="<?php echo $tbn; ?>"
                                placeholder="Title" />
                        </td>
                        <td>
                            <input type="text" class="input form-control" id="sten<?php echo $id; ?>"
                                value="<?php echo $sten; ?>" placeholder="Title" />
                            <br>
                            <input type="text" class="input form-control" id="stbn<?php echo $id; ?>"
                                value="<?php echo $stbn; ?>" placeholder="Title" />
                        </td>
                        <td>&nbsp;</td>
                        <td colspan="2">
                            <input type="text" class="input form-control" id="lnk<?php echo $id; ?>" value="<?php echo $lnk; ?>"
                                placeholder="Link (if any)" />
                            <br>
                            <input type="checkbox" class="form-check-input" id="st<?php echo $id; ?>"
                                value="<?php echo $status; ?>" <?php echo $stt; ?> />

                            <button class="btn btn-primary" onclick="hero(<?php echo $id; ?>);"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-danger" onclick="herodel(<?php echo $id; ?>);"><i
                                    class="bi bi-trash-fill"></i></button>
                            <span id="heroupd<?php echo $id; ?>"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" style="height:20px;">
                            <hr>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>


        </table>



    </div>
</div><!-- End Block -->