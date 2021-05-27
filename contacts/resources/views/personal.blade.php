
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>


	<style>

		.divsty{
			width: 50%;
			margin-left: 25%;
			margin-top: 7%;
		}
		input{
			width: 90%;
			display: block;
			margin-top: 20px;
			height: 30px;
		}
		button{
			margin-top: 20px;
			border-style: solid;
			border-radius: 5px;
			background-color: transparent;
			padding:10px 20px;
			letter-spacing: 1px;
			display: block;
			border-width: 4px;
			font-weight: bolder;
		}
	</style>
</head>
<body>


	@if(session()->has('meupdated'))
		<script >
			alert('Updated');
		</script>
	@endif


<div class="divsty" >

	<h1>Create Contact</h1>


	@foreach($me as $account)
<form action="/update_me" method="get">


	<input required="" type="hidden" name="user_id" required="" value="{{session()->get('user_id')}}">
	<input required="" type="text" name="name" required="" placeholder="Name" value="{{$account->name}}">Name
	<input required="" type="text" name="username" required="" placeholder="Username" value="{{$account->username}}">Username
	<input required="" type="text" name="email" required="" placeholder="Type" value="{{$account->email}}">Email 
	<input required="" type="text" name="raw_password" required="" placeholder="Type" value="{{$account->raw_password}}">Raw Password
	<input required="" type="text" name="" required="" placeholder="Type" value="{{$account->password}}">Hashed Password 

	<button type="submit">ADD</button>
</form>

	@endforeach





</div>

</body>
</html>