<?php
 include "db_conn.php";

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  

    $image_name = $_FILES['my_image']['name'];
    $image_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $imageData = file_get_contents($tmp_name);

    $error = $_FILES['my_image']['error'];

    $album = $_POST['album'];
    $tags = $_POST['tags'];
    if ($error === 0) {
        if ($image_size > 125000) {
            $em = "Sorry, your file is too large.";
            echo "<script>alert('" . $em . "');";
            echo 'window.location.href = "admin.php";</script>';
        } else {
            $image_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_ex_lc = strtolower($image_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($image_ex_lc, $allowed_exs)) {
                $new_image_name = uniqid("IMG-", true) . '.' . $image_ex_lc; // format the name of images uploaded
                $image_upload_path = 'upload/' . $new_image_name; //the target folder
                move_uploaded_file($tmp_name, $image_upload_path); //move the chosen image to the target folder
                // put the uploaded file to database
                $query = $conn->prepare("INSERT INTO images(name, tags, album) VALUES (?,?,?);");
                $query->bind_param("ssi", $new_image_name, $tags, $album);
                $query->execute();

                echo '<script>alert("The image is successfully uploaded!");';
                echo 'window.location.href = "admin.php";</script>';

            } else {
                echo '<script>alert("Sorry, you can not uplad files of this type.");';
                echo 'window.location.href = "admin.php";</script>';

            }
        }
    } else {
        echo '<script>alert("unknown error occurred!");';
        echo 'window.location.href = "admin.php";</script>';
    }
} else {
    echo 'window.location.href = "admin.php";</script>';

}
?>