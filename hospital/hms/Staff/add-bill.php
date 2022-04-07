<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_POST['submit']))
{
$Invoice_Number=$_POST['Invoice_Number'];	
$Room_Rent=$_POST['Room_Rent'];
$ICU_services=$_POST['ICU_services'];
$Medicine_charges=$_POST['Medicine_charges'];
$Other_Expenses=$_POST['Other_Expenses'];
$Surgical_Appliances=$_POST['Surgical_Appliances'];
$Patient_Paid_Amount=$_POST['Patient_Paid_Amount'];
$PatientEmail=$_POST['PatientEmail'];

$sql=mysqli_query($con,"insert into hospital_charges(Invoice_Number,PatientEmail,Room_Rent,ICU_services,Medicine_charges,Other_Expenses,Surgical_Appliances,Patient_Paid_Amount) values('$Invoice_Number','$PatientEmail','$Room_Rent','$ICU_services','$Medicine_charges','$Other_Expenses','$Surgical_Appliances','$Patient_Paid_Amount')");
if($sql)
{
echo "<script>alert('Bill Info added Successfully');</script>";
echo "<script>window.location.href ='add-bill.php'</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>STAFF | Add Hospital Bill</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	</head>
	<body>
		<div id="app">		
<?php include('include/ncsidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle"><font face="Garamond" size="6px" >Staff |  Add Hospital Bill</font></h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Staff</span>
									</li>
									<li class="active">
										<span> Add Hospital Bill</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title"> Add Hospital Bill</h5>
												</div>
												<div class="panel-body">
									



													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="Invoice_Number">
																Invoice Number
															</label>
					<input type="text" name="Invoice_Number" class="form-control"  placeholder="Invoice_Number" required="true">
														</div>
													
<div class="form-group">
															<label for="PatientEmail">
																PatientEmail
															</label>
					<input type="email" name="PatientEmail" class="form-control"  placeholder="PatientEmail" required="true">
														</div>


<div class="form-group">
															<label for="Room_Rent">
																 Room_Rent
															</label>
					<textarea name="Room_Rent" class="form-control"  placeholder="Room_Rent" required="true"></textarea>
														</div>
<div class="form-group">
															<label for="ICU_services">
																ICU_services
															</label>
					<input type="text" name="ICU_services" class="form-control"  placeholder="ICU_services" required="true">
														</div>
	
<div class="form-group">
									<label for="Medicine_charges">
																 Medicine_charges
															</label>
					<input type="text" name="Medicine_charges" class="form-control"  placeholder="Medicine_charges" required="true">
														</div>

<div class="form-group">
									<label for="Other_Expenses">
																Other_Expenses
															</label>
					<input type="text" name="Other_Expenses" class="form-control"  placeholder="Other_Expenses" required="true">
														</div>

<div class="form-group">
									<label for="Surgical_Appliances">
																 Test Fees
															</label>
					<input type="text" name="Surgical_Appliances" class="form-control"  placeholder="Test Fees" required="true">
														</div>

<div class="form-group">
									<label for="Patient_Paid_Amount">
																 Patient_Paid_Amount
															</label>
					<input type="text" name="Patient_Paid_Amount" class="form-control"  placeholder="Patient_Paid_Amount" required="true">
														</div>											
														
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
