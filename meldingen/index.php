<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <?php 
        require_once '../backend/conn.php';
        $query = "SELECT * FROM meldingen";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $meldingen = $stmt->fetchALL(PDO::FETCH_ASSOC);
        foreach($meldingen as $melding)
        {
            echo "<p>" .$melding['attractie'], ", "  .$melding['type']; "</p>";
        }    
    ?>

   
    
    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <div style="height: 300px; background: #ededed; display: flex; justify-content: center; align-items: center; color: #666666;">(hier komen de storingsmeldingen)</div>
    </div>  

</body>

</html>
