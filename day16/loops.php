
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<ul>
<?php for($i = 0; $i < 5; $i++) : ?>
    <!--only untill 3 -->
	<?php if($i < 3) continue; ?>
    <!--only untill 3 -->
	<li>list item nr. <?php echo $i+1; ?></li>

<?php endfor; ?>
</ul>
<hr>

<ul>
    <?php for($i = 10; $i > 0; $i--) : ?>


	<?php if($i < 3) break; ?>

    <?php if($i == 7) continue; ?>

    <li>list item nr. <?php echo $i; ?></li>

<?php endfor; ?>


</ul>



</body>
</html>



