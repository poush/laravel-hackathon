<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{ Html::style('css/login.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <form class="form-signin">
            <h2 class="form-signin-heading">LOGO</h2>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus />
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>

    <footer>
        &copy; 2016 |  ICMR. All Rights Reserved.
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

