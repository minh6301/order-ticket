<?php require'../admin/config/constants.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $query = "SELECT * FROM tbl_time";
        $result = $conn->query($query);

        while($row = $result->fetch_array()){
        echo '
                <label class="row_chair">
                <input type="radio" name="time" value="<?php echo '.$row.';?>">
                <span class="checkmark">
                    '.$row['time'].'
                </span>
            </label>
        ';
        }
    ?>
</body>
</html>