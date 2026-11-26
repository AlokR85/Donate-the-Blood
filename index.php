<?php 

	//include header file
	include ('config.php');
	include ('include/header.php');

?>

<?php
$name = "John Doe";
$gender = "Male";
$email = "john@example.com";
$city = "New York";
$dob = "1990-05-15";
$contact = "1234567890";
$save_life = "Yes";
$password_hash = password_hash("yourpassword", PASSWORD_DEFAULT); // always hash passwords!

// Insert query
$sql = "INSERT INTO donor (id, name, gender, email, city, dob, contact, save_life, password)
VALUES (NULL, '$name', '$gender', '$email', '$city', '$dob', '$contact', '$save_life', '$password_hash')";

if ($conn->query($sql) === TRUE) {
    echo "New donor inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();


?>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select --</option><optgroup title=" Chittagong " label="&raquo; Chittagong ">
									</optgroup><option value=" Khulshi " > Khulshi </option><option value="South Khulshi " >South khulshi </option><option value=" Nasirabad " >Nasirabad</option><option value="Bodharhat" >Bodharhat</option><option value="Gec" >Gec</option><option value="Muradpur" >Muradpur</option><option value=" Halisohor" >Halisohor</option><option value="Alongkar" >Alongkar</option><option value="Agrabad" >Agrabad</option><option value=" Dewanhat" >Dewanhat</option><option value="Agrabad" >Agrabad</option>
									<optgroup title="sylthet" label= "&raquo; Sylhet"></optgroup><option value="Balaganj" >Balaganj</option><option value="Companiganj" >Companiganj</option><option value="Fenchuganj" >Fenchuganj</option><option value="Golapganj" >Golapganj</option><option value=" Kanaighat" > Kanaighat</option><option value="Bhaluka" >Bhaluka</option><option value="Gafargaon" >Gafargaon</option><option value="Tarakanda" >Tarakanda</option><option value="Haluaghat" >Haluaghat</option>
									<optgroup title="Dhaka Capital" label="&raquo; Dhaka Capital"></optgroup><option value="dhandmondi" >dhandmondi</option><option value="Shahbagh" >Shahbagh</option><option value="Ramna" >Ramna</option><option value="Motijheel" >Motijheel</option><option value="Paltan" >Paltan</option><option value="New Market" >New Market</option><option value="Mirpur" >Mirpur</option>
									<optgroup title="Dinajpur " label="&raquo; Dinajpur"></optgroup><option value="Rajbari" >Rajbari</option>
									<optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup><option value="Shalbagan" >Shalbagan</option><option value="Ghoramara" >Ghoramara</option><option value="Shaheb Bazar" >Shaheb Bazar</option><option value="Laxmipur" >Laxmipur</option><option value="Terokhadia" >Terokhadia</option><option value="Durgapur" >Durgapur</option><option value="Bagmara" >Bagmara</option><option value="Bornali Mor" >Bornali Mor</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option>
									
									<optgroup title="Barishal" label="&raquo; Barishal"></optgroup><option value="Barishal Sadar" >Barishal Sadar</option><option value="Bakerganj" >Bakerganj</option><option value="Mehendiganj" >Mehendiganj</option><option value="Banglabazar" >Banglabazar</option><option value="Rupatali Housing" >Rupatali Housing</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option>
									<optgroup title="Khulna" label="&raquo; khulna"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option>
									<option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
							</div> 
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							

						Blood donation saves lives by helping patients in emergencies and those with blood disorders. It benefits donors by improving heart health, stimulating blood cell production, burning calories, and providing a free health check-up. Plus, it offers a sense of fulfillment. 💉❤️
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Our aim is to empower communities by creating an accessible platform that seamlessly connects blood donors with those in need, ensuring life-saving blood is always within reach.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Our goal is to simplify the blood donation process by providing a user-friendly platform that connects donors with recipients in real time. We aim to raise awareness, encourage voluntary blood donations, and ensure a quick, efficient, and reliable supply of blood for those in need.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								By using our platform to link donors and people in need, we hope to make blood donation easy, accessible, and effective.  In order to save lives, we work to increase awareness, promote voluntary donations, and guarantee a consistent supply of blood.  Our goal is to create a society that is healthier and more compassionate by utilizing technology and community involvement.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>