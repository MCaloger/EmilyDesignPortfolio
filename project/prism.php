<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRISM LOGO</title>
    
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
                <div class="label-text">PRISM LOGO</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        A logo made for a client who wished to brand a multifaceted solution to emergency communications across social media. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_PRISM\EM_PRISMLogo_Thumbnail.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_PRISM\EM_PRISMLogo_AnimationSlide.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>