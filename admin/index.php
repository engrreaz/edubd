<?php
require_once '../inc.php';
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
                    <?php echo SYLLABUS; ?>
                </li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->



<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="cell" data-aos="fade-up">
                    <?php include 'content_left.php'; ?>
                </div>
            </div>
            <div class="col-lg-8">
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up" id="main-block">

                        <?php
                        $units = explode(' ', 'B KB MB GB TB PB');
                        $SIZE_LIMIT = 2 * 1024 * 1024 * 1024; // 3 GB
                        $disk_used = foldersize("../");
                        // $disk_used = foldersize("https://www.eimbox.com/students/");
                        
                        $disk_remaining = $SIZE_LIMIT - $disk_used;

                        echo ("<html><body>");
                        echo ('diskspace used: ' . format_size($disk_used) . '<br>');
                        echo ('diskspace left: ' . format_size($disk_remaining) . '<br><hr>');
                        echo ("</body></html>");


                        function foldersize($path)
                        {
                            $total_size = 0;
                            $files = scandir($path);
                            $cleanPath = rtrim($path, '/') . '/';

                            foreach ($files as $t) {
                                if ($t <> "." && $t <> "..") {
                                    $currentFile = $cleanPath . $t;
                                    if (is_dir($currentFile)) {
                                        $size = foldersize($currentFile);
                                        $total_size += $size;
                                    } else {
                                        $size = filesize($currentFile);
                                        $total_size += $size;
                                    }
                                }
                            }

                            return $total_size;
                        }


                        function format_size($size)
                        {
                            global $units;

                            $mod = 1024;

                            for ($i = 0; $size > $mod; $i++) {
                                $size /= $mod;
                            }

                            $endIndex = strpos($size, ".") + 3;

                            return substr($size, 0, $endIndex) . ' ' . $units[$i];
                        }

                        ?>



                        <?php

                        // Get an array of all files in the directory using glob()
                        $files = glob('../resources/*.jpg');

                        // Loop through the array of files
                        foreach ($files as $file) {
                            // Output each file name on a new line
                            echo '<img src="' . $file . '" width="100px"/><br>';

                            echo $file . "\n<br>";
                        }

                        include 'upload.php';
                        ?>

                    </div>
                </section><!-- End Testimonials Section -->
            </div>

        </div>
    </div>



</main><!-- End #main -->




<?php include 'bottom.php'; ?>



<script>

</script>