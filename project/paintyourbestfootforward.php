<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINT YOUR BEST FOOT FORWARD</title>
    
    <?php 
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/headerIncludes.php"); 
    ?>

</head>

<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/3dbox.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/navbar.php");
        
    ?>

    <div class="content">
        <div class="label-container">
            <div class="label-header">
                <div class="label-text">PAINT YOUR BEST FOOT FORWARD</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                    This is 3/4 of an animation I made to go with an application, featuring my pencilbird logo. The last quarter missing here is a reveal of the business logo.
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_PaintYourBestFootForward\EM_PencilBird_PainttubeShort.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>