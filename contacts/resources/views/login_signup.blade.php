<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Welcome</title>


    <style>
    body {
        font: 14px sans-serif;
        padding: 5px;
        /* background-color: #f0f8ff; */
        background-image: linear-gradient(to right, #95e8d6, #297d6b);
    }
    h1 {
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        letter-spacing: 5px;
        color: black;
    }
    h3 {
        text-align: center;
        letter-spacing: 5px;
        margin-bottom: 20px;
    }
    button {
        width: 40%;
        float: right;
        margin-top: 20px;
        padding: 10px 20px;
        letter-spacing: 5px;
        background-color: #a7d9db;
        border-radius: 15px;
        border-style: solid;
        transition-duration: 0.4s;
    }
    button:hover {
        background-color: #f0f8ff;
        color: black;
    }
    .form {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 50px;
        background-color: white;
        border-color: #51b1b5;
        margin: 0 auto;
        margin-bottom: 50px;
        background-color: #f0f8ff;
    }
    .form label {
        display: inline-block;
        width: 120px;
        text-align: 10px right;
        margin-top: 5px;
    }
    .form input {
        width: 70%;
        display: inline-block;
        text-align: left;
        float: right;
        height: 20px;
        border: 1px solid;
        letter-spacing: 1px;
        padding: 10px;
        border-radius: 5px;
        font-size: 80%;
        background-color: #f0f8ff;
    }
    .notes {
        margin-top: 40px;
    }
    .div2 {
        display: inherit;
        width: 45%;
        float: auto;
        margin: auto;
        padding: 50px;
    }
    .div3 {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>

    @if(session()->has('signup'))
    <script>
    alert('Successsful Signup');
    </script>
    @endif



    @if(session()->has('empty'))
    <script>
    alert('Empty Field');
    </script>
    @endif


    <div>
        <h1><b>ADDRESS BOOK</b></h1>
        <div class="div2">
            <form class='form' style="height: 270px;" action="/login" method="get">
                <h3><b>LOGIN</b></h3>
                <div class='div3'>
                    <label for="username"><b>Username: </b></label>
                    <input type="text" id='inp' name="username" required="" placeholder="Enter Username">
                </div>

                <div class='div3'>
                    <label for="password"><b>Password: </b></label>
                    <input type="password" id='inp' name="password" required="" placeholder="Enter Password">
                </div>
                <button type="submit"><b>LOGIN</b></button>

            </form>

        </div>

        <div class="div2">
            <form class='form' style="height: 400px;" action="/signup" method="get">
                <h3><b>SIGNUP</b></h3>
                <p class='notes'>Doesn't have an account? Please fill in this form to create an account.</p>
                <div class='div3'>
                    <label for="name"><b>Complete Name: </b></label>
                    <input type="text" name="name" required="" placeholder="Enter Complete Name">
                </div>

                <div class='div3'>
                    <label for="username"><b>Username: </b></label>
                    <input type="text" name="username" required="" placeholder="Enter Username">
                </div>

				<div class='div3'>
                    <label for="email"><b>Email Address: </b></label>
                    <input type="email" name="email" required="" placeholder="Enter Email Address">
                </div>

                <div class='div3'>
                    <label for="password"><b>Password: </b></label>
                    <input type="password" name="password" required="" placeholder="Enter Password">
                </div>
                <button type="submit"><b>REGISTER</b></button>

            </form>

        </div>
    </div>

</body>

</html>