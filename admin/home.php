<?php require_once 'global.php'; ?>
<div class="section-header">
    <h2>
        <?php echo "Home Page Manager"; ?>
    </h2>
    <p>
        <?php echo "subtitle"; ?>
    </p>
</div>

<div class="col-xl-12 col-md-12 d-flexx" data-aos="fade-up" data-aos-delay="300" style="display:block;">
    <div class="member" style="position:relative;">
        <div class="logo"><i class="bi bi-mortarboard-fill cs"></i></div>
        <h6>Social Media</h6>
        <table>
            <?php
            $sql0 = "SELECT * FROM txtnote where title='socialicon' order by id; ";
            $result0bb1 = $conn->query($sql0);
            if ($result0bb1->num_rows > 0) {
                while ($row0 = $result0bb1->fetch_assoc()) {
                    $ico = $row0["textbn"];
                    $lnk = $row0["texten"];
                    $lnk = $row0["texten"];
                    $id = $row0["id"];
                    $clr = $row0["entryby"];
                    ?>
                    <tr>
                        <td style="color:<?php echo $clr; ?>; font-size:24px; padding:0 10px 0 0;">
                            <i class="bi bi-<?php echo $ico; ?>"></i>
                        </td>
                        <td>
                            <input type="url" class="input form-control block" id="link" value="<?php echo $lnk; ?>" />
                        </td>
                        <td>&nbsp;</td>
                        <td colspan="2"><button class="btn btn-primary" onclick="upd(<?php echo $id; ?>);"><i
                                    class="bi bi-box-arrow-right"></i></button></td>
                    </tr>
                    <?php
                }
            }
            ?>


        </table>



    </div>
</div><!-- End Block -->




<div class="section-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>...................</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>