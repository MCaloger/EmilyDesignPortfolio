<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOULEVARD</title>
    
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
                <div class="label-text">BOULEVARD</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p><i>Boulevard! A Hollywood Story</i> details Gloria’s Swanson attempt to create a musical version of her film <i>Sunset Boulevard</i> with songwriters Richard Stapley and Dickson Hughes. </p>
                        <p>The client approached illustrator Maurice Vellekoop to create art for certain scenes with the intent to animate the art in places where footage did not exist. </p>
                        <p>I was tasked with animating the flat art to create the scenes that the client desired. This involved singling out the individual pieces of art, editing them to bring out the colours and contrast, then importing these pieces of art into After Effects and animating each part.</p>
                        <p>The clips you see below are small portions of full scenes.  </p>
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_Boulevard\EM_BLVD_Scene25C.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_Boulevard\EM_BLVD_Scene3A.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_Boulevard\EM_BLVD_Scene4B.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>