<?php
session_name('hydrid');
session_start();
require_once 'inc/connect.php';
require_once 'inc/config.php';
require_once 'inc/backend/user/auth/userIsLoggedIn.php';

$page['name'] = 'Application Section';
?>
<?php include 'inc/page-top.php'; ?>
<link rel="stylesheet" href="/assets/css/materialize.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/mstepper.css">
<link rel="icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
<style>
	#labelstep1 {color: rgb(152, 166, 173);}
	#card1 {width: 1400px;}
	#tab1 {width: 2000px;}
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#userApply').ajaxForm(function(error) {
            console.log(error);
            error = JSON.parse(error);
            if (error['msg'] === "") {
                toastr.success('Application Submitted... Redirecting', 'System:', {
                    timeOut: 10000
                })
                window.location.href = "index.php";
            } else {
                toastr.error(error['msg'], 'System:', {
                    timeOut: 10000
                })
            }
        });
    });
</script>
<body>
    <?php include 'inc/top-nav.php'; ?>

    <!-- CONTENT START -->
    <div class="wrapper m-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h4 class="page-title"><?php echo $page['name']; ?></h4>
                </div>
            </div>
        </div>
	</div>
	 <!-- CONTENT HERE -->
	 <!-- Navbar Start -->
	 <!-- Navbar End -->
<div class="container" id="tab1">
	<div class="row">
		<div class="card-box z-depth-1" id="card1">
      <form class="form-horizontal m-t-20" id="userApply" action="inc/backend/user/auth/userApply.php" method="POST">
  		    <ul class="stepper linear horizontal">
                    <li class="step">
                       <div data-step-label="Little bit of Info on You." class="step-title waves-effect waves-dark">General Info</div>
                       <div class="step-content">
                          <div class="row">
                             <div class="input-field col s12">
                                <input id="linear_name" name="linear_name" type="text" class="validate" required>
                                <label for="linear_name">Your Real Name</label>
                                <span class="helper-text">This is your Real Name. If you would like it will be kept from other members.</span>
                             </div>
                             <div class="input-field col s12">
                                <input id="linear_email" name="linear_email" type="email" class="validate" required>
                                <label for="linear_email">Your E-Mail</label>
                                <span class="helper-text">This is your E-Mail. It will be kept confidential.</span>
                             </div>
                          </div>
                          <div class="row">
                          	<div class="input-field col s12">
                                <input id="linear_age" name="linear_age" type="number" class="validate" required>
                                <label for="linear_age">Your Age</label>
                                <span class="helper-text">Our age requirement is 15+! If you're under 15 your application will be automatically denied.</span>
                          	</div>
                          	<div class="input-field col s12">
                          		<input type="text" name="linear_discord" id="linear_discord" class="validate" required>
                          		<label for="linear_discord">Your Discord Name</label>
                          		<span class="helper-text">This is your discord name with the #XXXX included.</span>
                          	</div>
                          </div>
                          <div class="step-actions">
                             <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                          </div>
                       </div>
                    </li>
                    <li class="step">
                       <div data-step-label="Department related stuff." class="step-title waves-effect waves-dark">Department Questions</div>
                       <div class="step-content">
                          <div class="row">
                          	<div class="input-field col s12">
                          		<select id="linear_legalcopy">
                          			<option value="1">Yes</option>
                          			<option value="2">No</option>
                          		</select>
                          		<label>Do you have a legal copy of Grand Theft Auto V for the PC?</label>
                          	</div>
                             <div class="input-field col s12">
                             		<select id="linear_dept">
                             			<option value="1">Civilian</option>
                             			<option value="2">State Patrol</option>
                             			<option value="3">Sheriff's Office</option>
                             			<option value="4">Police Department</option>
                             			<option value="5">Fire / EMS</option>
                             			<option value="6">Dispatch</option>
                             		</select>
                             		<label>Choose the department you're wanting to apply for.</label>
                             </div>
                          </div>
                          <div class="row">
                          	<div class="input-field col s12">
                          		<textarea id="linear_experience" name="linear_experience" class="materialize-textarea validate" required></textarea>
                          		<label for="linear_experience">Do you have any experience in your selected department?</label>
                          	</div>
                          	<div class="input-field col s12">
                          		<textarea id="linear_describe" name="linear_describe" class="materialize-textarea validate" required></textarea>
                          		<label for="linear_describe">In your own words, Describe what your selected department does?</label>
                          	</div>
                          </div>
                          <div class="step-actions">
                              <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                              <button class="waves-effect waves-dark btn red previous-step">BACK</button>
                          </div>
                       </div>
                    </li>
                    <li class="step">
                       <div data-step-label="Just more info on you." class="step-title waves-effect waves-dark">Last bit of Info</div>
                       <div class="step-content">
                          <div class="row">
                          	<div class="input-field col s12">
                          		<textarea class="materialize-textarea validate" id="linear_why" name="linear_why" required></textarea>
                          		<label for="linear_why">Why should we choose you over another applicant?</label>
                          	</div>
                          	<div class="input-field col s12">
                          		<textarea class="materialize-textarea validate" id="linear_pastrp" name="linear_pastrp" required></textarea>
                          		<label for="linear_pastrp">Put down any past FiveM RP communities you've been apart of.</label>
                          		<span class="helper-text">If you've been apart of SA'F before and don't tell us you'll be banned!</span>
                          	</div>
                          </div>
                          <div class="row">
                          	<div class="input-field col s12">
                          		<textarea class="materialize-textarea validate" id="linear_anything" name="linear_anything" required></textarea>
                          		<label for="linear_anything">Anything else we should know about you or your past?</label>
                          	</div>
                          	<div class="input-field col s12">
                          		<select id="linear_referral">
                          			<optgroup label="Youtube/Twitch">
                          				<option value="1">OncOceanTen</option>
                          				<option value="2">Duckman Gaming</option>
                          				<option value="3">DannyL</option>
                          				<option value="4">Yeka221</option>
                          				<option value="5">Pizzaman20045</option>
                          			</optgroup>
                          			<optgroup label="Other">
                          				<option value="6">Other FiveM Community</option>
                          				<option value="7">Other Discord Server</option>
                          				<option value="8">FiveM Forums</option>
                          				<option value="9">Google</option>
                                  <option value="10">Other</option>
                          			</optgroup>
                          		</select>
                          		<label>Your Referral</label>
                          	</div>
                          </div>
                          <div class="step-actions">
                             <button class="waves-effect waves-dark btn blue" type="submit" id="submit">SUBMIT</button>
                             <button class="waves-effect waves-dark btn red previous-step">BACK</button>
                          </div>
                       </div>
                    </li>
                 </ul>
          </form>
		</div>
	</div>
</div>
        <!-- CONTENT END -->
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/assets/js/materialize.js"></script>
<script src="/assets/js/mstepper.js"></script>
<script>
    var stepper = document.querySelector('.stepper');
    var stepperInstace = new MStepper(stepper, {
        // options
        firstActive: 0 // this is the default
    })
	$(document).ready(function(){
  	  $('select').formSelect();
  	});
  	$('#linear_experience').val('My Prior experience is...');
  	M.textareaAutoResize($('#linear_experience'));
  	$('#linear_describe').val('This department does...');
  	M.textareaAutoResize($('#linear_describe'));
</script>

        <?php include 'inc/copyright.php'; ?>
        <?php include 'inc/page-bottom.php'; ?>
