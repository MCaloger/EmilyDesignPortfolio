<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAZELNUT</title>
    
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
                <div class="label-text">HAZELNUT</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>
                            This publication was designed for the Ontario Ministry of Agriculture, Food and Rural Affairs (OMAFRA) and included an English and French version. Its design is based on the branding guidelines used for all new official Ontario publications and required a strong eye for detail to design a cohesive publication. 
                        </p>
                        <p>
                            Since the publication itself is not available (yet!) I am only showing the cover here.
                        </p>
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Design_Hazelnuts\EM_HazelnutGuide_FrontCover_EN.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>