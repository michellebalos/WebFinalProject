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
        h2{
            text-align: center;
			margin-top: 30px;
			margin-bottom: 50px;
        }
        h4{
            margin-top: 30px;
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
			height: 750px;;
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
        label{
			display: inline-block;
            width: 150px;
            text-align: 10px right;
            margin-top: 5px;
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


    </style>
</head>
<body>
    @if(session()->has('created'))
        <script >
            alert('Created');
        </script>
    @endif



<h1><b>ADDRESS BOOK</b></h1>
<div class="divsty">


    <h2>ADDITIONAL INFORMATION</h2>



@foreach($con_det as $con)

<h4>CONTACT INFORMATION:</h4>

<label for="name">Name: </label>
<input type="text" name="name"  required="" value="{{$con->contact_name}}">
<label for="type">Type: </label>
<input type="text" name="type" required=""  value="{{$con->contact_type}}">
<label for="email">Email Address: </label>
<input type="text" name="email" required=""  value="{{$con->contact_email}}">



@endforeach
    

<form action="/additional" method="get">

    <input type="hidden" name="contact_id" value="{{$con->contact_id}}">

    <h4>CONTACT ADDRESS:</h4>

    <label for="address_barangay">Barangay: </label>
    <input type="text"  required="" name="address_barangay" placeholder="Enter Barangay...">

    <label for="address_street">Street: </label>
    <input type="text"  required="" name="address_street" placeholder="Enter Street...">

    <label for="city">City: </label>
    <input type="text"  required="" name="city" placeholder="Enter City...">

    <label for="state">State: </label>
    <input type="text"  required="" name="state" placeholder="Enter State...">

    <label for="zip_code">Zip Code: </label>
    <input type="text"  required="" name="zip_code" placeholder="Enter Zip Code...">
    

    <h4>CONTACT CALLING NUMBER:</h4>

    <label for="phone_home">Home Phone: </label>
    <input type="text"  required="" name="phone_home" placeholder="Enter Home Phone...">

    <label for="phone_cell">Cell Phone: </label>
    <input type="text" required=""  name="phone_cell" placeholder="Enter Cell Phone...">
    
    <label for="phone_work">Work Phone: </label>
    <input type="text" required=""  name="phone_work" placeholder="Enter Work Phone...">

    <button type="submit"><b>DONE</b></button>


</form>







</div>





</body>
</html>