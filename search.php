<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="styles/style_admin.css" rel="stylesheet" type="text/css" />
    <style>
        #outerdiv {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }
    </style>
</head>

<body>

    <main>
        <p id="home"> HOME </p>
        <div id="outerdiv">

            <form action="" method="post">
                <label for="gsearch"></label>

                Album:
                <select name="select" id="selectAlbum">
                    <?php
                    $result = $conn->query("SELECT * FROM album;");
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                    ?>
                </select>
                <input type="hidden" name="selectedAlbum" value="<?= $selectAlbum ?>">
                <input id="searchsubmit" type="submit" name="searchsubmit" value="Show images" />
            </form>

            </form>
            <form action="" method="post">
                <input type="text" id="tag" name="tag" placeholder="eg. fox1/any word" required>
                <input id="tagsubmit" type="submit" name="tagSubmit" value="Show images by tags" />

            </form>

            <?php
            if (isset($_POST['searchsubmit'])) {
                $selectedAlbum = $_POST['select'];
                $imagesResult = $conn->query("SELECT name FROM images WHERE album = '$selectedAlbum'");

                // Display images below the form
                if( $imagesResult->num_rows > 0) {
                echo "<div id='imageContainer'>";
                while ($image = $imagesResult->fetch_assoc()) {
                    echo '<img src=" upload/' . $image['name'] . '"style="width: 200px; height: auto;" alt=""/>';
                }
                echo "</div>";
            }else{
                echo "No images found in album '$selectedAlbum' ";
            }
        }
            ?>
            <?php
            if (isset($_POST['tagSubmit'])) {
                $enteredTag = $_POST['tag'];

                $imagesResult = $conn->query("SELECT * FROM images WHERE tags = '$enteredTag'");
                if($imagesResult->num_rows > 0){
                while ($image = $imagesResult->fetch_assoc()) {
                    // Display the images or perform other operations
                    echo '<img src=" upload/' . $image['name'] . '"style="width: 200px; height: auto;" alt=""/>';

                }
            }else{
                echo "No images found with the tag: '$enteredTag'";
            }
            }
            ?>

        </div>
    </main>
    <script src="scripts/script_search.js"></script>
</body>


</html>