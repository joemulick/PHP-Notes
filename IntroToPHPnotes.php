<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
  </head>
  <body>

    <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <div class="header"><h1>
      <?php
      $welcome = "Let's get started with PHP!";
      echo $welcome;
      ?>
    </h1></div>
    <p><strong>Generate a list:</strong>
      <?php

      for ($number = 1; $number <= 10; $number++) {
        if ($number <= 9) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
      }; 

      ?>
    </p>
    <p><strong>Things you can do:</strong>
      <?php

        $things = array("Talk to databases",
        "Send cookies", "Evaluate form data",
        "Build dynamic webpages");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        
        unset($thing);

      ?>
    </p>
    <p><strong>This jumbled sentence will change every time you click Submit!<strong></p>
    <p>
      <?php

        $words = array("the ", "quick ", "brown ", "fox ",
        "jumped ", "over ", "the ", "lazy ", "dog ");
        shuffle($words);
        foreach ($words as $word) {
            echo $word;
        };
        
        unset($word);

      ?>
    </p>

////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
        <!--    Switch Statements    --> 
        <!--    Switch Statements    --> 


<!--       Example        --> 
        <?php
    switch (2) {
        case 0:
            echo 'The value is 0';
            break;
        case 1:
            echo 'The value is 1';
            break;
        case 2:
            echo 'The value is 2';
            break;
        default:
            echo "The value isn't 0, 1 or 2";
    }
    ?>

<!--       Example        --> 

        <?php
    $fruit = "Apple";
    
    switch ($fruit) {
        case 'Apple':
            echo "Yummy.";
            break;
    }
    
    ?>


      <!--         Arrays           --> 
      <!--         Arrays           -->


<!--       Example        --> 
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        $languages[3] = "Reactjs";
        
        echo $languages[3];


        
      ?>


<!--       Example        --> 
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        // Write the code to remove Python here!
        unset($languages[3]);
        
        
        // Write your code above this line. Don't
        // worry about the code below just yet; we're
        // using it to print the new array out for you!
        
        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>



      <!--         Loops           --> 
      <!--         Loops           -->
      <!--         Loops           -->


<!--       Example        --> 

        <?php
      for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
        echo "<p>$leap</p>";
      }
    ?>

<!--  OUTPUT

      2004

      2008

      2012

      2016

      2020

      2024

      2028

      2032

      2036

      2040

      2044

      2048     -->



<!--       Example        --> 

<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
// echoes 0123456789

for ($i = 0; $i < 11; $i = $i + 5) {
    echo $i;
}
// echoes 0510
?>    



<!--       Example For Each        --> 

        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>

        <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        foreach($yardlines as $yardline){
            echo "<p>$yardline</p>";    
        };
        
        // Write your foreach loop above this line
        echo "touchdown!";
      ?>

<!--       Example Loops in Loops        --> 


  <p>We are going to flip a coin until we get three heads in a row!</p>
<?php
  $headCount = 0;
  $flipCount = 0;
  while ($headCount < 3) {
    $flip = rand(0,1);
    $flipCount ++;
    if ($flip){
      $headCount ++;
      echo "<div class=\"coin\">H</div>";
    }
    else {
      $headCount = 0;
      echo "<div class=\"coin\">T</div>";
    }
  }
  echo "<p>It took {$flipCount} flips!</p>";
?>

<!--       Example While Loop       -->  

<?php
  $loopCond = true;
  while ($loopCond){
    //Echo your message that the loop is running below
    echo "<p>The loop is running.</p>";
    $loopCond = false;
  }
  echo "<p>And now it's done.</p>";
?> 

<!--       Example While Loop 2       --> 

<?php
    
    $loopCount = 0;
    
    while($loopCount < 5){
        echo "<p>The current count interation is: {$loopCount}</p>";
        $loopCount++;        
    }
    
?>

<!--       Do While Example        --> 

<?php
  $flipCount = 0;
  do {
    $flip = rand(0,1);
    $flipCount ++;
    if ($flip){
      echo "<div class=\"coin\">H</div>";
    }
    else {
      echo "<div class=\"coin\">T</div>";
    }
  } while ($flip);
  $verb = "were";
  $last = "flips";
  if ($flipCount == 1) {
    $verb = "was";
    $last = "flip";
  }
  echo "<p>There {$verb} {$flipCount} {$last}!</p>";
?>

////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////

  </body>
</html>


