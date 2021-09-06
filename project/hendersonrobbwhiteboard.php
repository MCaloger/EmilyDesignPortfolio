<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HENDERSON ROBB WHITEBOARD</title>
    
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
                <div class="label-text">HENDERSON ROBB WHITEBOARD</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>This animation is part of a revamp of a preexisting video. The original video was created for the client to explain the benefits of animated videos across five points. </p>
                        <p>My goal was to recreate the existing video as closely as possible in After Effects while also adding a few more flourishes, such as the radiating lines originating from the lightbulb in the clip below. </p>
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_HendersonRobb\EM_HRMWhiteboardVideo_short.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>