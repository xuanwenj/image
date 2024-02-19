<?php
include "db_conn.php";
$sql = "SELECT * FROM images ORDER BY id DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Display Image</title>

    <!-- Because this is a simple html, so I put the style inside of it  -->
    <style>
        .showGallery {
            display: flex;
            gap: 20px;
        }
    </style>

</head>

<body>
    <div class="container">

        <a href="admin.php">&lsaquo; Upload Image</a>

        <div class="showGallery">

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $imageName = $row['name'];
                    echo '<div class="image-box">';

                    echo '<img src="upload/' . $imageName . '" style="width: 200px; height: auto;" />';

                    echo '</div>';
                }
            } else {
                echo '<p class="status error">Image(s) not found.</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>