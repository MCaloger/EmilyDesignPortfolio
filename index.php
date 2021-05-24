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
                <p>EMILY IS A GRAPHIC DESIGNER THAT LIKES TO DABBLE IN ILLUSTRATION.</p>
            </div>

            <div class="thumbnail-row">
                <div class="thumbnail-item">
                    <div class="thumbnail-item-image">
                        <a href="/project/january2021.php">
                            <img class="thumbnail-lg" src="img\January 2021\JAN2021_Thumbnail.png" alt="cards image">
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">

                    <div class="thumbnail-item-image">
                        <a href="/project/february2021.php">
                            <img class="thumbnail-lg" src="img\February 2021\FEB2021_Thumbnail.png" alt="borealis">
                        </a>
                    </div>
                </div>
                <div class="thumbnail-item">

                    <div class="thumbnail-item-image">
                        <a href="/project/march2021.php">
                            <img class="thumbnail-lg" src="img\March 2021\EM_MarchLogo_WhiteRook.png" alt="whiterook">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(getcwd() . "/" . "components/footer.php"); ?>
    </div>
</body>
</html>