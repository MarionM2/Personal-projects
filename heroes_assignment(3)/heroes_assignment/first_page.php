<?php
// going to use above code
include_once 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">Hero_id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Real Name</th>
                    <th scope="col">Short Bio</th>
                    <th scope="col">Long Bio</th>
                </tr>
            </thead> 

  <?php
// sql query to fetch all the data
// mysql_query will execute the query to fetch data
                $sql = "SELECT * from heroes_t";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $hero_picture = $row['hero_picture'];
                        $name = $row['name'];
                        $real_name = $row['real_name'];
                        $short_bio = $row['short_bio'];
                        $long_bio = $row['long_bio'];
                        echo '<tr>
      <th scope="row">' . $hero_picture . '</th>
      <td>' . $name . '</td>
      <td>' . $real_name . '</td>
      <td>' . $short_bio . '</td>
      <td>' . $long_bio . '</td>
    </tr>';
                    }
                }

?>
</body>
</html>