<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                        <div class="thumbnail-item-image">
                            <a href="/category/logos.php">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\March 2021\EM_MarchLogo_WhiteRook.png" alt="logos image">
                                    <div class="overlay">Logos</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="thumbnail-item">
                        <div class="thumbnail-item-image">
                            <a href="/category/animations.php">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\March 2021\stills\Frame-00208.png" alt="logos image">
                                    <div class="overlay">Animations</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="thumbnail-item">
                        <div class="thumbnail-item-image">
                            <a href="/category/patterns.php">
                                <div class="thumbnail-container">
                                    <img class="thumbnail-lg" src="img\March 2021\EM_March2021_Pattern_Regular.png" alt="logos image">
                                    <div class="overlay">Patterns</div>
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