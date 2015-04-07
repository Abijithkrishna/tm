<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edufee</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
    <link rel="stylesheet" href="css/student.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4 offset4">
            <form class="form-signin" id="form" action="student.php" method="post">
                <h2 class="form-signin-heading">Student Login</h2>
                <input type="email" id="email" name="email" class="input-block-level" placeholder="Email address" required>
                <input type="password" id="password" name="password" class="input-block-level" placeholder="Password" required>

                <p class="text-error"></p>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <button class="btn btn-large btn-primary submit" type="submit" onclick="send();">Sign in</button>
            </form>
        </div>
    </div>
</div>
<script>
    function send() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        $.post("loginvalidate.php", {
                email: email,
                password: password
            }, function (data) {
                $('.text-error').html(data);
                if(data === "success")
                    document.getElementById("email").value=email;
                document.getElementById("password").value=password;
                document.getElementById('form').submit();
            }
        );
    }
</script>
</body>
</html>