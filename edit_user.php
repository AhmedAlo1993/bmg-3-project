<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-white">

        <div class="container dashdord-nav">

            <h2>Online Exam System</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navdas" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item  mar">
                        <a class="nav-link active1 active link" href="students.php">students <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mar">
                        <a class="nav-link link" href="grades.php">grades </a>
                    </li>
                    <li class="nav-item mar">
                        <a class="nav-link link" href="questions.php">questions</a>
                    </li>
                    <li class="nav-item mar">
                        <a class="nav-link link" href="admins.php">admins</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <?php
    if (isset($_POST['edit_student'])) {
        $id = $_POST['user_edit_id'];
        $query = "SELECT * FROM users  WHERE users_id ='$id'";
        $query_run = mysqli_query($con, $query);
        foreach ($query_run as $row) {
    ?>
            <form action="phpcodes/oprationcodes.php" method="POST">

                <div class="">
                    <input type="hidden" name="adidd" value="<?php echo $row['users_id']; ?>">
                    <label for="name" class=" style-label"> name:</label>
                    <input type="text" name="adname" class="form-control " value="<?php echo $row['user_name']; ?>" id="name" placeholder="enter name" style="width: 65%;" required="required">
                </div>
                <div class="">
                    <label for="email" class=" style-label"> email :</label>
                    <input type="email" name="ademail" class="form-control " value="<?php echo $row['user_email']; ?>" id="email" placeholder="enter email" style="width: 65%;" required="required">
                </div>
                <div class="">
                    <label for="password" class=" style-label"> password:</label>
                    <input type="password" name="adpassword" class="form-control  " value="<?php echo $row['user_password']; ?>" id="password" placeholder="enter password" style="width: 65%;" required="required">
                </div>
                <div class="login-password text-field">
                    <label for="birthday " class=" style-label"> birthday :</label>
                    <input type="date" name="adbirth" class="form-control" id="birthday " value="<?php echo $row['user_birthday'];?>" placeholder="enter birthday" style="width: 65%;" required="required">
                </div>
                <label for="country" class="my-1 mx-2 style-label"> gender :</label>
                <input type="radio" name="adgender" value="male" class="style-label" required="required">
                <span class="ml-4" style="font-size:18px">male</span>
                <input type="radio" name="adgender" value="female" class="style-label" required="required">
                <span style="font-size:18px">female</span>
                <br>
                <button type="submit" class="btn btn-success my-3" name="save_edit">save changes</button>
                <button type="reset" class="btn btn-dark my-3" id="">clear</button>
            </form>
    <?php
        }
    }

    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>