<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Event Rules and Policies</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'navbar.php'; ?>

		<div class="container col-xxl-8 px-4 py-5">
		    <h1>Code of Conduct</h1>
			<ul class="list-group">
				<li	class="list-group-item">Our conference is dedicated to being inclusive to everyone regardless of race, ethnicity, gender, sexuality, religion, etc., and any harassment, intimidation, or discrimination be it verbal or physical will not be tolerated. </li>
				<li	class="list-group-item">Members and participants of the conference should alert the organizers if they observe unacceptable behavior, a dangerous situation, or someone that is of concern. Members and participants are encouraged to report these scenarios even if they are unsure if the situation is consequential or not.</li>
				<li	class="list-group-item">Conference speeches will be reviewed by a committee that consists of members from different backgrounds. The committee will inform the speaker if there is anything that needs to be changed. The speaker is expected to modify the speech to meet the standard of the committee.</li>
				<li	class="list-group-item">Participants of the conference should respect the speaker when they are speaking. Since the event is held online, it is easier to enforce this. The chatroom can filter out vulgar comments and the event moderator can mute the mic of those who are giving demeaning comments.</li>
				<li	class="list-group-item">Only registered participants are allowed to participate in the conference. Do not share the virtual address and your credential. The platform that hosts the virtual conference can verify the identity so that only authorized people are allowed to enter the conference.</li>
				<li	class="list-group-item">Participants should not record or screenshot the virtual conference without the consent of the speaker. The organizer will record each talk so that individuals have less incentive to do so themselves.</li>
				<li	class="list-group-item">This code of conduct applies to any communication related to the conference including speech during the conference, social media posts about the conference, and other such social media. </li>
				<li	class="list-group-item">Violations of the code of conduct can result in the removal of the violator's conference session, removal from the conference, and/or the removal of the violating posts and recordings.</li>
			</ul>
		</div>
		<div class="b-example-divider"></div>
		<div class="container col-xxl-8 px-4 py-5">
		    <h1>Reporting incidents</h1>
		    <p>
		    	Please file a report by contacting us (using the form below) that includes the following information or whatever,
		    	parts of the information you have. Reporting is very important to creating a safe environment for all participants
		    	so please report any incidents, you witness. 
		    </p>
		    <form>
 	    	  <div class="mb-3">
 	    	    <label for="email" class="form-label">Email address</label>
 	    	    <input type="email" class="form-control" id="email">
 	    	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
 	    	  </div>
		      <div class="mb-3">
      		  	<span class="input-group-text" id="inputGroup-sizing-sm">Name of witnesses</span>
      			<input id="witness" type="text" class="form-control">
 	    	    <div id="witnessHelp" class="form-text">Seperated by comma</div>
		      </div>
		      <div class="mb-3">
      			<span class="input-group-text">A description of the incident</span>
      			<textarea id="description" class="form-control"></textarea>
 	    	    <div id="witnessHelp" class="form-text">Please tell us when and where the incident occurred. Information like links, urls to pictures, and background information are useful.</div>
		      </div>
 	    	  <button type="submit" class="btn btn-primary">Submit</button>
		    </form>
		</div>

		
		<!-- Bootstrap JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>