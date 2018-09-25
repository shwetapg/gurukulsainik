<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="sainikproject.css">
</head>
<body>

	<!-- saving post method user order input from api in admin file -->
	<?php  
		session_start();
		if(isset($_POST['submit']))
		{
		    $url = 'https://gurukulsainik.herokuapp.com/post_info/';
		    $data = array(
		                
		                'name' => $_POST['name'],
		                'number' => $_POST['mobile'],
		                'email' => $_POST['email'],
		                'address' => $_POST['address'],
		                'book_language' => $_POST['blang'],
		                'number_of_copies' => $_POST['copies'],
		                'total_cost' => $_POST['total'],
		                'payment' => $_POST['payment'],                
		              );

		      $options = array(
		        'http' => array(
		          'header'  => "Content-Type: application/json\r\n" .
		                       "Accept: application/json\r\n",
		          'method'  => 'POST',
		          'content' => json_encode( $data ),
		        ),
		      );
		      $context  = stream_context_create($options);
		      $result = file_get_contents($url, false, $context);
		      $arr = json_decode($result,true);
		}
 	?>

 	<!-- saving post method user enquiry input from api in admin file -->
 	<?php  
		session_start();
		if(isset($_POST['send_message']))
		{
		    $url = 'https://gurukulsainik.herokuapp.com/post_message/';
		    $data = array(
		                
		                'name' => $_POST['name'],
		                'number' => $_POST['mobile'],
		                'email' => $_POST['email'],
		                'message' => $_POST['message'],              
		              );

		      $options = array(
		        'http' => array(
		          'header'  => "Content-Type: application/json\r\n" .
		                       "Accept: application/json\r\n",
		          'method'  => 'POST',
		          'content' => json_encode( $data ),
		        ),
		      );
		      $context  = stream_context_create($options);
		      $result = file_get_contents($url, false, $context);
		      $arr = json_decode($result,true);
		}
 	?>

	<div class="container-fluid">
	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

			<!--section 1-->
			<div id="image">
			  <h6 id="text" style="padding-top:34px;">S.S.S.G.V. ASSOCIATION</h6>
			  <h3 id="text" style="font-weight:bold;">GURUKUL VIDYALAYA</h3>
			  <h6 id="text" style="color:lightgrey;">presents</h6>
			  <h6 id="text" style="color:lightgrey;font-size:16px;">India's first Army Recruitment Exams Guide.</h6>
			  <h1 id="text" class="sainik">SAINIK</h1>
			  <!--displaying sainik in marathi using unicode-->
			  <h1 id="text">&#2360;&#2376;&#2344;&#2367;&#2325;</h1>
			  <img src="Assets/book.png" style="max-width: 77%;max-height: 60%;margin-left: 48px;margin-top: -10px;">
			  <p id="text" class="rs_only"><i class="fa">&#xf156;</i>&nbsp;<span class="color" style="font-size:20px;">250 Only</span></p>
			  <a href="#order"><button type="button" class="btn buynow">BUY NOW</button></a>
			</div><!--image-->

			<!--section 2-->
			<div class="div2">
				<h3 style="padding-top:25px;">Useful for Recrutiment Exams</h3>
				<div style="height:150px;">
				  <img src="Assets/army.png" class="mg1 mgi1">
				  <img src="Assets/navy.png" class="mg2 mgi2">
				  <img src="Assets/airforce.png" class="mg2 mgi3">
				  <img src="Assets/para-miltry.png" class="mg2 mgi4">
				  <span class="txt1 txti1">ARMY</span>
				  <span class="txt2 txti2">NAVY</span>
				  <span class="txt3 txti3">AIR-FORCE</span>
				  <span class="txt4 txti4">PARA-MILITARY</span>
				</div>
				<h6>PARA-MILITARY FORCE|BSF|AR|CISF|CRPF|ITBP|SSB</h6>
				<h6>SSC|NDA|UPSC|POLICE|RAILWAYS|INDIA POST</h6>
			</div><!--div2-->

			<!--section 3-->
			<div id="order">	
				<h4>Place your order Now!</h4>
				<h4 class="color"><i style="font-size:21px;" class="fa">&#xf156;</i>&nbsp;250 Only</h4>
				<h6 class="color" style="font-size:18px;">Cash on delivery available.</h6>
				<form class="form-inline" action="sainikproject.php" name="Form" method="post" onsubmit="validateForm();">
					
					<label for="name" style="margin-left:15px;margin-top: -12px;">Name:</label>
					<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">

					<label for="mobile" style="margin-left:10px;">Mobile:</label>
					<input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control">

					<label for="email" style="margin-left: 20px;">Email:</label>
					<input type="text" name="email" id="email1" placeholder="Enter Email Address(Optional)" class="form-control">

					<label for="address" style="margin-left:3px;margin-top:-80px;" id="address_label">Address:</label>
					<textarea name="address" id="address" placeholder="Enter Shipping Address" class="form-control" style="height:125px;"></textarea>

					<label for="blang" style="margin-top:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book:<br>Language</label>
					<!-- <label class="select_drop"> -->
					<select name="blang" id="blang" class="form-control">
						<option>Hindi</option>
						<option>Marathi</option>
						<option>Kannada</option>
					</select>
					<!-- </label> -->

					<label for="copies" class="copy" style="margin-left:14px;" >Copies:</label>
					<!-- <label class="select_drop"> -->
					<select name="copies" id="copies" class="copies form-control" onchange="changeValue(this.value)">
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
					</select>
					<!-- </label> -->

					<label for="total" class="tot" style="">Total:</label>
					<input type="text" name="total" id="total" class="rupee form-control" value="250">
					<span class="gst" style="">+GST @ 12%</span>

					<!--dynamic changing total book price based on number of selecting copies--> 
					<script>
					function changeValue(copies) 
					{
					  document.getElementById('total').value = parseInt(copies)*250;
					};
					</script>

					<label for="payment" style="margin-top:10px;margin-left:2px;" >Payment:<br>Mode</span></label>
					<!-- <label class="select_drop"> -->
					<select name="payment" id="payment" class="form-control">
						<option>Cash on Delivery</option>
						<option>Banking with Deposity</option>
						<option></option>
					</select>
					<!-- </label> -->
					<span class="shipping_chr" style="">Cash on Delivery and shipping charges Rs.50</span><br><br>

					<button type="submit" name="submit" id="submit" class="btn plc_ord" style="">PLACE ORDER</button>
				
				</form>

				<!--validating form is filled or not and displaying alert message-->
				<script>
					function validateForm()
					{
						var a=document.forms["Form"]["name"].value;
						var b=document.forms["Form"]["mobile"].value;
						var c=document.forms["Form"]["email"].value;
						var d=document.forms["Form"]["address"].value;
						if(a==null || a=="", b==null ||b=="", c==null || c=="", d==null || d=="")
						{
							alert("Please Fill All Field");
							return false;
						}
						else
						{
							alert("You have submitted order successfully");
							return true;
						}
					  } 
				</script>
			</div><!--order-->

			<!--section 4-->
			<div>
				<div id="image1">
					<h5 id="text" style="padding-top:20px;padding-bottom:20px;">About Us</h5>
				  <div class="container" style="padding-left:30px;padding-right:15px;">
					<p id="text" style="font-size:15px;">Shree Shivashakti Gurukul Vidyalaya was established in 2002.The aim of this institution is to provide pre recruitment coaching for entry into defense for students,along with intermediate/Degree course and to provide intensive long term coaching to aspiring students.Within a short time it has enabled many students to secure jobs even before completing intermediate/Degree/Long term courses.Students who are aspiring for a career in Defence sector should take good decision at school level itself.Those who get jobs at intermediate/Degree level can make their lives and their parent's life comfortable.</p>
					<p id="text" style="font-size:15px;">Adequate military training,teaching and co-curricular activities are provided equally to every cadet in addition to their academic classes.Our aim is to prepare them to be physically fit and mentally robust.As a result,the cadets attain high standard of personality development and Intelligence Quotient(IQ)for achieving cent percent results up to the level of expectations.</p>
				  </div>
				  <a href="#enquiry"><button type="button" class="btn contact_us">CONTACT US</button></a>
			    </div><!--image1-->
			</div><!--div-->

			<!--section 5-->
			<div style="background-color:rgb(255,253,205);" id="author">
				<h4 style="padding-top:25px;">Words of Wisdom from the Author</h4>
				<div style="height:230px;">
					<img src="Assets/chairman.png" style="width: 210px;margin-left: 90px;">
				</div>
				<h5>Dr. Umakant Patil</h5>
				<h6 style="font-size:15px;">Chairman S.S.G.V</h6>
				<h5>Live for Something, Rather than Die for Nothing.</h5>
				<div class="container" style="padding-right:30px;padding-left:30px;">
					<P>Mere Education which cannot earn liveyhood is creating unemployment.We impart training for students to help them get employed through our vocational training.This book contains objective type Q&A which will help cadets in the recruitment exams.Also the training includes Quantitative,Qualitative,Aptitude and Personality Development programs to help students get through the recruitment process.</p>
					<p>On behalf of all the staff and professors of this esteemed organization,I welcome all the cadets who wish to enroll in this academy.The role of our academy is not only provide academic excellence,but to motivate each student to be life long learner,good thinker and productive member of every changing society.</p>
				</div>
				<h5>"We make masterpiece out of raw mud."</h5>
			</div><!--author-->

			<!--section 6-->
			<div style="background-color:rgb(255,255,255);" id="enquiry">
			    <h4 style="padding-top:40px;">Contact Us</h4>
				<h5 style="color:rgb(255,123,56);">Leave us a message</h5>
				<form class="form-inline" action="sainikproject.php" name="Form" method="post" onsubmit="validateForm1();">

					<label for="name" style="margin-left:22px;">Name:</label>
					<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">

					<label for="mobile" style="margin-left:18px;">Mobile:</label>
					<input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control">

					<label for="email" style="margin-left:14px;">Email:</label>
					<input type="text" name="email" id="email" placeholder="Enter Email Address(Optional)" class="form-control">

					<label for="message" style="margin-left:3px;margin-top: -80px;">Message:</label>
					<textarea name="message" id="message" placeholder="Enter Message(Optional)" class="form-control" style="height:125px;"></textarea>
					<button type="submit" name="send_message" id="send_message"  class="btn send_msg" style="">SEND MESSAGE</button>
				</form>
				<script>
					function validateForm1()
					{
						var p=document.getElementById("name").value;
						var q=document.getElementById("mobile").value;
						var r=document.getElementById("email").value;
						var s=document.getElementById("message").value;
						if(p==null || p=="", q==null ||q=="", r==null || r=="", s==null || s=="")
						{
							alert("Please Fill All Field");
							return false;
						}
						else
						{
							alert("You have submitted message successfully");
							return true;
						}
					}
				</script>
				<h5 style="color:rgb(255,123,56);margin-top:100px;">Contact Details</h5>
				<div id="cont_id">
					<img src="Assets/email.png" style="" id="cont_img1">
					<span style="" id="cont_det1">ssgva.anagol008@gmail.com</span>
				</div>
				<div style="margin-top:20px;" id="cont_id">
					<img src="Assets/phone.png" style="" id="cont_img2">
					<span style="" id="cont_det2">0831-2480228, +91-8722013157</span>
				</div>
				<div style="margin-top:20px;" id="cont_id">
					<img src="Assets/location.png" style="" id="cont_img3">
					<span style="" id="cont_det2">Shri Shiva Shakti Gurukul Vidyalaya<br></span> <span style="" id="cont_det3"> Anagol-Vadgaon Road,Sahayadri Colony<br></span><span style="" id="cont_det3"> Bhagya Nagar, 7th Cross,Belagavi-06</span>
				</div>
			</div><!--enquiry-->

		</div><!--col-lg-4 col-md-4 col-sm-12 col-xs-12-->
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div><!--row-->
	</div><!--container-->
</body>
</html>