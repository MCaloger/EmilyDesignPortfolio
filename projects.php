<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once(getcwd() . "/" . "components/headerIncludes.php"); ?>
</head>
<body>
    <div class="container">
        <?php
        require_once(getcwd() . "/" . "components/3dbox.php");
        require_once(getcwd() . "/" . "components/navbar.php");
        
        ?>
    
        <div class="content">
            <div class="grid-container">
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/stokelyholidaycard.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Animation_HolidayCard\HolidayCardAnimation_Thumbnail.png" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/newyearlemon.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Animation_NewYearLemon\NewYearLemon_Thumbnail.png" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/borealis.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Logo_Borealis\Borealis_LogoColour.png" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/citrish.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Logo_Citrish\Citrish_LogoText_Colour-12.svg" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/powerup.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Logo_Powerup\EM_PowerupLogo_WhiteBG.png" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/celestial.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\Pattern_Celestial\EM_CelestialPattern_9.png" alt="logos image">

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <?php require_once(getcwd() . "/" . "components/footer.php"); ?>
    </div>
    

    <script src="js/carousel.js"></script>
    
</body>
</html>