<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <?php require_once(getcwd() . "/" . "components/headerIncludes.php"); ?>
    
</head>
<body>

    <?php
        require_once(getcwd() . "/" . "components/3dbox.php");
        require_once(getcwd() . "/" . "components/navbar.php");
        
    ?>

    <div class="app">

        <div class="content">
            <p>SORRY, THAT DOESN'T SEEM TO EXIST.</p>
            <p>HEAD BACK TO <span><a href="/">HOME</a>?</p>
        </div>

        <?php require_once(getcwd() . "/" . "components/footer.php"); ?>
    </div>
</body>
</html>