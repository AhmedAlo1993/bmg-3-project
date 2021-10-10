<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>login sayfa</title>
   
</head>
<body class="bodylogin">
    
    <section class="login-section ">
        <div>
            <form >
                <h2 class="register-title title ">System registeration page </h2>
                <div class="register-content login-content ">
                    <div class="login-email text-field">
                        <label for="email" class=" style-label"> email:</label>
                        <input type="text" class="form-control text-field" id="email" name="email" placeholder="enter your email">
                    </div>
                    <div class="login-password text-field">
                        <label for="password" class=" style-label"> password :</label>
                        <input type="password" class="form-control text-field " id="password" name="password" placeholder="enter your password">
                    </div>
                    <div class="login-password text-field">
                        <label for="name" class=" style-label"> name :</label>
                        <input type="text" class="form-control text-field" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="login-password text-field">
                        <label for="age" class=" style-label">birthday :</label>
                        <input type="date" class="form-control text-field" id="age" name="date" placeholder="enter your birthday ">
                    </div>
                    
                    <label for="country" class="my-1 mx-2 style-label"> gender :</label>
                    <input type="radio" value="male" name="gender" class="style-label">
                    <span class="ml-1" style="font-size:18px">male</span>
                    <input type="radio" value="female" name="gender" class="style-label">
                    <span style="font-size:18px">female</span>
                    <br>
                    <button type="submit" class="btn btn-success " name="register"> new account</button>
                    <span class="login-label mt-2 style-label mr-3">if you have an account :<a href="login.php">Click here </a></span>
    
                </div>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>