<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/signup.css">

<div class="testbox">
    <h1>Registration</h1>

    <form action="/">
        <hr>
        <div class="accounttype">
            <label for="radioOne"  chec>Signup Form</label>
        </div>
        <hr>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="name" placeholder="Email" required />
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Name" required />
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="name" id="name" placeholder="Password" required />
        <div class="gender">
            <input type="radio" value="None" id="male" name="gender" checked />
            <label for="male" class="radio" chec>Male</label>
            <input type="radio" value="None" id="female" name="gender" />
            <label for="female" class="radio">Female</label>
        </div>
        <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
        <a href="#" class="button">Register</a>
    </form>
</div>