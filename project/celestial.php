<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELESTIAL</title>
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
                <div class="label-text">Celestial</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Inspired by those vintage sun and moon illustrations that generally look quite wise and noble. 

                        I made this pattern (and the matching animation) during lockdown; a time where I was not feeling particularly wise or noble.
 
                    </div>


                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Celestial\EM_CelestialPattern_9.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Pattern_Celestial\EM_CelestialPattern_36.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>