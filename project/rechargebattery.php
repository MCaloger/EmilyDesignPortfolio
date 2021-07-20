<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recharge Battery</title>
    <link rel="icon" 
      type="image/png" 
      href="..\img\SiteLogo\EM_PencilBird_Original-02.svg" />
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
             
                <div class="label-text">Recharge Battery</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        It’s often easy to forget the importance of recharging one’s batteries in favour of pushing through whatever is next. 

                        Take care of yourself.

                    </div>
                    
                    <video class="galleryImage" width="300" height="300" autoplay muted loop>
                        <source src="..\img\BatteryAnimation_MissingText\Animation_RechargeBattery\EM_BatteryAnimation.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>