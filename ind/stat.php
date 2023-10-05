<?php
$sql0 = "SELECT * FROM attnd where classname='total'  and sectionname='total' and date='$tday'";
$result0br = $conn->query($sql0);
if ($result0br->num_rows > 0) {
    while ($row0 = $result0br->fetch_assoc()) {
        $boysattnd = $row0["boysattnd"];
        $girlsattnd = $row0["girlsattnd"];
        $totalst = $row0["total"];
    }
}
?>


<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

            <div class="col-lg-6">
                <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6">

                <div class="stats-item d-flex align-items-center">
                    <span data-purecounter-start="0" data-purecounter-end="731" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Students</strong> Present Today</p>
                </div><!-- End Stats Item -->

                <div class="stats-item d-flex align-items-center">
                    <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Teachers</strong> Teaches Them</p>
                </div><!-- End Stats Item -->


                <div class="stats-item d-flex align-items-center">
                    <style>
                        .grad {
                            background-image: conic-gradient(var(--color-primary) 0deg, var(--color-primary) 156deg, red 156deg, red 275deg, gray 275deg);
                            border-radius: 50%;
                            height: 50px;
                            width: 50px;
                            position: relative;
                        }

                        .grad-inn {
                            height: 36px;
                            width: 36px;
                            position: absolute;
                            left: 7px;
                            top: 7px;
                            background: white;
                            border-radius: 50%;
                        }
                    </style>
                    <div class="grad ">
                        <div class="grad-inn"></div>
                    </div>


                    <div style="margin-left:30px;">
                        <p style="color:var(--color-primary); display:block; font-size:14px;">&bull; <strong>Boys :
                            </strong>
                            462</p>

                        <p style="color:red; display:block; font-size:14px;">&bull; <strong>Girls : </strong>
                            321</p>

                        <p style="color:gray; display:block; font-size:14px;">&bull; <strong>Absent : </strong>
                            156</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </div>
</section><!-- End Stats Counter Section -->