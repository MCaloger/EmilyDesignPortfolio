<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEA WITCH</title>

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
                <div class="label-text">SEA WITCH</div> 
            </div>
            <div class="label-content">
                    <div class="label-content-pane-text">
                        Inspired by a local fish and chips restaurant whose exterior boasts a mural featuring some  trident-wielding tentacles. 
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_SeaWitch\EM_SeaWitchLogo_Blue.png">
                    </div>
                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_SeaWitch\EM_SeaWitchLogo_Teal.png">
                    </div>
                </div>
        </div>
    </div>
     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>