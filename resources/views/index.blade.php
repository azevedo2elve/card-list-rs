<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite('resources/css/app.css')
</head>
<body>
    <?php
        foreach ($sheets as $key => $value) {
            //echo $value[0] . ' ------------------------- ' . $value[8] . '<br>';
        }
    ?>

    <div class="container mx-auto">
        <div id="cardRS" class="flex justify-center border border-blue-700 h-[1920px] w-[1080px]">
            <div class="border border-red-600 mt-96 mx-48 text-5xl text-white">
                <?php echo $sheets[1][0] . '<br>' . '<br>' . $sheets[1][8] . '<br>' . '<br>' . 'Endereço:' . '<br>' . $sheets[1][1] . ' - ' . $sheets[1][2]; ?>
            </div>
        </div>
    </div>
</body>
</html>
