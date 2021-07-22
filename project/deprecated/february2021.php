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
                
                <div class="label-text">February 2021</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        February 2021
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\February 2021\EM_February2021_BorealisAnimation.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\EM_Borealis_Colour.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\EM_Borealis_BW.png">
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\February 2021\EM_NightSkyAnimation_Feb20.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\NightSky_Pattern_9_Feb19.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\NightSky_Pattern36_Feb19.png">
                    </div>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>