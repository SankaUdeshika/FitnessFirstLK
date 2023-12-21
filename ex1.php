<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: red;
        }

        .slider {
            width: 800px;
            height: 500px;
            border-radius: 10px;
            background-color: black;
            overflow: hidden;
        }

        .slides {
            width: 500%;
            height: 500px;
            display: flex;
        }

        .slides input {
            display: none;
        }

        .slide {
            width: 20%;
            transition: 2s;
        }

        .slide img {
            width: 800px;
            height: 500px;
        }

        /* css for manual slide navigation */
        .navigation-manual {
            position: absolute;
            width: 800px;
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .manual-btn {
            border: 2px solid white;
            padding: 5px;
            border-radius: 10px;
            cursor: pointer;
            transform: 1s;
        }

        .manual-btn:not(:last-child) {
            margin-right: 40px;
        }

        .manual-btn:hover {
            background: white;
        }

        #radio1:checked~.first {
            margin-left: 0;
        }

        #radio2:checked~.first {
            margin-left: -20%;
        }

        #radio3:checked~.first {
            margin-left: -40%;
        }

        #radio4:checked~.first {
            margin-left: -60%;
        }

        /* css for Automatic navigation */
        .navigation-auto {
            position: absolute;
            display: flex;
            width: 800px;
            justify-content: center;
            margin-top: 460px;
        }

        .navigation-auto div {
            border: 2px solid white;
            padding: 5px;
            border-radius: 10px;
            transition: 1s;
        }

        .navigation-auto div:not(:last-child) {
            margin-right: 40px;
        }

        #radio1:checked~.navigation-auto .auto-btn1 {
            background: white;
        }

        #radio2:checked~.navigation-auto .auto-btn2 {
            background: white;
        }

        #radio3:checked~.navigation-auto .auto-btn3 {
            background: white;
        }

        #radio4:checked~.navigation-auto .auto-btn4 {
            background: white;
        }
    </style>
</head>

<body>

    <!-- Image SLider Start -->

    <div class="slider">
        <div class="slides">
            <!-- radio Button Start -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- radio Button End -->
            <!-- slide image Start -->
            <div class="slide first ">
                <img src="Resources/images/gym01.jpeg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/gym02.jpeg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/gym03.jpeg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/gym04.jpeg" alt="">
            </div>
            <!-- slide image end -->

            <!-- automatic navigation start -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!-- automatic navigation end -->

            <!-- Manual Naavigatin start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- Manual Naavigatin end -->
        </div>
    </div>
    <!-- Image SLider End -->


    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById("radio" + counter).checked = true;
            counter ++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
</body>

</html>