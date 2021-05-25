<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                
                <div class="label-text">ANIMATIONS</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Animations text
                    </div>
                    
                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\January 2021\EM_January2021_Lemon_WhiteBG.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\February 2021\EM_February2021_BorealisAnimation.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\February 2021\EM_NightSkyAnimation_Feb20.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\March 2021\EM_MarchAnimation_work1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\April 2021\EM_ThankYouAnimation_Apr18 (2).mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>