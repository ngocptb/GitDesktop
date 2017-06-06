<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VARIABLE</title>
    <style type="text/css">
        .bold {
            font-weight: bolder;
            font-size: 200% ;
            font-style: italic;
        }
        p.fontArial {
            font-family: Arial, Helvetica, sans-serif;
        }

        p.fontCourier {
            font-family: "Courier New", Courier, monospace;
        }
    </style>
</head>
<body>
<pre>
<h1> Basic html files</h1>
<br>
<img src="mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
<p>Even with <em> Some</em>decoration it's still not very exciting.
    <br>
</p>
<?php
variable:
$year =2016;
// test quotation
$firstname ='thanh';
$lastname = "pham";
$name1= '$firstname $lastname';
$name2= "$firstname $lastname";
echo " firstname use echo";
echo"<br>";
echo $firstname;
echo"<br>";
echo " lastname use echo";
echo"<br>";
echo $lastname;
print"<h1>Double quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>";
print'<h1>Single quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>';
echo"<br>";
echo "$year <br> " ;
echo "What next";
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo " Hello world";
//print"class=\"fontArial\">font Arial";
print" sentence of text !";
//print_r($_SERVER);
print "<span class=\"bold\">Hello,guy!</span>";
print_r($_SERVER);


?>
</pre>
<p class="fontArial">font Arial</p>
<p class="fontCourier">font Courier</p>
</body>
</html>