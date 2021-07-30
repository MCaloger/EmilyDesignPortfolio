<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER THE ELEMENTS</title>

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
                <div class="label-text">MASTER THE ELEMENTS</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        The hero’s journey always feels a bit better when you have the elements on your side.  
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Powerups\EM_PowerupPattern_May14.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Powerups\EM_PowerupPattern_Fire_May14.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Powerups\EM_PowerupPattern_IceWater_May14.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Powerups\EM_PowerupPattern_ElectricLight_May14.png">
                    </div>
                    
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>