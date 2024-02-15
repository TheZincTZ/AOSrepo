<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>999 Roses</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #f7f7f7;
        }
        
        .rose {
            width: 50px;
            height: 50px;
            background-image: url('https://www.pngkey.com/png/full/201-2017478_rose-png-image-background-rose-flower-png.png');
            background-size: cover;
            margin: 5px;
        }
    </style>
</head>
<body>
    <!-- Generating 999 roses -->
    <?php for ($i = 0; $i < 999; $i++) { ?>
        <div class="rose"></div>
    <?php } ?>
</body>
</html>
