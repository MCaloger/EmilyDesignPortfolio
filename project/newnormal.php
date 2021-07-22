<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW NORMAL</title>
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
             
                <div class="label-text">New Normal</div> 
                
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        The goal of this video is to address the ‘new normal’ brought on by the pandemic and discuss the need for business to adapt to it.

                        The client provided the text; I created the background animations and slide transitions. 

                        The full video can be viewed here: <a href="https://www.youtube.com/watch?v=a30o9nyK18E">https://www.youtube.com/watch?v=a30o9nyK18E</a>
                    </div>
                    
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_NewNormal\HRM_NN_Work5c_WebsiteCut_AME\newnormalsnippet.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>