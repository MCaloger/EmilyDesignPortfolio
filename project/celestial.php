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
                <div class="label-text">Celestial</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Inspired by those vintage sun and moon illustrations that generally look quite wise and noble. 

                        I made this pattern (and the matching animation) during lockdown; a time where I was not feeling particularly wise or noble.
 
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\January 2021\EM_January2021_Lemon_WhiteBG.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>


                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Celestial\EM_CelestialPattern_9.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Celestial\EM_CelestialPattern_36.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>