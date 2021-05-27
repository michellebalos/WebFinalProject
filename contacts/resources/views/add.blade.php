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
		h1{
			text-align: center;
       		padding: 10px;
        	margin-top: 30px;
			margin-bottom: 50px;
        	letter-spacing: 5px;
        	color: black;
		}
		h3{
			text-align: center;
			margin-top: 30px;
			margin-bottom: 50px;
		}
		.divsty{
			border:1px solid #ccc;
			padding: 20px;
        	background-color: #f0f8ff;
        	border-color: #51b1b5;
			border-radius: 5px;
			margin-top: 30px;
			display: block; 
			width: 50%;
			height: 350px;
			margin: auto;
			float: auto;
		}
		input{
			width: 70%;
        	display: inline-block;
        	text-align: left;
        	float: right;
     		height: 25px;
        	letter-spacing: 1px;
        	padding: 10px;
        	border-radius: 5px;
			border: 1px solid;
			font-size: 80%;
			background-color: #f0f8ff;
		}
		button{
			border-style: solid;
			background-color: #a7d9db;
			padding: 10px 20px;
			border-radius: 15px;
			letter-spacing: 1px;
			transition-duration: 0.4s;
			margin-top: 40px;
			float: right;
		}
		button:hover {
        	background-color: #f0f8ff;
        	color: black;
    	}
		label{
			display: inline-block;
        	width: 120px;
        	text-align: 30px right;
        	margin-top: 5px;
			margin-right: 1em;
   		 }
	</style>
</head>
<body>

<h1><b>ADDRESS BOOK</b></h1>
<div class="divsty" >

<h3>CREATE NEW CONTACT</h3>
<form action="/insert" method="get">


	<input type="hidden" name="user_id" required="" value="{{session()->get('user_id')}}">
	<label for="name">Name:</label>
	<input type="text" name="name" required="" placeholder="Enter Name...">
	<label for="type">Contact Type:</label>
	<input type="text" name="type" required="" placeholder="Enter Type...">
	<label for="email">Email Address:</label>
	<input type="text" name="email" required="" placeholder="Enter Email Address...">

	<button type="submit"><b>ADD TO LIST</b></button>
</form>





</div>

</body>
</html>