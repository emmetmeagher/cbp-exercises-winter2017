<?php

if(true)
{
	//this file WILL run
}

if(false)
{
	//this will NOT run
}

if(1==true)
{
	//this WILL run
}

if(1==1)
{
	//this WILL run
}

if(true==true)
{
	//this WILL run
}

if(true != false)
{
	//this WILL run
}


$height =155;
if($height > 180)
{
	echo 'tall';
}
elseif($height > 160)
{
	echo 'average';
}
else
 {
	echo 'small';
}

$color = 'red';
switch($color)
{
	case 'blue':
	//this will not run for 'red'
	break; //mandatory

	case 'white'
	case 'red'
	//this will run for 'red' and for 'white'
	break;

	case 'yellow'
	//this will not run for red 
	break;

	swith(My_OS)
	{

  case 'Windows' :
  echo 'Edge';
  break;

  case 'Linux' :
  echo 'Firefox';
  break;

  case 'OS X' :
  echo 'safari';
  break;

  default:
  echo 'Just Use Chrome'
  break;
   }

 
 
if($age>25
{}

if($employed)
{}

if($age<=18)
{}

if($age < 12 && $gender == 'female')
{}

if($age > =18 && !$employed) 
{}

if($age >=60 && $employed && $gender =='female') 
{}

if(($gender == 'male' && $age > 20 || (!$employed && $gender == 'female' && $age > 25))
{}

if(true) {
}
 
