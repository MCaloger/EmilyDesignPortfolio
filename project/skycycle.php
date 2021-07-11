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
                <div class="label-text">Sky Cycle</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        An ode to all the emotions experienced while working from home. Sometimes the days bleed together and sometimes you look around and notice that you are in fact, making progress.
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\Animation_SkyCycle\EM_SkyCycleAnimation_Feb20.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>