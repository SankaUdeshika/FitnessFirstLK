<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .c-heroImageGrid {
            position: relative;
            overflow: hidden;
            height: 50vw;
            background: black;
            margin-bottom: 60px;
        }


        .c-heroImageGrid .container2 {
            display: flex;
            align-items: flex-end;
            position: absolute;
            top: -20vw;
            left: -8vw;
            transform: rotateZ(45deg);
            height: 100vw;
            width: 107vw;

        }

        .c-heroImageGrid .container2 .column {
            overflow: hidden;
            position: relative;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(1) {
            border-right: 8px solid white;
            width: 25%;
            height: 66vw;
            transition: 0.3s ease-in-out;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(1):hover {
            /* opacity: 0.75; */
            filter: brightness(1.5);
            cursor: pointer;
            scale: 1.1;
            transition: 0.3s ease-in-out;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(1):before {
            position: absolute;
            top: 8.4vw;
            left: 8.1vw;
            background-repeat: no-repeat;
            background-size: cover;
            transform: rotateZ(-45deg);
            content: "";
            width: 37vw;
            height: 38vw;
            background-attachment: fixed;
            background-image: url(Resources/images/blackGymImages/3.jpg);
        }


        .c-heroImageGrid .container2 .column:nth-of-type(2) {
            display: flex;
            flex-direction: column-reverse;
            width: 75%;
            height: 109.1vw;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row {
            border-top: 8px solid #fff;
            transition: 0.3s ease-in-out;
        }


        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(1) {
            position: relative;
            overflow: hidden;
            height: 50vw;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(1):hover {
            filter: brightness(1.5);
            cursor: pointer;
            scale: 1.1;
            transition: 0.3s ease-in-out;
            z-index: 5;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(1):before {
            position: absolute;
            top: -10.1vw;
            left: -14.3vw;
            background-repeat: no-repeat;
            background-size: cover;
            transform: rotateZ(-45deg);
            content: "";
            width: 65vw;
            height: 39vw;
            background-attachment: fixed;
            background-image: url(Resources/images/blackGymImages/1.jpg);
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) {
            display: flex;
            height: 40.5vw;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(3) {
            border-top: none;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) {
            overflow: hidden;
            width: 30%;
            background-color: black;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text {
            width: 100%;
            height: 100%;
            overflow: visible;
            transform: rotateZ(-45deg);
            position: relative;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text h6 {
            position: absolute;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1.35vw;
            width: 20vw;
            top: 16vw;
            left: 7vw;
            line-height: 1.55vw;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text p {
            text-align: right;
            position: absolute;
            color: #fff;
            font-size: 0.9vw;
            width: 18vw;
            top: 23.5vw;
            left: -3.5vw;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2) {
            position: relative;
            width: 70%;
            border-left: 8px solid white;
            overflow: hidden;
            transition: 0.3s ease-in-out;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):hover {
            filter: brightness(1.5);
            cursor: pointer;
            scale: 1.1;
            transition: 0.3s ease-in-out;
            z-index: 5;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):before {
          
            position: absolute;
            top: -10.1vw;
            left: -14.3vw;
            background-repeat: no-repeat;
            background-size: cover;
            transform: rotateZ(-45deg);
            content: "";
            width: 65vw;
            height: 59vw;
            background-attachment: fixed;
            background-image: url(Resources/images/blackGymImages/6.jpg);
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(3) {
            position: relative;
            height: 18.6vw;
            overflow: hidden;
            transition: 0.3s ease-in-out;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(3):hover {
            filter: brightness(1.5);
            cursor: pointer;
            scale: 1.1;
            transition: 0.3s ease-in-out;
            z-index: 5;
        }

        .c-heroImageGrid .container2 .column:nth-of-type(2) .row:nth-of-type(3):before {
            position: absolute;
            top: 7.5vw;
            left: 25vw;
            width: 33vw;
            height: 27vw;
            background-repeat: no-repeat;
            background-size: cover;
            transform: rotateZ(-45deg);
            content: "";
            background-attachment: fixed;
            background-image: url(Resources/images/blackGymImages/5.jpg);
        }
    </style>
</head>

<body>
    <div class="c-heroImageGrid">
        <div class="container2">
            <div class="column"></div>
            <div class="column">
                <div class="row"></div>
                <div class="row ">
                    <div>
                        <div class="text">
                            <h6>
                                Find Your Fit with<br>
                                FITNESSS <SPAN style="color: red;">FIRST LK</SPAN>
                            </h6>
                            <p>
                                We are the original. The biggest, best, and fastest growing fitness organization in the world. Train different in 4+ locations around the Sri lanka - and counting. 
                            </p>
                        </div>
                    </div>
                    <div></div>
                </div>
                <div class="row"></div>
            </div>
        </div>
    </div>
</body>

</html>