<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
	<p>
		<?php echo "Hello World!"; ?>
	</p>

	<p>
		<?php print("Hello World!"); ?>
	</p>

	<?php
		echo "<p>Hello World!</p>";
	?>

	<?php
		print ("<p>Hello World!</p>");
	?>

	<p>
		<?= "Hello World!"; # By this method also we can write comments ?>
		<!-- <?= $name7 // This is called as a String variable ?> --->
	</p>

	<p>
		<?= "Hello World!" ?> <?= /* Its okay to dont't write semicolon in one line comment or on last line of the paragraph */ "" ?>
	</p>

	<p>
		<?= /* We can understand by seeing output 
	   		   Agar php tag badalta he toh ek space aata he or
	   		   Agar new line pe kuch print karna he toh <p> tag use karna padta he */ "" ?>

		<?= "He"; ?>               
		<?= "llo"; ?>			  <!---- By this method also you can write comments ---->
		<?= " Wo"; ?>			  
		<?= "rld!" ?>					
	</p>

	<?php echo "Hello                         World!"; # Ignores Whitespaces ?>   

<p>
	<?php

	/*
	
	These are all Escaping Characters :

	\n = New Line = <br>
	\r = Carriage Return = <br>
	\t = Tab = &nsbp;
	\$ = Dollar Sign
	\' = Single Quotes
	\" = Double Quotes
	\\ = Back Slash

	*/

	echo "This is a \nNew Line command<br>";
	echo "\n\nThis is a \t\tTab key<br>";
	echo "\n\nThis is \$ Dollar Sign<br>";
	echo '\n\nThis are \'\' Single Quotes<br>'; # Single Quote diya tohi Single Quote work karta he, but tabhi \n work nahi karta
	echo "\n\nThis are \"\" Double Quotes<br>";

	?> 
</p>

<p>
	<?php echo 'I\'m Aditya<br>'; ?>
</p>

<!-------------------------------------------- SOMETIMES CASE SENSITIVE ------------------------------------------->

<p>
	<?php

	$name = "Aditya Ghadge";
	$message = "He is a Foolish person";
	echo "$name: $message<br>";
	echo $name. ": " .$message. "<br>";

	$Name = "Aditya". " " ."Ghadge";
	echo "$Name: $message<br>";
	echo $Name. ": " .$message;

	// Here you can see 'name' and 'Name' are different i.e, Case Sensitive 

	?>
</p>

<p>
	<?php

	$message1 = "Single";
	$message2 = "Madhumakkhi";
	echo "Using Double Quotes: $message1 <br>";
	echo 'Using Double Quotes: $message1'. "<br>";   # Single Quotes me likhe hue variable ka value print nahi hota
	echo "$message1 - $message2 <br>";

	?>
</p>

<p>
	<?php

	$length = 10;
	$breadth = 20;
	$area = $length * $breadth;
	echo "Area = $area <br>";

	$length = "10";
	$breadth = 20;
	$area = $length * $breadth;
	echo "Area = $area <br>";       # We can get that, in PHP we can multiply integer and string only when the string is 
									# an integer i.e, in this exampke that is 10 ! But remember we can't multiply two 
									# strings !
	?>								
</p>

<p>
	<?php

	// Define a Function
	// Function Declaration
	function add() {

		//Function Body
		$firstvalue = 10;
		$secondvalue = 20;
		$total = $firstvalue + $secondvalue;
		echo $total;
	}

	// Calling the Function
	add();

	// Here you can't make multiple functions with same name i.e, duplicate functions

	// And function call function declaration ke pehle karo ya baad me karo Farrrrrak Nahi Padta 

	?>
</p>

<!----------------------------------------- SOMETIMES PHP DOESN'T CARE --------------------------------------------->

<p>
	<?PHP

	Echo 'Hello World! <br>';
	ECHO "Hello World! <br>";

	PRINT 'Hello World! <br>';

	function print_message() {
		echo "Hello and Welcome to PHP! <br>";
	}

	PRINT_MESSAGE();

	// See you was not expecting, but you will get output here and that's why sometimes PHP is called as "Loosely Typed Language" !

	// But by writing function name in smaller and capital you can't create duplicate function 

	?>

<!----- NOTE: PHP IS NOT CASE SENSITIVE FOR FUNCTIONS AND KEYWORDS BUT IT IS CASE SENSITIVE FOR VARIABLES ----->

</p>

<!-- Cocept of GLOBAL and LOCAL variables --> 
<p>
	<?php

	global $name;
	$name = "Outside the Function!";

	function print_name() {
		$name = "Inside the Function!";
		echo $name. "<br>";
	}

	print_name();
	echo $name. "<br>";

	/*

	global $name2 = "Outside the Function!";

	function print_name2() {
		echo $name;
	}

	print_name2();

	*/

	/*

	function print_name3() {
		$name3 = "Inside the Function!";
	}

	print_name3();
	echo $name3;

	*/
	

	// 1) Function ke bahar ka variable ka value function ke andar excess nahi kar sakte
	// 2) Function ke andar ka variable ka value function ke bahar excess nahi kar sakte

	// NOTE: Bahar ka matter Bahar 
	//       Andar ka matter Andar

	?>
</p>

<!--- If you want to access global variable then... --->
<h3>Global Variable</h3>
<p>
	<?php

		global $name4;
		$name4 = "Method of accessing Global Variable";

		function print_name4() {
			global $name4;
			echo $name4. "<br>";
		}

		print_name4();



		// Method to change the value of Global Variable
		global $name5;
		$name5 = "Method of accessing Global Variable";

		function print_name5() {
			global $name5;
			$name5 = "Method of changing the value of Global Variable";
			echo $name5. "<br>";
		}

		print_name5();

	?>	
</p>

<!--- Static Variable --->
<p>
	<?php

	function counter() {
		$count = 1;
		echo $count. "<br>";
		$count = $count + 1;
	}

	counter();
	counter();
	counter();
	counter();
	counter();


	echo "<h3>Static Variables</h3>";

	function static_counter() {
		static $count = 1;
		echo $count. "<br>";
		$count = $count + 1;
	}

	static_counter();
	static_counter();
	static_counter();
	static_counter();
	static_counter();

	?>
</p>

<p>
	<?php

		//////////////////////////////////// SUPER GLOBAL VARIABLES ////////////////////////////////////

		echo "<h3>Super Global Variables</h3>";
		global $message3;
		$message3 = "Accessing global variables standardly!";

		function print_name6() {
			echo $GLOBALS['message3']. "<br>";    # $GLOBAL , $_SERVER , $php_errormsg [Error Control Operator], $_GET , 
												  # $_POST , $_FILES , $_COOKIE , $_SESSION , $_REQUEST ,   
												  #	$_ENV ... are some Super Global Variables		
		}	

		print_name6();

	?>
</p>

<!--- Printing Filename using Super Global Variable like $_SERVER --->
<p>
	<?php

	echo "Filename: ". $_SERVER['PHP_SELF'];   // Don't need to understand it because we can access the file name in better 
											   // in better way using Magic Constant "__FILE__" SEE LINE NO 411
	?>
</p>

<!---------------------------------------------- VARIABLE OF VARIABLES -------------------------------------------->
<P>
	<?PHP

	$male = "Aditya Ghadge";
	$gender = "male";

	echo $gender. "<br>";
	echo $$gender. "<br><br>";   // $($gender) ==> $(male)

	$student = "Aditya Ghadge";
	$male = "student";
	$gender = "male";

	echo $gender. "<br>";
	echo $$gender. "<br>";
	echo $$$gender. "<br>"; 

	?>
</P>

<P>
	<?php

	@$val = 1/0;                     // @ is actually ignoring the Warning
	print_r(error_get_last());       // This used for showing the error i.e, Division by zero [file]

	?>
</P>

<P>
	<?php

	// Empty Variable
	$name6;

	// Ternary Operator
	echo isset($name6) ? "Variable is Set" : "Variable is not Set";   // This isset function we can only operate on 
	echo "<br>";										              // variables and NOT ON CONSTANTS

	$name6 = "Aditya Ghadge";

	// Ternary Operator
	echo isset($name6) ? "Variable is Set" : "Variable is not Set";
	echo "<br>";	

	?>
</P>

<!--- DEFINING A CONSTANT --->
<p>
	<?php

	// Define constant
	// define(NAME OF THE CONSTANT , VALUE OF THE CONSTANT);
	define("LANGUAGE","PHP");   // Always use UPPERCASE to define constants for good practise
								// Don't try to start the name of constant with _ for good practise

	// Assigning constant to variable
	$lang = LANGUAGE;

	echo "This program is writing using $lang <br>";
	echo "This program is writing using LANGUAGE <br>";
	echo "This program is writing using ". LANGUAGE ."<br><br>";

	// Changing the value of a constant
	define("LANGUAGE","JAVA");
	
	echo "This program is writing using ". LANGUAGE ."<br><br>";

	// Same name with variable and constant
	$LANGUAGE = "JAVA";

	echo "This program is writing using ". $LANGUAGE ."<br>";
	echo "This program is writing using ". LANGUAGE ."<br><br>";

	// Naming convention for constants is same as variables i.e, can start with alphabate or _ but can't start with an integer

	// Accessing constant using the constant method
	echo constant("LANGUAGE");
	echo "<hr>";

	// NOTE 1: Value can be assigned to constant only once. We can't change that value 
	// NOTE 2: Constants has a global scope , can access anywhere

	function constants() {
		echo LANGUAGE;
	}
	constants();

	?>
</p>


<!------------------------------------------------ MAGIC CONSTANTS ------------------------------------------------>
<P>
	<?php

	echo __LINE__. "<br>";   
	echo __FILE__;

	// Search about REMOTE_ADD magic constant to print the IP ADRESS of the Server

	?>
</p>

<!--- OPERATORS --->
<p>
	<?php

	$madhu = 20;
	$adi = 10;

	// Arithmatic Operators:
	// Addition
	echo "Addition: ". ($madhu + $adi) ."<br>";   // We use [. PHP_EOL;] replacing to [. "<br>";] while running PHP onto CMD
	// Substraction 
	echo "Substraction: ". ($madhu - $adi) ."<br>";
	// Multiplication
	echo "Multiplication: ". ($madhu * $adi) ."<br>";
	// Division
	echo "Division: ". ($madhu / $adi) ."<br>";
	// Modulus
	echo "Modulus: ". ($madhu % $adi) ."<br>";
	// Exponential
	echo "Exponential: ". ($adi ** $madhu) ."<br><br>";


	$truth = True;
	$fault = False;

	// Logical Operators:
	// AND
	echo ($truth AND $fault) ? "True AND <br>" : "False AND <br>"; 
	// &&
	echo ($truth && $fault) ? "True && <br>" : "False && <br>"; 
	// OR
	echo ($truth OR $fault) ? "True OR <br>" : "False OR <br>"; 
	// ||
	echo ($truth || $fault) ? "True || <br>" : "False || <br>"; 
	// !=
	echo ($madhu != $adi) ? "True != <br><br>" : "False != <br><br>"; 



	$increament = 10;
	$names = "Aditya ";
	$surnames = "Ghadge";

	// Assignment Operators:
    //  =  - Assignment Operator used to assign values
    echo "= ". $increament;          echo "<br>";
    //  += - Add Assignment Operator - .=
	echo "+= ". $increament+=1;      echo "<br>";    
	echo ".= ". $names.=$surnames;   echo "<br>";
    //  -= - Subtract Assignment Operator
    echo "-= ". $increament-=1;      echo "<br>"; 
    //  *= - Multiple Assignment Operator
    echo "*= ". $increament*=2;      echo "<br>";
    //  /= - Divide Assignment Operator
    echo "/= ". $increament/=2;      echo "<br>";
    //  %= - Modulus Assignment Operator
    echo "%= ". $increament%=2;      echo "<br><br>";



    $counter1 = 10;

    // Increament Operator and Decreament Operator:
      // Post-Increament Operator:
      echo "Increament: ". $counter1++;   echo "<br>";     // First $counter1 gets printed and after that gets increamented 
      // Pre-Increament Operator:						   // to 11
      echo "Increament: ". ++$counter1;   echo "<br>";	   // to 12
      echo "Increament: ". ++$counter1;   echo "<br>";     // to 13
      echo "Increament: ". ++$counter1;   echo "<br>";     // to 14
      echo "Increament: ". ++$counter1;   echo "<br><br>"; // to 15 

    $counter2 = 10;

    // Decreament Operator:
      // Post-Decreament Operator:
      echo "Decreament: ". $counter2--;   echo "<br>";     // First $counter1 gets printed and after that gets decreamented
      // Pre-Decreament Operator:						   // to 9
      echo "Decreament: ". --$counter2;   echo "<br>";     // to 8
      echo "Decreament: ". --$counter2;   echo "<br>";	   // to 7
      echo "Decreament: ". --$counter2;   echo "<br>";     // to 6
      echo "Decreament: ". --$counter2;   echo "<br><br>"; // to 5



	// Bitwise Operators:
	  // Bitwise AND Operator:
	  // 2(0010) & 3(0011) = 2(0010)
	  echo 2&3;   echo "<br><br>";

	  // Bitwise OR Operator:
	  // 2(0010) | 3(0011) = 3(0011)
	  echo 2|3;   echo "<br><br>";

	  // Bitwise XOR Operator:
	  // 0^1 = 1
	  // 1^0 = 1
	  // 0^0 = 0
	  // 1^1 = 0											
	  // i.e., Different = 1 and Same = 0
	  echo 2^3;   echo "<br><br>";

	  // Bitwise NOT Operator:
	  // It Adds one and negate it
	  echo ~3;    echo "<br>";
	  echo ~4;    echo "<br>";
	  echo ~5;    echo "<br>";
	  echo ~6;    echo "<br><br>";



	  /*
     * Unary - !, ++, --
     * Multiplication - * / %
     * Add/Subtract - +, -
     * Relational - <, >, <=, >=
     * Equality - ==, !=
     * Logical AND - &&
     * Logical OR - ||
     * Conditional - ?:
     * Assignment - =, +=, -=, *=, /=, %=.
     *
     */


    //Classic - Assignment has higher precedence over and

	$r11 = true && false;    // && has higher precedence than = hence RHS is performed first then value of RHS gets 
							 // assigned to LHS

	$r12 = true and false;   // and has lower precedence than = hence true in RHS gets assigned to LHS and then RHS 
							 // is performed

    echo ($r11) ? "true": "false";   echo "<br>";        // True or true or TRUE are same
    echo ($r12)? "true": "false";    echo "<br><br>"; 



    //Hexadecimal Variable
    //https://www.binaryhexconverter.com/decimal-to-hex-converter
    $marks = 0x19F2D7C1;   //435345345   // Defining a Hexadecimal Variable
    echo $marks . "<br>";

    echo PHP_INT_MAX . "<br><br>";   // It is the max value that can be assigned to variable



    //Round a Double Value
    $price = 4.51;
    echo round($price) . "<br>";

    //Compare two Double with Precision 0.1 = 1.87 ~ 1.97
    $price = 1.87;
    $bid = 1.97;
    echo $price - $bid ."<br>";
    echo abs($price - $bid) ."<br>";   // abs stands for absolute
    echo (abs($price - $bid) < 0.1)? "True" : "False" ;   echo "<br><br>";   // It's Unexpected but it happened 
    																				// because 
    																				// $bid - $price = 0.9999999999999

    /*
     * true or false / TRUE OR FALSE can be used to assign a boolean variable
     * Boolean are literals are case insensitive - True or true or TRUE are same.
     * true = 1 and false =   when displayed with echo but actually its 0
     * Integer variable with value 0 or null is false and anything else is true
     * String variable with value "0" is false and anything else is true
     * Boolean is used in condition to check something.
     * Operators which results into boolean conditions
     */
    
    // Print Boolean Variable
    echo "True: " . TRUE;    echo "<br>";
    echo "False: " . FALSE;   echo "<br>";


    // Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = "Aditya";
    echo ( $isLoggedIn && $userSessionName ) ? "TRUE && string is TRUE" : "User Not Logged In";
    echo "<br>";

    // Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = null;
    echo ( $isLoggedIn && $userSessionName ) ? "User Logged In" : "TRUE && null is FALSE";
    echo "<br>";

    //Operators results into Boolean condition
    $name = "Aditya";
    echo ( $name === "Aditya" ) ? "Yes Aditya" : "Not Aditya";
    echo "<br><br>";



    /*
     * Strings are defined in Double quotes and Single Quotes.
     * Double Quotes string will interpolate variables values and single quote does not.
     * No limited to how much string variable holds but limited with system memory.
     * Use Escape Character to escape double quotes inside double quotes and other characters.
     * String methods are available to work with string manipulation
     *
     */


    //Define String and use Strings
    $name1 = "Aditya Ghadge";
    $name2 = 'Aakash Annadate';
    echo "$name1 and $name2";   echo "<br>";
    echo '$name1 and $name2';   echo "<br>";

    //Use back slach to escape the characters
    $name4 = "This is a \"Special\" String";
    echo $name4;   echo "<br>";

    $name4 = "\t\tThis is a \"Special\" String";
    echo $name4;   echo "<br>";

    echo strlen($name1);   echo "<br>";

    // https://www.php.net/strlen = For methods about string in PHP



    /*
     * NULL is case insensitive. null / NULL are same
     * null is used to initialize a variable with empty value.
     * unset() and is_null() methods    
     * Most common use case is to check if the variable has a value or empty
     */

    //Define and Check Null                                        
    $name = null;                                        
    echo ($name) ? "Has Value" : "Empty";              echo "<br>";

    //Check if the Variable is Null or not
    $name = "0";
    echo ($name) ? "Has Value" : "Empty";              echo "<br>";
    echo (is_null($name)) ? "Not Null" : "Empty";      echo "<br>";

    //Remove the Variable from the Program and Memory
    unset($name);
    echo (is_null($name)) ? "Not Null" : "Empty";      

	?>																			    
</p>

<p>
	<?php

    /*
     * 1) Namespaces are case-insensitive
     * 2) Namespaces are used to avoid name collision between other libraries.
     * 3) namespace is the keyword used to define namespace.
     * 4) Only Classes, Interface, Functions and Constants should be defined in namepaces.
     * 5) namespace should be always in the first line.
     * 6) include is used to include any file into another file.
     * 7) Use the backslash to refer to sub directories or file name.
     *
     */

    //Include the namespace file
    include "NamespaceConstants.php";

    //Access the Namespace.
    echo MyConstants\FILE_NAME;
    echo "\n\n\n";

    $f = "sam" + 25;
    echo $f . "\n\n";

    if(FALSE == "0") print("Yes")
    # NOTE: FALSE and NULL becomes 0 but print nothing in echo

	?>
</p>

</body>
</html>								   
							   
								   
