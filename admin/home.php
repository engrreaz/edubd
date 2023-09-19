<?php require_once 'global.php'; ?>
<div class="section-header">
    <h2>
        <?php echo "Home Page Manager"; ?>
    </h2>
    <p>
        <?php echo "subtitle"; ?>
    </p>
</div>

<div class="section-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>...................</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql0 = "SELECT * FROM areas where user='$rootuser' and sessionyear='$sy'+1 order by idno; ";
            $result0bb = $eimbox->query($sql0);
            if ($result0bb->num_rows > 0) {
                while ($row0 = $result0bb->fetch_assoc()) {
                    $cls = $row0["areaname"];
                    $sec = $row0["subarea"];

                    ?>
                    <tr>
                        <td style="vertical-align:middle; padding-left:15px;">
                            <?php echo $cls . ' (' . $sec . ')'; ?>
                        </td>
                        <td>
                            <a href="resources/syllabus/<?php echo $cls . $sec; ?>.pdf" target="_blank"><i
                                    style="font-size:30px;" class="bi bi-file-earmark-arrow-down-fill"></i></a>
                            <a href="resources/syllabus/<?php echo $cls . $sec; ?>.pdf"><i style="font-size:30px;"
                                    class="bi bi-book-half"></i></a>

                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>