<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="styles/style_admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
            <div id="sideBar">
                <p id="home"> HOME </p>
            </div>

            <div id="mainArea" class="centered">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <!-- The multipart/form-data enctype is designed for forms that include binary data, 
            such as files (images, documents, etc.),
            because it breaks the form data into multiple parts or sections (known as MIME parts) 
            and sends each part separately. -->
                    <input type="file" name='my_image'>                  
                    Tag: <textarea id="multiline-text" name="tags" ></textarea>  
                    Album:<select name="album">
                    <?php
                    $result = $conn->query("SELECT * FROM album;");
                    $selectAlbum = 0;
                    if (isset($_REQUEST['album']))
                    $selectAlbum = $_REQUEST['album'];

                    foreach ($result as $row) {
                        ?>
                        <option value="<?= $row['id'] ?>" <?php
                          //This selects the current id 
                          if ($selectAlbum == $row['id']) {
                              echo " selected";
                          }
                          ?>>
                             <?= $row['name'] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            
                    <input type="submit" name="submit" value="Upload">
                    
                </form>
                <form action="displayimage.php" method ="POST" enctype="multipart/form-data">
                <input type="submit" name="retrieve" value="Show uploaded images">

                </form>
                
            </div>
    
    </main>
    <script src="scripts/script.js"></script>
</body>

</html>