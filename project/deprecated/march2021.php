<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <div class="label-text">March 2021</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        March 2021
                    </div>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_MarchLogo_WhiteRook.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_MarchLogo_BlackRook.png">
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\March 2021\EM_MarchAnimation_work1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_March2021_Pattern_Regular.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_March2021_Pattern_Repeat.png">
                    </div>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>