<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
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
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
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
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
