<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5</title>
</head>
<body> 
    <img src='image.php' alt='красный квадрат' id="img">
    <script>
        let img = document.querySelector('#img');
        document.addEventListener('click', (event) => {
            if (event.target == img) {
                console.log((event.clientX - img.offsetLeft) + ', ' + (event.clientY - img.offsetTop));
            }
        });
    </script>
</body>
</html>