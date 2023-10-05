<?php $utype = $uutype ?? ''; ?>

<style>
    #uploadForm label {
        margin: 2px;
        font-size: .75em;
    }

    #progress-bar {
        background-color: #12CC1A;
        color: #FFFFFF;
        width: 0%;
        -webkit-transition: width .3s;
        -moz-transition: width .3s;
        transition: width .3s;
        border-radius: 5px;
    }

    #targetLayer {
        width: 100%;
        text-align: center;
    }
</style>

<div class="phppot-container tile-container">
    <form id="uploadForm" action="uploads.php" method="post">

        <h2 class="text-center">Progress Bar</h2>
        <div>
            <div class="row">
                <input name="utype" type="text" value="<?php echo $utype; ?>" class="full-width form-control" />
            </div>
            <div class="row">
                <label>Upload Image File:</label> <input name="userImage" id="userImage" type="file" accept="image/*"
                    class="full-width" required>
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="full-width" />
            </div>
            <div class="row">
                <div id="progress-bar"></div>
            </div>
            <div id="targetLayer"></div>
        </div>
    </form>
    <div id="loader-icon" style="display: none;">
        <img src="LoaderIcon.gif" />
    </div>
</div>