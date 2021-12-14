<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="assets/css/index.css" rel="stylesheet" type="text/css">
        <link href="assets/css/addNsort.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="centertext">
            <?php
                include 'php/menu.php';
            ?>

            <h1>
                Add new pupil!
            </h1>

            <br>

            <h2>
                <form method="GET">
                    <div class="formElement">
                        <label id="inputNameLabel" for="inputName">
                            Name
                        </label>
                        <br>
                        <input type="text" id="inputName">
                    </div>
                    
                    <div class="formElement">
                        <label for="inputFavFood">
                            Favourite food
                        </label>
                        <br>
                        <input type="text" id="inputFavFood">
                    </div>

                    <br>

                    <div class="formElement">
                        <label for="inputFavActivity">
                            Favourite activity
                        </label>
                        <br>
                        <input type="text" id="inputFavActivity">
                    </div>

                    <div class="formElement">
                        <label for="inputBestTrait">
                            Best trait
                        </label>
                        <br>
                        <input type="text" id="inputBestTrait">
                    </div>
                    <br><br>

                    <button id="submitButton" type="submit">
                        Add pupil!
                    </button>
                </form>
            </h2>
        </div>
    </body>
</html>
<?php


