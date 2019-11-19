<?php
include "_header.php";
?>


    <h1>Hello PHP HomePage</h1>
    <?php
    if(isset($_GET['g'])and !empty($_GET['g']))
    {
        echo "My name is Vova ".$_GET["g"];
    }
        
    ?>


<?php
include "_footer.php";
?>