<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILLUSTRATIONS</title>
    <link rel="icon" 
      type="image/png" 
      href="..\img\SiteLogo\EM_PencilBird_Original-02.svg" />
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
                
                <div class="label-text">Illustrations</div> 
                
            </div>
            <div class="label-content">

                    <a href="../project/celestial.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Pattern_Celestial\EM_CelestialPattern_9.png">
                        </div>
                    </a>

                    <a href="../project/poweruppattern.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Pattern_Powerups\EM_PowerupPattern_May14.png">
                        </div>
                    </a>

                    <a href="../project/lemon.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Pattern_Lemons\EMLemonPattern_finalsig.png">
                        </div>
                    </a>   

                    <a href="../project/neonchesspattern.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\March 2021\EM_March2021_Pattern_Regular.png">
                        </div>
                    </a>

                    <a href="../project/vintagebird.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Pattern_VintageBird\VintageBird_Pattern_Image2.png">
                        </div>
                    </a>

                    <a href="../project/mermade.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Project_MerMade\Pattern_MerMade\EM_JulyPattern_ThinWaves_v2-01.png">
                        </div>
                    </a>

                    <div class="galleryImage">
                        <img class="image" src="..\img\April 2021\ThankYouPattern_Colour_Apr18.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>