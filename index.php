<?php
include "db_conn.php";
$imagePath = "pic_in_index/";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Image Gallery</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <div id=outerdiv>
            <div id="topbar">
                <p id=logotext>
                    <?php echo '<img src="' . $imagePath . 'paw.png" alt="logo" width="30" height="30">' ?>
                    Animal<br>Gallery
                </p>
                <p id=catyear class="year"> Cat of the year</p>

                <form action="admin.php?thing=11" method="post">
                    <input id="upload" type="submit" value="Upload Images" />
                </form>
                <form action="search.php?thing=12" method="post">
                    <input id="search" type="submit" value="Search Images" />
                </form>
            </div>

            <div id="main_div">
                <div id="sidebar">
                    <ul>
                        <li class="category">Cats
                            <ol class="list">
                                <li id="british">British Shorthair </li>
                                <li id="maine">Maine Coon </li>
                            </ol>
                        </li>
                        <li class="category">Dogs
                            <ol class="list">
                                <li id="bichon">Bichon Frise</li>
                                <li id="golden">Golden Retriever</li>
                            </ol>
                        </li>
                        <li class="category">Rabits
                            <ol class="list">
                                <li id="dwarf">Netherland Dwarf</li>
                            </ol>
                        </li>
                        <li class="category">Foxes
                            <ol class="list">
                                <li id="vulpes">Vulpes</li>
                            </ol>
                        </li>
                    </ul>
                </div>


                <div id="first_div">
                    <div class="animalGallery">
                        <form id="catForm" action="cat.php?thing=11" method="post">

                            <?php echo '<input type="image" src="' . $imagePath . '11.jpg" alt="cats" width="450" height="300">' ?>
                        </form>
                    </div>
                    <div class="animalGallery">
                        <form id="dogForm" action="dog.php?thing=11" method="post">
                            <?php echo '<input type="image" src="' . $imagePath . '22.jpg" alt="dogs" width="450" height="300">' ?>
                        </form>
                    </div>
                    <div class="animalGallery">
                        <form id="rabitForm" action="rabit.php?thing=11" method="post">
                            <?php echo '<input type="image" src="' . $imagePath . '33.jpg" alt="rabits" width="450" height="300">' ?>
                        </form>
                    </div>

                    <div class="animalGallery">
                        <form id="foxForm" action="fox.php?thing=11" method="post">
                            <?php echo '<input type="image" src="' . $imagePath . '44.jpg" alt="foxes" width="450" height="300">' ?>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <script src="scripts/script.js"></script>
    </main>
</body>

</html>