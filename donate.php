<?php 
  //include header file
  include ('include/header.php');
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div><!--gender-->
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <?php for ($y = date("Y") - 18; $y >= 1957; $y--) { ?><option value="<?php echo $y; ?>"><?php echo $y; ?></option><?php } ?>
              </select>
            </div><!--End form-group-->
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder="01XXXXXXXXX" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
            </div><!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
              	<option value="">-- Select --</option>
              	<optgroup label="Barishal Division">
              		<option value="Barguna">Barguna</option>
              		<option value="Barishal">Barishal</option>
              		<option value="Bhola">Bhola</option>
              		<option value="Jhalokati">Jhalokati</option>
              		<option value="Patuakhali">Patuakhali</option>
              		<option value="Pirojpur">Pirojpur</option>
              	</optgroup>
              	<optgroup label="Chattogram Division">
              		<option value="Bandarban">Bandarban</option>
              		<option value="Brahmanbaria">Brahmanbaria</option>
              		<option value="Chandpur">Chandpur</option>
              		<option value="Chattogram">Chattogram</option>
              		<option value="Cox&#39;s Bazar">Cox&#39;s Bazar</option>
              		<option value="Cumilla">Cumilla</option>
              		<option value="Feni">Feni</option>
              		<option value="Khagrachhari">Khagrachhari</option>
              		<option value="Lakshmipur">Lakshmipur</option>
              		<option value="Noakhali">Noakhali</option>
              		<option value="Rangamati">Rangamati</option>
              	</optgroup>
              	<optgroup label="Dhaka Division">
              		<option value="Dhaka">Dhaka</option>
              		<option value="Faridpur">Faridpur</option>
              		<option value="Gazipur">Gazipur</option>
              		<option value="Gopalganj">Gopalganj</option>
              		<option value="Kishoreganj">Kishoreganj</option>
              		<option value="Madaripur">Madaripur</option>
              		<option value="Manikganj">Manikganj</option>
              		<option value="Munshiganj">Munshiganj</option>
              		<option value="Narayanganj">Narayanganj</option>
              		<option value="Narsingdi">Narsingdi</option>
              		<option value="Rajbari">Rajbari</option>
              		<option value="Shariatpur">Shariatpur</option>
              		<option value="Tangail">Tangail</option>
              	</optgroup>
              	<optgroup label="Khulna Division">
              		<option value="Bagerhat">Bagerhat</option>
              		<option value="Chuadanga">Chuadanga</option>
              		<option value="Jashore">Jashore</option>
              		<option value="Jhenaidah">Jhenaidah</option>
              		<option value="Khulna">Khulna</option>
              		<option value="Kushtia">Kushtia</option>
              		<option value="Magura">Magura</option>
              		<option value="Meherpur">Meherpur</option>
              		<option value="Narail">Narail</option>
              		<option value="Satkhira">Satkhira</option>
              	</optgroup>
              	<optgroup label="Mymensingh Division">
              		<option value="Jamalpur">Jamalpur</option>
              		<option value="Mymensingh">Mymensingh</option>
              		<option value="Netrokona">Netrokona</option>
              		<option value="Sherpur">Sherpur</option>
              	</optgroup>
              	<optgroup label="Rajshahi Division">
              		<option value="Bogura">Bogura</option>
              		<option value="Chapainawabganj">Chapainawabganj</option>
              		<option value="Joypurhat">Joypurhat</option>
              		<option value="Naogaon">Naogaon</option>
              		<option value="Natore">Natore</option>
              		<option value="Pabna">Pabna</option>
              		<option value="Rajshahi">Rajshahi</option>
              		<option value="Sirajganj">Sirajganj</option>
              	</optgroup>
              	<optgroup label="Rangpur Division">
              		<option value="Dinajpur">Dinajpur</option>
              		<option value="Gaibandha">Gaibandha</option>
              		<option value="Kurigram">Kurigram</option>
              		<option value="Lalmonirhat">Lalmonirhat</option>
              		<option value="Nilphamari">Nilphamari</option>
              		<option value="Panchagarh">Panchagarh</option>
              		<option value="Rangpur">Rangpur</option>
              		<option value="Thakurgaon">Thakurgaon</option>
              	</optgroup>
              	<optgroup label="Sylhet Division">
              		<option value="Habiganj">Habiganj</option>
              		<option value="Moulvibazar">Moulvibazar</option>
              		<option value="Sunamganj">Sunamganj</option>
              		<option value="Sylhet">Sylhet</option>
              	</optgroup>
              </select>
            </div><!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>