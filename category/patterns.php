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
                
                <div class="label-text">LOGOS</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Logos text
                    </div>
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\January 2021\EMLemonPattern_finalsig.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\NightSky_Pattern_9_Feb19.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\February 2021\NightSky_Pattern36_Feb19.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_March2021_Pattern_Regular.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\March 2021\EM_March2021_Pattern_Repeat.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\April 2021\ThankYouPattern_Colour_Apr18.png">
                    </div>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>