<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VINTAGE BIRD</title>

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
                <div class="label-text">Vintage Bird</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        These patterns were inspired by a very particular set of textiles from childhood. The textiles are long gone, but the fond memories remain.
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_VintageBird\VintageBird_Pattern_Image1.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_VintageBird\VintageBird_Pattern_Image2.png">
                    </div>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_VintageBird\VintageBird_Pattern_Image3.png">
                    </div>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>