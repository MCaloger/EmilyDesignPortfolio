<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEON CHESS PATTERN</title>

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
                <div class="label-text">Powerup</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Inspired by both vaporwave and synthwave aesthetics, this pattern is a partner piece to the Elaborate animation. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_NeonChess\EM_NeonChess_Pattern_Regular.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_NeonChess\EM_NeonChess_Pattern_Repeat.png">
                    </div>
                    
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>