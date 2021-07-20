<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEON ROOK</title>
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
                <div class="label-text">Citrish</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        The third project from the ‘neon’ set inspired by vaporware and synthwave aesthetics.
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_NeonRook\EM_NeonLogo_WhiteRook.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Logo_NeonRook\EM_NeonLogo_BlackRook.png">
                    </div>          
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>