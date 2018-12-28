<?php 
if(isset($_GET['device'])) {
    $_SESSION['device'] = $_GET['device'];
}
?>


<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left sideb" style="width:300px;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    <p class="w3-bar-item">Device: <?=$_SESSION['device']?></p>
    <a href="pcpanel&mode=select_device" class="w3-bar-item w3-button">Select Device</a>
    <a href="pcpanel&mode=device_info" class="w3-bar-item w3-button">Device Info</a>
    <a href="pcpanel&mode=device_activity" class="w3-bar-item w3-button">Device Activity</a>
</div>

<div class="w3-main" style="margin-left:320px" id="konten">
<div class="container">

    <?php 
    if (isset($_GET['mode'])) {
        $mode = $_GET['mode'];

        if (file_exists('view/'.$url.'/'.$mode.'.php')){
            require 'view/'.$url.'/'.$mode.'.php';
        } else {
            header('Location: pcpanel');
        }
    }
    ?>

</div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>
