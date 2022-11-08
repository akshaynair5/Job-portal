<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body{
            background-image: url('f94c2916-6a4e-4cbc-9bc1-9f0e0f4ee46c.png');
            background-size:cover;
        }
        form{
            background-color: black;
            margin-top:6em;
            margin-left:30em;
            margin-right:15em;
            padding:30px;
            box-shadow: 10px 10px 8px 10px #888888;
            border-radius:15px;
        }
        label{
            color:white;
        }
        form h2{
            color:white;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form action="validation.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputemail" class="form-label">Email address</label>
        <input type="Email" class="form-control" id="exampleInputemail" aria-describedby="emailhelp" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" >Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="Login">Submit</button>
    <h2>Not a member? </h2> <a href="register.php"> Sign up </a>
    </form>
    </div>

</body>
</html>