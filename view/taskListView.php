<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIKAZ TO DO ZADATAKA</title>
</head>
<body>

     <form action="../index.php?action=add" method="post">
        <input type="text" name="naslov" required placeholder="Upišite naslov zadatka">
        <input type="text" name="opis" required placeholder="Opišite zadatak">
        <button type="submit">DODAJ ZADATAK</button>
</form>

<ul>
    <?php
        foreach($tasks as $task)
        {
            echo "<li>Naslov: {$task['naslov']} {$task['opis']}</li>";
        }
    ?>
</ul>
    
</body>
</html>