 <?php
 /* usaremos */

 session_start(); /* PH*/ 

 $user="root";
$pass = "";
$db="pizzaria";
$host="localhost";

try {

    // codigo que pode lqnça

    $conn = new PDO("mysql:host=".$host.";dbname={$db}",$user,$pass, );

    /* habilitar */

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

} catch (PDOException $e) { 

    print "Error: ". $e->getMessage(). "<br>";
    die();

}

?>
