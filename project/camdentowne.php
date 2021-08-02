<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMDEN TOWNE WEBSITE</title>
    
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
                <div class="label-text">CAMDEN TOWNE WEBSITE</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        Camden Towne requested a website design through my employer. My resulting design is an ode to the Arts and Crafts movement, as requested by the client. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_CamdentowneWebsite\EM_CamdenTowne_Homepage.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>