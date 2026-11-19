<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP</title>
</head>
<body>
    <?php
        include('data.php');
    ?>
    <h1>Daftar Buah</h1>
    <ol>
        <?php
            foreach($buah as $data){
            ?>
                <li><?php echo $data; ?></li>
            <?php
            } //echo (=)
        ?>
    </ol>
</body>
</html>