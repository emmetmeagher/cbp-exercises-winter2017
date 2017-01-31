<?php 
$movies = array (
 
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'

	);

?>

<?php 
$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ol>
	<?php foreach($movies as $value ){echo "<li> $value <br> </li>";}?>
	
</ol>
<?php var_dump(count($movies)); ?>
<ol>
	
	<?php  for($i = 0; $i < count($movies); $i++) : ?>
      
        <li><?php echo $movies[$i]; ?> </li>

    <?php endfor ?>
</ol>

<!--alphabetic order -->

<ol>
	
	<?php sort($movies); ?>
	<?php $nr_of_movies = count($movies); // 10 ?>
	<?php for($i = 0; $i< $nr_of_movies; $i++) : ?>
    <?php endfor; ?>
		
</ol>

<?php 
$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);
?>
 
<h2>Exercise four booooooooiiiiiiiiihhhhhh</h2>

<?php
     foreach ($movie_names as $key => $value)  {
     	echo $value;
     	echo $movie_ratings[$key];
              
     }
?>


<?php asort(movie_ratings); ?>
<ol>

   <?php foreach($movie_ratings as unique_id => $rating) : ?> 
   	<li>
   		
     <?php echo $movie_names[$unique_id]; ?>
     <?php echo $rating; ?>

   	</li>
   <?php endfor; ?>

</ol>

</body>
</html>