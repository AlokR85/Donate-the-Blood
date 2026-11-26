<?php 
	
	include 'include/header.php';

	include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" value="">
							</div>
							<div class="form-group">
					              <label for="name">Blood Group</label><br>
					              <select class="form-control demo-default" required id="blood_group" name="blood_group" required>
					                <option value=""> </option>
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
				              		<select name="gender" id="gender" class="form-control" required>
				              			<option value=""></option>
				              			<option value="Male">Male</option>
				              			<option value="Fe-male">Fe-male</option>
				              		</select>
				    		</div><!--gender-->
				    		<div class="form-group">
				    		<label for="dob">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required value="">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				            </div><!--End form-group-->
							<div class="form-group">
								<label for="city">City</label>
								              <select name="city" id="city" class="form-control demo-default" required>
								              	<option value=""> </option>
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
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>