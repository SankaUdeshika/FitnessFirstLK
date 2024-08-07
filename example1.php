<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Example</title>
    <style>
        .div1 {
            width: 100%;
            height: 300px;
            background-image: url("Resources/images/carouselImages/1.jpeg");
        }

        .div2 {
            width: 200px;
            height: 100px;
            background-color: lightgreen;
            margin: 10px;
        }

        .div1:hover+.div2 {
            background-image: url("Resources/images/carouselImages/1.jpeg");
        }
    </style>
</head>

<body>
    <div class="div1">Hover over me</div>
    <div class="div2">Watch my color change</div>
</body>

</html>