<?php $utype = $uutype ?? ''; ?>

<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


<style>
    form {
        font-size: 14px;
    }
</style>
<div class="row">

    <div>

        <img src="filed.png" width="40px" />
        <br>
        <p style="font-size:13px;">To add a new slide first upload an image by "Choose File" and hit "Upload"
            button.<br>
            After Uploading update slide information you need.</p>
        <hr>

        <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
            <input name="utype" id="utype" type="text" value="<?php echo $utype; ?>" class="form-controls" hidden />
            <input type="text" class="form-controls" id="name" name="name" placeholder="Enter name" value="name"
                hidden />
            <input type="email" class="form-controls" id="email" name="email" placeholder="Enter email"
                value="email@email.com" hidden />






            <input id="uploadImage" type="file" accept="image/*" name="image" />
            <div id="preview"><img src="filed.png" style="width:50px;" /></div>
            <input class="btn btn-success" type="submit" value="Upload">
        </form>

        <div id="err"></div>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function (e) {
        $("#form").on('submit', (function (e) {
            e.preventDefault();
            $.ajax({
                url: "ajaxupload.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (data) {
                    if (data == 'invalid') {
                        // invalid file format.
                        $("#err").html("Invalid File !").fadeIn();
                    }
                    else {
                        // view uploaded file.
                        $("#preview").html(data).fadeIn();
                        $("#form")[0].reset();
                    }
                },
                error: function (e) {
                    $("#err").html(e).fadeIn();
                }
            });
        }));
    });
</script>