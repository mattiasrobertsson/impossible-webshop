<?php 
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
      header("Location: index-contact.php?status=thanks");
    exit;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<?php 
$pageTitle = "Contact";
$section = "home";
include('inc/header.php') 
?>

  		<div class="section contact">
			<div class="wrapper">
				<div class="container-fluid">
				  
				  <h4>Contact us</h4>
				  	<p>Send us an email and we'll get back in touch as soon as possible!</p>
				  	    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                			<p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            			<?php } else { ?>
				  <div class="row">
				    <div class="col-sm-6" style="background-color:lavender;">
				    	<form method="post" class="email" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				    		<p><span class="error">* required field.</span></p>
							<p>
								<label for="name">Name:</label>
								<span class="error">* <?php echo $nameErr;?></span>
								</br>
								<input type="text" name="name" id="name" value="<?php echo $name;?>">
							</p>
							<p>
								<label for="email">Email:</label>
								<span class="error">* <?php echo $emailErr;?></span>
								</br>
								<input type="text" name="email" id="email" value="<?php echo $email;?>">
							</p>
							<p>
								<label for="message">Message</label>
								<span class="error">* <?php echo $messageErr;?></span>
								</br>
								<textarea type="text" name="message" id="message" value="<?php echo $message;?>"></textarea>
							</p>
							
						<input type="submit" class="submit" value="Send">
					</form>
					            <?php } ?>
						<div>Telephone: 666-666 666 12PM-8PM EST</div>
						<div><a href="#" target="_blank" title="Impossible Studio Instagram">FOLLOW US ON INSTAGRAM</a></div>


				    </div>
				    <div class="col-sm-6" style="background-color:lavenderblush;">
				    	<h4>Frequently asked questions</h4>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
?>

	<?php include('inc/footer.php') ?>