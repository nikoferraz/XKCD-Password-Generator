<?php 
  $words = array(); 
  $index = 0;
  $connector="";
  $numWords="";
  $appendSymbol="";
  $append="";
  //Store each line of the dictionary.txt file containing 58,111 words in the $word array
  $wordFile = fopen("dictionary.txt", "r") or die("Cannot open file!");
  while(!feof($wordFile)) 
  { //gets each line of dictionary.txt
    $words[$index] = fgets($wordFile);
    //removes the extra space -- automatically generated through fgets -- at the end of each line 
    $words[$index] = rtrim($words[$index], "\r\n");
    $index++; 
  }
  fclose($wordFile);
  //if connector is checked it assigns the user input connector between each word of the password 
  if(isset($_GET["connector"]))
  {
    $connector=$_GET["connector"]; 
  }
  //$numWords defaults to 4, else it will take the value from user input 
  if(isset($_GET["words"]))
  {
      $numWords=$_GET["words"];
  }
  //$result will store the value later to be assigned to $password 
  $result=""; 
  //$lastWord is appended to result after for loop to avoid a connector at the end of the password
  $lastWord=$words[rand(0,58111)]; 
  for($i=1;$i<$numWords; $i++)
  { 
    //if camelCase is checked 
    if(isset($_GET["camelCase"]))
    {
      //Acesses a random index value of $word and returns string with first letter uppercase
      $temp=ucwords($words[rand(0,58111)]);
      $result=$result.$temp.$connector; 
    }
    else
    {
      $temp=$words[rand(0,58111)];
      $result=$result.$temp.$connector; 
    } 
  }

  if(isset($_GET["camelCase"]))
  {
    $lastWord=ucwords($words[rand(0,58111)]);
  }
  //$lastWord is used to prevent a "loose" connector appended to the end of the password
  $result=$result.$lastWord;
  //A random number between 0-9 is assigned to $appendNumber
  if(isset($_GET["appendNumber"]))
  {
    $append=rand(0,9);
  }
  //A random symbol -- between ASCII 33 and 47 -- is assigned to $appendSymbol
  if(isset($_GET["appendSymbol"]))
  {
    $appendSymbol=chr(rand(33,47));
  }
  //The value of $password is returned through the echo command directly on the index.html file 
  $password=$result.$append.$appendSymbol;  
?>

