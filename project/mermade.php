<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERMADE</title>

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
                        A logo and pattern made for a sustainable seafood company featuring a cool summery palette. 
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Project_MerMade\Logo_MerMade\EM_MerMade_YellowBG-02.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Project_MerMade\Pattern_MerMade\EM_JulyPattern_ThinWaves_v2-01.png">
                    </div>     
                    
                    <div class="galleryImage">
                        <img class="image" src="..\img\Project_MerMade\Logo_MerMade\EM_MerMade_BlueBG-02.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Project_MerMade\Logo_MerMade\EM_MerMade_PinkBG-02.png">
                    </div> 

                    <div class="galleryImage">
                        <img class="image" src="..\img\Project_MerMade\Logo_MerMade\EM_MerMade_OrangeBG-02.png">
                    </div>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>