<?php
include "_header.php";
include_once "connection_database.php";

?>


    <h1>Hello PHP HomePage</h1>
    <?php
    if(isset($_GET['g'])and !empty($_GET['g']))
    {
        echo "My name is Vova ".$_GET["g"];
    }
    $sth = $dbh->prepare("SELECT Id, Email, IsLock FROM `tbl_users`");
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    echo isset($dbh)."My name is Vova ";
    ?>


<?php
include "_footer.php";
?>