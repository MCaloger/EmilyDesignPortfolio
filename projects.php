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
                        <a href="/project/january2021.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\January 2021\JAN2021_Thumbnail.png" alt="cards image">  
                                <div class="overlay">January 2021</div>
                            </div>                  
                        </a>      
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/february2021.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\February 2021\FEB2021_Thumbnail.png" alt="logos image">
                                <div class="overlay">February 2021</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/march2021.php">
                            <div class="thumbnail-container">
                                <img class="thumbnail-sm" src="img\March 2021\EM_MarchLogo_WhiteRook.png" alt="logos image">
                                <div class="overlay">March 2021</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="nostalgiadistracted.php">
                            <img class="thumbnail-sm" src="img\Nostalgia-Distracted\20191017_193233.jpg" alt="nostalgia-distracted image">
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="cards.php">
                            <img class="thumbnail-sm" src="img\cards\20191124_160705.jpg" alt="cards image">
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="logos.php">
                            <img class="thumbnail-sm" src="img\25 Logos - 2020\20200615_190911.jpg" alt="logos image">
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