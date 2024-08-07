<?php include("inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select com PHP e mySql</title>
</head>

<body>
    <form method="post" action="post.php">
        <select name="categoria">
            <option value="">Selecione uma categoria</option>
            <?php
            $query = $conn->query("SELECT * FROM categorias ORDER BY nome ASC");
            $registros = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($registros as $options) {
            ?>
                <option value="<?= $options["id"] ?>"><?= $options["nome"] ?></option>
            <?php
            }
            ?>
        </select>
        <button type=submit>Enviar</button>
    </form>
</body>

</html>