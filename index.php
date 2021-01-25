<?php

include_once "includes/includes.php";


?>

<html lang="de">
    <head>


        <title>SEPVE - Control Panel</title>

        <style>

            .main{
                padding: 2rem;
                margin: 2rem;

            }

        </style>

    </head>
    <body>

        <?php include_once "includes/navbar.php"; ?>


        <div class="main">
            <form action="#">
                <p class="range-field">

                    <label for="volume">Laustärke</label>
                    <input type="range" id="volume" min="0" max="100" step="1" />
                </p>
            </form>
        </div>



    </body>

</html>




