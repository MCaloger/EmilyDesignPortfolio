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
                
                <div class="label-text">LOGOS</div> 
                
            </div>

            
            <div class="label-content">
                <div class="divider"></div>
                    <div class="label-content-pane-text">
                        Logos text
                    </div>
                    
                    <a href="../project/citrish.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\January 2021\Citrish_ColourLogo_Jan20.png">
                        </div>
                    </a>

                    <a href="../project/borealis.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\February 2021\EM_Borealis_Colour.png">
                        </div>
                    </a>

                    <a href="../project/powerup.php">
                        <div class="galleryImage">
                            <img class="image" src="..\img\Logo_Powerup\EM_PowerupLogo_WhiteBG.png">
                        </div>
                    </a>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_MarchLogo_WhiteRook.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\April 2021\EM_MercuryLogo_Icon-02.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>