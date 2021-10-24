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

  <section>
    <form action="phpcodes/oprationcodes.php" method="POST">
      <div class="container">
        <h4>all student</h4>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th scope="col">gender</th>
              <th scope="col">birthday</th>
              <th scope="col">delete</th>

            </tr>
          </thead>

          <tbody>

            <?php

            $sql = "SELECT * FROM users where rol_id = 1";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
            ?>
                <tr>

                  <th scope="row"><?php echo "{$row['users_id']}" ?></th>
                  <td><?php echo "{$row['user_name']}"  ?></td>
                  <td><?php echo "{$row['user_email']}" ?></td>
                  <td><?php echo "{$row['user_password']}" ?></td>
                  <td><?php echo "{$row['user_birthday']}" ?></td>
                  <td><?php echo "{$row['user_gender']}" ?></td>
                  <form action="phpcodes/oprationcodes.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo "{$row['users_id']}" ?>">
                    <td><button name="delete_student" class="btn btn-danger">delete</button></td>
                  </form>
                  <form method="post" action="./edit_user.php">
                    <input type="hidden" name="user_edit_id" value="<?php echo "{$row['users_id']}" ?>">
                    <td><button name="edit_student" type="submit" class="btn btn-primary">
                        edit
                      </button></td>
                  </form>

              <?php
              }
            } else {
              echo "0 results";
            }
              ?>
                </tr>

          </tbody>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $userid; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="login-email text-field">
                    <label for="email" class=" style-label"> email:</label>
                    <input type="text" class="form-control text-field" id="email" name="email" placeholder="enter your email">
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
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>






  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>