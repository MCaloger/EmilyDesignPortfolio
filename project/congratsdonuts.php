<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONGRATS DONUTS</title>
    
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
                <div class="label-text">CONGRATS DONUTS</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>The initial sketch for these donuts started out as a vertical greeting card design with the letters stacked in rows of three letters each.</p>
                        <p>However, since I do not have a printer and currently do not offer cards, the design now exists as a pattern. Congratulations!</p>
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Illustration_CongratsDonuts\CongratulationsDonuts_Pattern_AllColours.png">
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Illustration_CongratsDonuts\CongratulationsDonuts_Pattern_PeachBG.png">
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Illustration_CongratsDonuts\CongratulationsDonuts_Pattern_GreenBG.png">
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Illustration_CongratsDonuts\CongratulationsDonuts_Pattern_PinkBG.png">
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Illustration_CongratsDonuts\CongratulationsDonuts_Pattern_PurpleBG.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>