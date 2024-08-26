<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .gallery {
            --g: 8px;
            /* the gap */

            display: grid;
            clip-path: inset(1px);
            /* to avoid visual glitchs */
        }

        .gallery>img {
            --_p: calc(-1*var(--g));
            grid-area: 1/1;
            width: 350px;
            /* control the size */
            aspect-ratio: 1;
            cursor: pointer;
            transition: .4s .1s;
        }

        .gallery>img:first-child {
            clip-path: polygon(0 0, calc(100% + var(--_p)) 0, 0 calc(100% + var(--_p)))
        }

        .gallery>img:last-child {
            clip-path: polygon(100% 100%, 100% calc(0% - var(--_p)), calc(0% - var(--_p)) 100%)
        }

        .gallery:hover>img:last-child,
        .gallery:hover>img:first-child:hover {
            --_p: calc(50% - var(--g));
        }

        .gallery:hover>img:first-child,
        .gallery:hover>img:first-child:hover+img {
            --_p: calc(-50% - var(--g));
        }
    </style>
</head>

<body>
    <div class="col-12 ">
        <div class="row">
            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center ">
                <span class=" hoverslideImages " id="membershipHoverText">Join with Memberships</span>
            </div>
            <div class="col-lg-4 col-12 d-flex justify-content-center">
                <div class="row">
                    <div class="gallery">
                        <img src="Resources/images/aboutImage/NewINdexNewTranformImage2.png" style="object-fit: cover;" id="MemebershipsHoverImage" alt="a wolf">
                        <img src="Resources/images/Events/FightNight/A7S09299.jpg" style="object-fit: cover;" id="EventsHoverImage" alt="a lioness">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center  ">
                <span class=" hoverslideImages " id="EventsHoverText">Ftness First Events</span>
            </div>
        </div>
    </div>
   
</body>

</html>