<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLIDAY CARD</title>

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
                
                <div class="label-text">Holiday Card, 2020</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        This holiday card was drawn by Jeff Jackson for Stokely Design Associates Inc.

                        I isolated each part of the drawing, added colour and created the animation you see below. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Animation_HolidayCard\JJ_Holiday2020_RedGrey_540px.gif">
                    </div>


                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>