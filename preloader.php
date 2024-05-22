<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | fitness</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {
            color: var(--color);
            font-size: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .right {
            text-align: center;
            font-size: medium;
            color: grey;
            width: 100%;
        }

        .stack {
            display: grid;
            grid-template-columns: 1fr;


        }

        .stack span {
            display: flex;
            justify-content: center;
            font-weight: bold;
            grid-row-start: 1;
            grid-column-start: 1;
            font-size: 2rem;
            --stack-height: calc(100% / var(--stacks) - 1px);
            --inverse-index: calc(calc(var(--stacks) - 1) - var(--index));
            --clip-top: calc(var(--stack-height) * var(--index));
            --clip-bottom: calc(var(--stack-height) * var(--inverse-index));
            clip-path: inset(var(--clip-top) 0 var(--clip-bottom) 0);
            animation: stack 0.5s cubic-bezier(.46, .29, 0, 1.24) 1 backwards calc(var(--index) * 120ms), glitch 2s ease infinite 2s alternate-reverse;
        }

        .stack span:nth-child(odd) {
            --glitch-translate: 8px;
        }

        .stack span:nth-child(even) {
            --glitch-translate: -8px;
        }

        @keyframes stack {
            0% {
                opacity: 0;
                transform: translateX(-50%);
                text-shadow: -2px 3px 0 red, 2px -3px 0 blue;
            }

            ;

            60% {
                opacity: 0.5;
                transform: translateX(50%);
            }

            80% {
                transform: none;
                opacity: 1;
                text-shadow: 2px -3px 0 red, -2px 3px 0 blue;
            }

            100% {
                text-shadow: none;
            }
        }

        @keyframes glitch {
            0% {
                text-shadow: -2px 3px 0 red, 2px -3px 0 blue;
                transform: translate(var(--glitch-translate));
            }

            2% {
                text-shadow: 2px -3px 0 red, -2px 3px 0 blue;
            }

            4%,
            100% {
                text-shadow: none;
                transform: none;
            }
        }
    </style>
</head>

<!-- <body>

    <div class="col-12 preloaderCover PrelaoderText1Animations ">
        <span class="PrelaoderText1Animations    fs-2">FITNESS  </span> <span class="PrelaoderText2Animations fs-2"> &nbsp; FIRST LK</span>
    </div>

</body> -->

<body class="bg-black">
    <div class="col-12 preloaderCover">
        <div class="container">
            <div class="stack" style="--stacks: 3;">
                <span style="--index: 0; color: white;"><SPAN style="color: red;">FITNESS &nbsp; </SPAN> FIRST&nbsp;LK</span>
                <span style="--index: 1; color: white;"><SPAN style="color: red;">FITNESS &nbsp; </SPAN> FIRST&nbsp;LK</span>
                <span style="--index: 2; color: white;"><SPAN style="color: red;">FITNESS &nbsp; </SPAN> FIRST&nbsp;LK</span>
            </div>
        </div>
    </div>
</body>

</html>