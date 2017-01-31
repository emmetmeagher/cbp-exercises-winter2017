<?php

require_once('functions.php');
require_once('my-functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()

$unique_id = 'tt0108052';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_name($unique_id); ?></title>
</head>
<body>

    <nav>
        <a href="list.php">A list of movies</a>
    </nav>

    <h1><?php echo get_name($unique_id); ?></h1>

    <div class="rating">
        Rating: <strong><?php echo get_rating($unique_id); ?></strong>
    </div>


</body>
</html>