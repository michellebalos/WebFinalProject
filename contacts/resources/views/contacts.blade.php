<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Address Book</title>

	<style>
		body{
			padding:5px;
			font-family: sans-serif;
			background-color: #51b1b5;
			background-image: linear-gradient(to right, #95e8d6, #297d6b);
		}
		input{
			width: 70%;
			background-color: #f0f8ff;
       		display: inline-block;
        	text-align: left;
        	float: right;
        	height: 25px;
        	letter-spacing: 1px;
        	padding: 10px;
			border-radius: 5px;
			border: 1px solid;
		}
		h1 {
			text-align: center;
			padding-top: 30px;
		}
		h3 {
			text-align: center;
			margin-top: 50px;
		}
		label{
			font-size: 25px;
			margin-top: 30px;
			margin-bottom: 20px;
		}

		button{
			border-style: solid;
			background-color: #a7d9db;
			padding: 10px 20px;
			border-radius: 15px;
			letter-spacing: 1px;
			transition-duration: 0.4s;
			margin-top: 30px;
		}
		button:hover {
        	background-color: #f0f8ff;
        	color: black;
    	}
		.container{
			border:1px solid #ccc;
			padding: 20px;
        	background-color: #f0f8ff;
        	border-color: #51b1b5;
			margin-top: 30px;
			display: block; 
			width: 50%;
			margin: center;
			float: left;
		}
		.threefold{
			width: 18.5%;
			float: left;
			margin-right: 20px;
			margin-bottom: 20px;
		}
		.notes {
        	margin-top: 40px;
			font-size: 80%;
    	}
		.cc {
			text-decoration: none; 
			border-radius: 15px; 
			background-color: #95e8d6;
			padding: 5px 10px; 
			color: black; 
			border-width: 1px; 
			margin: 100px;
			border-style: solid; 
			margin-bottom: 10px;
			margin-top: 10px;
			transition-duration: 0.4s;
		}
		.cc:hover{
			background-color: #f0f8ff;
        	color: black;
		}
		#a{
			margin-right: -100px;
		}




		@media screen and (max-width: 1400px){
			.threefold{
				display: block;
				float: none;
				width: 100%;
				margin: auto;

			}
		}

	

	</style>
</head>
<body>


	<!-- @if(session()->has('login'))
		<script >
			alert('Welcome');
		</script>
	@endif -->



	@if(session()->has('updated'))
		<script >
			alert('Contact Updated!');
		</script>
	@endif


	@if(session()->has('del'))
		<script >
			alert('Contact Deleted!');
		</script>
	@endif


    @if(session()->has('createdfinal'))
        <script >
            alert('Completed');
        </script>
    @endif




<h1><b>ADDRESS BOOK</b></h1>
<h3><b>CONTACT LIST</b></h3>


<div style="text-align: right;">
	<a type='button' class='cc'id='a' href="/create">CREATE NEW CONTACT</a>
	<a type='button' class='cc' id='b' href='/logout'>LOG OUT</a>

</div>






@foreach($contacts as $con)
<form action="/save_update" method="get">
<input type="hidden" name="contact_id" value="{{$con->contact_id}}">


<div class="container">


	<div class="threefold" >
	<label for="name">CONTACT INFORMATION:</label>
	<input type="text" required=""  name="name" value="{{$con->contact_name}}"><h6>Name:</h6>
	<input type="text" required=""  name="type" value="{{$con->contact_type}}"><h6>Type:</h6>
	<input type="text" required=""  name="email"value="{{$con->contact_email}}"><h6>Email:</h6>
	</div>

	@foreach($address as $add)
		@if($con->contact_id == $add->contact_id)

		<div class="threefold">
		<label for="name">CONTACT ADDRESS:</label>
		    <input type="text" required=""  name="address_barangay" value="{{$add->address_barangay}}"><h6>Barangay:</h6>
			<input type="text" required=""  name="address_street" value="{{$add->address_street}}"><h6>Street:</h6>
			<input type="text" required=""  name="city" value="{{$add->address_city}}"><h6>City:</h6>
			<input type="text" required=""  name="zip_code" value="{{$add->address_zipcode}}"><h6>Zip Code:</h6>
			<input type="text" required=""  name="state" value="{{$add->address_state}}"><h6>State:</h6>
		</div>

		@endif
	@endforeach



	@foreach($phone as $phon)

		@if($con->contact_id == $phon->contact_id)

		<div  class="threefold">
		<label for="name">CONTACT CALLING NUMBER:</label>
			 <input type="text" required="" name="phone_home" value="{{$phon->phone_home}}"><h6>Home Phone:<h6>
			 <input type="text" required="" name="phone_cell" value="{{$phon->phone_cell}}"><h6>Cell Phone:</h6>
			 <input type="text" required="" name="phone_work" value="{{$phon->phone_work}}"><h6>Work Phone:</h6>
		</div>

	   
		@endif

	@endforeach


	<div style="text-align: right;padding-right:30px;">
		<button type="submit">UPDATE</button>
	</form>


		<form action="/del_this" style="display: inline;" method="get">
			<input type="hidden" name="contact_id" value="{{$con->contact_id}}">
		<button>DELETE</button>
		</form>
		<p class='notes'>***Click the field to edit information.</p>

	</div>
	

</div>


@endforeach


</body>
</html>