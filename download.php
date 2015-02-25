<?php

session_start();
// Make sure an ID was passed
if (isset($_GET['id'])) {
    // Get the ID
    $id = intval($_GET['id']);

    // Make sure the ID is in fact a valid ID
    if ($id <= 0) {
        die('The ID is invalid!');
    } else {
        include 'connection.php';

        // Fetch the file information
        $query = "SELECT * FROM upload WHERE id = $id";
        $result = $mysqli->query($query);

        if ($result) {
            // Make sure the result is valid
            if ($result->num_rows == 1) {
                // Get the row
                $row = $result->fetch_assoc();
                if ($row['uid'] == $_SESSION['uid'] || $_SESSION['role'] == 'admin') {
                    $type = $row['type'];
                    $size = $row['size'];
                    $filename = $row['name'];
                    $data = $row['content'];

// Print headers

                    header("Content-Type: $type");
                    header("Content-Length: $size");
                    header("Content-Disposition: attachment; filename=\"$filename\"");

                    // Print data
                    echo $data;
                } else {
                    echo 'Not authorized to download this file.';
                }
            } else {
                echo 'Error! No file exists with that ID.';
            }

            // Free the mysqli resources
            $mysqli->free_result($result);
        } else {
            echo "Error! Query failed";
        }
    }
} else {
    echo 'Error! No ID was passed.';
}
?>