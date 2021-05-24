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
                <img
                    class="left-black-red-button"
                    src="..\img\WebsiteButton_LeftArrow_blk.svg"
                    alt="Right"
                    height="25"
                    width="25" />
                <div class="label-text">JANUARY 2021</div> 
                <img
                    class="right-black-red-button"
                    src="..\img\WebsiteButton_RightArrow_blk.svg"
                    alt="Right"
                    height="25"
                    width="25" />
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        January 2021
                    </div>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\January 2021\Citrish_ColourLogo_Jan20.png">
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\January 2021\EM_January2021_Lemon_WhiteBG.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="galleryImage">
                        <img class="image" src="..\img\January 2021\EMLemonPattern_finalsig.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\January 2021\Citrish_GreyscaleLogo_Jan20.png">
                    </div>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>