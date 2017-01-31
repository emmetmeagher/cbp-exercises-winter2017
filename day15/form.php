<?php 
if (!empty($_POST)) {
//store stuff to database
     	     header('Location: form.php');

	echo 'adding product'. $_POST['product'] ;
        echo $_POST['color']){
}
     if(isset($_POST['really']) && $_POST['really'] == 'on') {
     	echo ', I mean it';
     	     }
     	//store stuff to database
     	     header('Location: form.php');

 ?>


<form action="" method="post">
	
Product: 
 <input type="text" name="product">
 <input type="submit" value="click me!">


Feedback 
<input type="text" name="feedback">
<input type="submit" name="click me!">

really: 
 <input type="checkbox" name="really">

color:
 <input type="radio" name="color" value="balck" id="color-black"><label for="color-black"> black</label>
 <input type="radio" name="color" value="white" id="color-white"><label for="color-white"> white</label>
  <input type="radio" name="color" value="red" id="color-red"><label for="color-red">red</label>
   <input type="radio" name="color" value="yellow" id="color-yellow"><label id="color-yellow">yellow</label>

Country:
<select name="country">
   <option> Czech Republic </option>
   <option> Banana Republic </option>
   <option> Kiwi Republic </option>
</select>
<hr>
note:


<input type="submit" value="click me!">

</form>