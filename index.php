<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title><?php echo "Starter Template for Course"; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <?php include("navbar.php"); ?>
    <!-- <div class="container mt-3"> -->
      <h2>Example of Jumbotron</h2>
      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Jumbotron Example</h1> 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
      </div>
    <!-- </div> -->
    <div class="row">
      <?php 
        $firstname = "John";
        $number = 45.76;
      ?>
      <div class="col-md-6">
        <?php echo $firstname; ?>
        <?php echo $number; ?>
        <br>
        <h1>
          <?php
            echo $firstname . " " . $firstname;
          ?>
        </h1>
      </div>
    </div>
    <div class="row">

      <?php
        //comparison
        $num_3 = 41;
        $num_4 = 5;

        var_dump($num_3 < $num_4);
        var_dump($num_3 > $num_4);
        var_dump($num_3 % $num_4);
        var_dump($num_3 == $num_4);
      ?>
    </div>
    <div class="row">
      <?php
        // escape characters
        echo 'And then she said: "YOU\'RE Ugly"';
        // echo 'And then she said: "YOU'RE Ugily"';
      ?>
    </div>
    <div class="row">
      <?php
        // if statment

        $firstname = "jenny";

        if ($firstname == "jenny") {
          echo "Hello " . $firstname;
        } else {
          echo "Hold up Beach!";
        }

      ?>
    </div>
    <div class="row">
      <?php
        // Arrays Numeric

        $first_names = array("John", "Steve", "Mary");
        $last_names = array("DOe", "Mcnugget", "WHat");

        echo $first_names[1] . " " . $last_names[2];

      ?>
    </div>
    <div class="row">
      <?php
        // Arrays Associative

        $person = 'John';

        $fav_pizza = array(
          "John" => "Peperoni",
          "Steve" => "Cheese",
          "Mary" => "Mushroom"
        );

        echo $person . " Loves " . $fav_pizza[$person] . " Pizza"; 

      ?>
    </div>
    <div class="row">
      <?php
        // align index and count the selected index of the array
        $people = array("John", "Steve", "Mary", "Dwight", "Hailey", "Becca");

        // because array indexing begins with 0 if selecting the 4th name
        // you would actually be selecting array index 3

        // $people[ name selected - back one index ]
        echo $people[4 - 1];

      ?>
    </div>
    <div class="row">
      <?php
        // while loop

        $counter = 0;
        $num_1 = 10;

        while ($counter <= $num_1) {
          echo "The count is: $counter</br>";
          $counter++;
        }
        ///////////////////////////

        $counter = 0; 

        do {
          echo "do counter is: $counter</br>";
          $counter++;
        } while ($counter <= $num_1);
        
      ?>
    </div>
    <div class="row">
      <?php
        // for loop
        for ($count = 0; $count <= 10; $count++) { 
          echo "For loop inc: $count</br>";
        }
        
      ?>
    </div>
    <div class="row">
      <?php
        // forEach loop
        $people = array("John", "Steve", "Mary", "Dwight", "Hailey", "Becca");

        foreach ($people as $person) {
          echo "$person</br>";
        }
        
      ?>
    </div>
    <div class="row">
      <?php
        // function
        function helloThere($fname) {
          // retiurn will be needed to reuse the function
          // echo won't allow the reuse
          return "Hello There $fname";
        }
        echo helloThere('DayDay', 'Johnson');
      ?>
    </div>
    <div class="row row-1">
      <?php
        // function
        function numbSet($numA, $numB) {
          // echo before return in same function will calculate too. 
          // return before echo in same function will break
          echo $numA + $numB . "<br>";
          return $numA + $numB;
        }

        $newVar = numbSet(42, 4.7);

        echo $newVar * 3;

      ?>
    </div>
    <div class="row row-2">
      <!-- this is calling function from row-2 -->
      <?php
        $newVar = numbSet(3, 5.7);

        echo $newVar * 6;

      ?>
    </div>
    <div class="row">
      <?php
        // random
          echo rand(0, 100) . "<br>";
          echo mt_rand(0, 100);

      ?>
    </div>
    <div class="row">
      <?php
        // Date function
        echo date('Y') . "<br>"; // full year
        echo date('y') . "<br>"; // last 2 digita

        echo date('l D W') . "<br>"; // 

        $tday = date('l') . "<br>";

        echo "Today is $tday"; 


      ?>
    </div>
    <div class="row">
      <?php
        // string Manipulation
        $strng = "Dwight is a coding smasher";

        $rStrng = "sandwich";

        echo strrev(str_replace("coding", $rStrng, $strng));

      ?>
    </div>
    <div class="row">
      <?php include("variables.php"); ?>
      <?php
        // include
        echo "The best company " . $company;

      ?>
    </div>
    <div class="row">
      <?php
        // include
        echo "The best company " . $company;

      ?>
    </div>
    
    
    
    
    
    
    <?php include("footer.php"); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>