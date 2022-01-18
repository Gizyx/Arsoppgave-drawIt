<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Del2\login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TerminOppgave-DrawIT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DrawIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="account.php">Account</a>
                    <a class="nav-link" href="support.php">Support</a>
                    <a class="nav-link disabled">User: <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                </div>
            </div>
        </div>
    </nav>
    <!--canvas-->
    <div onmousemove="oldCord(event)">
        <canvas id="canvas" width="100%" height="100%" oncontextmenu="return false"></canvas>
        <canvas id="canvas2" width="100%" height="100%" onmousemove="draw(event)" oncontextmenu="return false"></canvas>
    </div>

    <div>
        <!--Clear button-->
        <button class="clear" id="cClear">Clear</button>
        <!--Save button-->
        <a id="download" download="img.jpg"><button type="button" onClick="download()">Save</button></a>
        <!--Stroke Size slider-->
        <div class="sizeSlider">
            <p id="strokeSize">Stroke size: </p>
            <input type="range" id="sizeSlider" min="1" value="10">
        </div>
        <!--Mouse Cordinates-->
        <div class="cords unselectable">
            <p id="xCor">x: 0</p>
            <p id="yCor">y: 0</p>
        </div>

        <!--Color-->
        <div class="colorSelector">
            <input id="color" type="color"></td>
        </div>
    </div>
    <!--RANDOM-->
    <input id="randomCheck" class="random" type="checkbox">
    <script src="js\script.js"></script>
</body>

</html>