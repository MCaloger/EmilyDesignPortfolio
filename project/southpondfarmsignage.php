<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTH POND FARM SIGNAGE</title>

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
                <div class="label-text">SOUTH POND FARM SIGNAGE</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        This series of fourteen signs was commissioned by South Pond Farms with the intent of showcasing points of interest on the farm. Copy, background illustrations and photos were provided. I designed all other elements in studio. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_SouthPondSignage\SPF_WelcomeSign.jpg">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_SouthPondSignage\SPF_CottageGarden.jpg">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_SouthPondSignage\SPF_LowerGardens.JPG">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_SouthPondSignage\SPF_PotagerGarden.jpg">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>