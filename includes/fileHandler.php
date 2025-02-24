    <?php
    // Read the JSON file
    $json_data = file_get_contents("rooms.json");
    $rebels = json_decode($json_data, true);
    ?>