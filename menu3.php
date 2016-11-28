
<!DOCTYPE html>
<html>
<title>DaEunTeam UI</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
	
  

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large">
    <div class="w3-col s3">
      <a href="#" class="w3-btn-block w3-light-grey">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-btn-block w3-light-grey">Plans</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-btn-block w3-light-grey">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-btn-block w3-light-grey">Contact</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>DaEun && Hanul && ChangHyeun</b></h1>
    <p>Cafe Managment Project</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="./coffee2.jpg" style="width:100%">
      </div>
    <div class="w3-display-container mySlides">
      <img src="./coffee2.jpg" style="width:100%">
      
    </div>
    <div class="w3-display-container mySlides">
      <img src="./coffee2.jpg" style="width:100%">
      
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding-8 w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>
	  
	  <!-- form -->
<script language="javascript">

function updateAll(){
var n1 = document.getElementById("coffee1").value;
var n2 = document.getElementById("coffee2").value;
var n3 = document.getElementById("coffee3").value;
var n4 = document.getElementById("coffee4").value;
var n5 = document.getElementById("coffee5").value;
var n6 = document.getElementById("coffee6").value;
var n7 = document.getElementById("coffee7").value;
var n8 = document.getElementById("coffee8").value;
var n9 = document.getElementById("coffee9").value;
var n10 = document.getElementById("coffee10").value;
var n11 = document.getElementById("coffee11").value;
var n12 = document.getElementById("coffee12").value;
var n13 = document.getElementById("coffee13").value;
	
 var p1 = 1* n1;
 var p2 = 2* n2;
 var p3 = 3* n3;
 var p4 = 4* n4;
	var p5 = 5* n5;
	var p6 = 6* n6;
	var p7 = 7* n7;
	var p8 = 8* n8;
	var p9 = 9* n9;
	var p10 = 10* n10;
	var p11 = 11* n11;
	var p12 = 12* n12;
	var p13 = 13* n13;
	
	
 document.getElementById("coffee1Total").value = p1;
 document.getElementById("coffee2Total").value = p2;
 document.getElementById("coffee3Total").value = p3;
	document.getElementById("coffee4Total").value = p4;
	document.getElementById("coffee5Total").value = p5;
	document.getElementById("coffee6Total").value = p6;
	document.getElementById("coffee7Total").value = p7;
	document.getElementById("coffee8Total").value = p8;
	document.getElementById("coffee9Total").value = p9;
	document.getElementById("coffee10Total").value = p10;
	document.getElementById("coffee11Total").value = p11;
	document.getElementById("coffee12Total").value = p12;
	document.getElementById("coffee13Total").value = p13;
	
    
 // 수량이 들어갈 곳의 id인 totalNumber에 n1~n3 까지의 합을 계산해서 넣어줍니다.
 // 문자열로 인식해서 정수형으로 바꿔줬습니다.
 // 원래소스 : 1 + 2 + 3 = 123 --> 수정소스 : 1 + 2 + 3 = 6   
	
 var totalNumber = parseInt(n1) + parseInt(n2) + parseInt(n3)+parseInt(n4)+parseInt(n5)+parseInt(n6)+parseInt(n7)+parseInt(n8)+parseInt(n9)+parseInt(n10)+parseInt(n11)+parseInt(n12)+parseInt(n13);
 document.getElementById("totalNumber").value = totalNumber;
    
 var totalPrice = p1 + p2 + p3+ p4+ p5+ p6+ p7+ p8+ p9+ p10+ p11+ p12+ p13;
 document.getElementById("totalPrice").value = totalPrice;
 }

</script>

<?php
  $coffee1Err = "";
$coffee1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["coffee1"])) {
    $coffee1Err = "coffee1 is required";
  } 
  else {
    $coffee1 = test_input($_POST["coffee1"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/[1-9]/',$coffee1)) {
      $coffee1Err = "Only number and white space allowed"; 
    }
  }


  if (empty($_POST["coffee2"])) {
    $coffee2Err = "coffee2 is required";
  } else {
    $coffee2 = test_input($_POST["coffee2"]);
    // check if coffee2 address is well-formed
    if (!filter_var($coffee2, FILTER_VALIDATE_EMAIL)) {
      $coffee2Err = "Invalid coffee2 format"; 
    }
  }

  if (empty($_POST["coffee3"])) {
    $coffee3Err = "coffee3 is required";
  } else {
    $coffee3 = test_input($_POST["coffee3"]);
    // check if coffee3 address is well-formed
    if (!filter_var($coffee3, FILTER_VALIDATE_EMAIL)) {
      $ccoffee3Err = "Invalid coffee3 format"; 
    }
  }
  if (empty($_POST["coffee4"])) {
    $coffee4Err = "coffee4 is required";
  } else {
    $coffee4 = test_input($_POST["coffee4"]);
    // check if coffee4 address is well-formed
    if (!filter_var($coffee4, FILTER_VALIDATE_EMAIL)) {
      $ccoffee4Err = "Invalid coffee4 format"; 
    }
  }
  if (empty($_POST["coffee5"])) {
    $coffee5Err = "coffee5 is required";
  } else {
    $coffee5 = test_input($_POST["coffee5"]);
    // check if coffee5 address is well-formed
    if (!filter_var($coffee5, FILTER_VALIDATE_EMAIL)) {
      $coffee5Err = "Invalid coffee5 format"; 
    }
  }
  if (empty($_POST["coffee6"])) {
    $coffee6Err = "coffee6 is required";
  } else {
    $coffee6 = test_input($_POST["coffee6"]);
    // check if coffee6 address is well-formed
    if (!filter_var($coffee6, FILTER_VALIDATE_EMAIL)) {
      $coffee6Err = "Invalid coffee6 format"; 
    }
  }
  if (empty($_POST["coffee7"])) {
    $coffee7Err = "coffee7 is required";
  } else {
    $coffee7 = test_input($_POST["coffee7"]);
    // check if coffee7 address is well-formed
    if (!filter_var($coffee7, FILTER_VALIDATE_EMAIL)) {
      $coffee7Err = "Invalid coffee7 format"; 
    }
  }
  if (empty($_POST["coffee8"])) {
    $coffee8Err = "coffee8 is required";
  } else {
    $coffee8 = test_input($_POST["coffee8"]);
    // check if coffee8 address is well-formed
    if (!filter_var($coffee8, FILTER_VALIDATE_EMAIL)) {
      $coffee8Err = "Invalid coffee8 format"; 
    }
  }
  if (empty($_POST["coffee9"])) {
    $coffee9Err = "coffee9 is required";
  } else {
    $coffee9 = test_input($_POST["coffee9"]);
    // check if coffee9 address is well-formed
    if (!filter_var($coffee9, FILTER_VALIDATE_EMAIL)) {
      $coffee9Err = "Invalid coffee9 format"; 
    }
  }
  if (empty($_POST["coffee10"])) {
    $coffee10Err = "coffee10 is required";
  } else {
    $coffee10 = test_input($_POST["coffee10"]);
    // check if coffee10 address is well-formed
    if (!filter_var($coffee10, FILTER_VALIDATE_EMAIL)) {
      $coffee10Err = "Invalid coffee10 format"; 
    }
  }
  if (empty($_POST["coffee11"])) {
    $coffee11Err = "coffee11 is required";
  } else {
    $coffee11 = test_input($_POST["coffee11"]);
    // check if coffee11 address is well-formed
    if (!filter_var($coffee11, FILTER_VALIDATE_EMAIL)) {
      $coffee11Err = "Invalid coffee11 format"; 
    }
  }
  if (empty($_POST["coffee12"])) {
    $coffee12Err = "coffee12 is required";
  } else {
    $coffee12 = test_input($_POST["coffee12"]);
    // check if coffee12 address is well-formed
    if (!filter_var($coffee12, FILTER_VALIDATE_EMAIL)) {
      $coffee12Err = "Invalid coffee12 format"; 
    }
  }
  if (empty($_POST["coffee13"])) {
    $coffee13Err = "coffee13 is required";
  } else {
    $coffee13 = test_input($_POST["coffee13"]);
    // check if coffee13 address is well-formed
    if (!filter_var($coffee13, FILTER_VALIDATE_EMAIL)) {
      $coffee13Err = "Invalid coffee13 format"; 
    }
  }



}



  function test_input($data) {
    $data = htmlspecialchars($data);
    return $data;
}

  ?>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32"><span class ="error">Coffee</span></li>
		  
		  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
       
			 
        <li class="w3-padding-16" >
			<b> Espresso </b> <input name="coffee1" type="text" size="4" value="<?php echo 0; echo $coffee1;?>" 
 onclick="this.select();"/>

				<br>1 second<br>  
        <input id="coffee1Total" type="text" size="6" value="0"/><br>
        </li>
		 
		  
        <li class="w3-padding-16">
			<b> Americano</b> 
				<input name="coffee2" type="text" size="2" value="0<?php echo $coffee2;?>"
 onclick="this.select();"/>
				<br> 2 seconds<br> <input id="coffee2Total" type="text" size="6" value="0"/>
			
			</li>
		  
        <li class="w3-padding-16"> 
			<b> Cafe Latte</b>
				<input id="coffee3" type="text" size="2" value="0 <?php echo $coffee3;?>"
 onclick="this.select();"/>
				<br>3 seconds<br> <input id="coffee3Total" type="text" size="6" value="0"/>
			</li>
			  
        <li class="w3-padding-16">
			<b> Cappuccino</b>
			<input id="coffee4" type="text" size="2" value="0 <?php echo $coffee4;?>"
 onclick="this.select();"/>
			<br>4 seconds<br> <input id="coffee4Total" type="text" size="6" value="0"/></li>
			  
		   <li class="w3-padding-16">
			   <b> Cafe Mocca</b>
			   <input id="coffee5" type="text" size="2" value="0 <?php echo $coffee5;?>"
 onclick="this.select();"/>
			   <br>5 seconds<br> <input id="coffee5Total" type="text" size="6" value="0"/></li>
         <br>
       <input type="submit" name="submit" value="Submit">
			  </form>
      </ul>
    </div>
	  

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Non-Coffee</li>
		  
		   <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <li class="w3-padding-16">
			<b> Frappuccino </b> <input id="coffee6" type="text" size="4" value="<?php echo 0; echo $coffee6;?>"
 onclick="this.select();"/>
				<br>6 second<br>  <input id="coffee6Total" type="text" size="6" value="0"/>
		  </li>


        <li class="w3-padding-16"><b> JavaChip Frappuccino </b> <input id="coffee7" type="text" size="4" value="<?php echo 0; echo $coffee7;?>"
 onclick="this.select();"/>
				<br>7 second<br>  <input id="coffee7Total" type="text" size="6" value="0"/>
		  </li>
        <li class="w3-padding-16"><b> Mint Choco </b> <input id="coffee8" type="text" size="4" value="<?php echo 0; echo $coffee8;?>"
 onclick="this.select();"/>
				<br>8 second<br>  <input id="coffee8Total" type="text" size="6" value="0"/>
		  </li>

        <li class="w3-padding-16"><b> Cocoa </b> <input id="coffee9" type="text" size="4" value="<?php echo 0; echo $coffee9;?>"
 onclick="this.select();"/>
				<br>9 second<br>  <input id="coffee9Total" type="text" size="6" value="0"/>
		  </li>
			 
		  
		  </form>
        
      </ul>
    </div>
			   

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32"> Etc </li>
		  
		  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <li class="w3-padding-16"><b> Orange Juice </b> <input id="coffee10" type="text" size="4" value="<?php echo 0; echo $coffee10;?>"
 onclick="this.select();"/>
				<br>10 second<br>  <input id="coffee10Total" type="text" size="6" value="0"/>
		  </li>
        <li class="w3-padding-16"><b> Grapefruit Juice </b> <input id="coffee11" type="text" size="4" value="<?php echo 0; echo $coffee11;?>"
 onclick="this.select();"/>
				<br>11 second<br>  <input id="coffee11Total" type="text" size="6" value="0"/>
		  </li>
        <li class="w3-padding-16"><b> Lemon Ade </b> <input id="coffee12" type="text" size="4" value="<?php echo 0; echo $coffee12;?>"
 onclick="this.select();"/>
				<br>12 second<br>  <input id="coffee12Total" type="text" size="6" value="0"/></li>
        <li class="w3-padding-16"><b> Strawberry Ade </b> <input id="coffee13" type="text" size="4" value="<?php echo 0; echo $coffee13;?>"
 onclick="this.select();"/>
				<br>13 second<br>  <input id="coffee13Total" type="text" size="6" value="0"/></li>
        <li class="w3-padding-16">
          <h3 class="w3-wide"><a type="button" value="합계 계산 버튼" onclick="updateAll()" > Total Time</a></h3>
			<input id="totalNumber" type="text" size="4" value="  수량"/>
			<br>
			<input id="totalPrice" type="text" size="4" value="  합계"/>
			<br><br>
			<input type="reset" value="초기화"><br>
      <input type="submit">
        </li>

			  </form>


		  <li class="w3-light-grey w3-padding-24">
          <button class="w3-btn w3-green w3-padding-large" type="submit">Submit</button>
        </li>
		  
		  
      </ul>
    </div>

			  </div>
		  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
		<br><br> 
		<?php
echo "<h2>Your Input:</h2>";
        echo $coffee1;
        echo "<br>";
        echo $coffee2;
        echo "<br>";
        echo $coffee3;
        echo "<br>";
        echo $coffee4;
        echo "<br>";
        echo $coffee5;
        echo "<br>";
        echo $coffee6;
        echo "<br>";
        echo $coffee7;
        echo "<br>";
        echo $coffee8;
        echo "<br>";
        echo $coffee9;
        echo "<br>";
        echo $coffee10;
        echo "<br>";
        echo $coffee11;
        echo "<br>";
        echo $coffee12;
        echo "<br>";
        echo $coffee13;
        echo "<br>";
        
        
        ?>

    </div>
	  

<?php
$myfile = fopen("text.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("text.txt"));
fclose($myfile);

$myfile = fopen("text.txt", "w+") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
   
	</div>

	

	
	<!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="form.asp" target="_blank">
    <div class="w3-group">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-group">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-group">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-group">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-btn w3-btn-block w3-padding-12">Send</button>
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Footer</h4>
  <a href="#" class="w3-btn w3-padding w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>

