<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOS</title>
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
                
                <div class="label-text">LOGOS</div> 
                
            </div>

            
            <div class="label-content">
                    <a href="../project/citrish.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\January 2021\Citrish_ColourLogo_Jan20.png">
                        </div>
                    </a>

                    <a href="../project/borealis.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Logo_Borealis\Borealis_LogoColour.png">
                        </div>
                    </a>

                    <a href="../project/powerup.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Updated Thumbnails\PowerupLogo_Thumbnail.png">
                        </div>
                    </a>

                    <a href="../project/harpyeagle.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Logo_HarpyEagle\EM_HarpyLogo_BlueEyes_June16.png">
                        </div>
                    </a>

                    <a href="../project/neonrook.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Logo_NeonRook\EM_NeonLogo_BlackRook.png">
                        </div>
                    </a>

                    <a href="../project/mermade.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Project_MerMade\Logo_MerMade\EM_MerMade_YellowBG-02.png">
                        </div>
                    </a>

                    <div class="galleryImage">
                        <img class="image" src="..\img\April 2021\EM_MercuryLogo_Icon-02.png">
                    </div>    
                    
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>