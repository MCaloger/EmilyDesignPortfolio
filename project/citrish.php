<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITRISH</title>

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
                <div class="label-text">Citrish</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Lemon is the perfect accompaniment to fish, both in food and design. 

                        This project was inspired by the influx of grocery delivery services, meal planning apps and health planning tools. 

                        Could Citrish help you find your ideal balance?
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_Citrish\Citrish_LogoText_Colour-12.svg">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_Citrish\Citrish_LogoText_Grey-14.svg">
                    </div>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>