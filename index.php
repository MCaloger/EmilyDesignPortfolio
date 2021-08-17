<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <?php require_once(getcwd() . "/" . "components/headerIncludes.php"); ?>
    
</head>
<body>

    <?php
        require_once(getcwd() . "/" . "components/3dbox.php");
        require_once(getcwd() . "/" . "components/navbar.php");
        
    ?>

    <div class="app">

        <div class="content">
            <div class="text">
                <p>EMILY IS A GRAPHIC DESIGNER THAT LIKES TO DABBLE IN ILLUSTRATION AND ANIMATION.</p>
            </div>
            <div class="grid-container">
                <div class="thumbnail-item">
                    <div class="category-title">DESIGN</div>
                        <div class="thumbnail-item-image">
                            <a href="/category/design">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\Logo_Powerup\EM_PowerupLogo_WhiteBG.png" alt="logos image">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="thumbnail-item">
                        <div class="category-title">ANIMATION</div>
                        <div class="thumbnail-item-image">
                            <a href="/category/animation">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\BatteryAnimation_MissingText\EM_BatteryAnimation_Thumbnail_NoSig.png" alt="logos image">
                                 
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="thumbnail-item"> 
                        <div class="category-title">Illustration</div>
                        <div class="thumbnail-item-image">
                            <a href="/category/illustration">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\Pattern_Powerups\EM_PowerupPattern_May14.png" alt="logos image">
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>

        <?php require_once(getcwd() . "/" . "components/footer.php"); ?>
    </div>
</body>
</html>