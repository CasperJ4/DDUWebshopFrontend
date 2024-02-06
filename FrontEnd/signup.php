<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/signup.css">

<div class="testbox">
    <h1>Registration</h1>

    <form method="POST" action=""> <!-- Make sure this points to your PHP file -->
        <hr>
        <div class="accounttype">
            <label>Signup Form</label>
        </div>
        <hr>
        <label id="icon" for="Username"><i class="icon-user"></i></label>
        <input type="text" name="username" id="Username" placeholder="Username" required />
        <label id="icon" for="password"><i class="icon-shield"></i></label>
        <input type="password" name="password" id="password" placeholder="Password" required />
        <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
        <!-- Hidden submit button -->
        <input type="submit" id="submit-form" style="display: none;" />
        <a href="#" class="button" onclick="document.getElementById('submit-form').click(); return false;">Register</a> <!-- Styled link that triggers the hidden submit button -->
    </form>
</div>