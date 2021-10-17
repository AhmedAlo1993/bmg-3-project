
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
         <a class="nav-link active  link" href="ogrenci_exam.php">My Exams <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item mar">
         <a class="nav-link link" href="ogrenci_grades.php">My grades </a>
       </li>
      

     </ul>
     
  
</div>
</div>
 </nav>

 <section>
           <div class="container">
            <h4>all my exams</h4>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Exam number</th>
                    <th scope="col">Exam name</th>
                    
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>matamatik</td>
                    
                    <td><button class="btn btn-success">start</button></td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>algoritma ve programlama</td>
                    
                    <td><button class="btn btn-success">start</button></td>

                  </tr>
                </tbody>
              </table>

           </div>
     </section>
   






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>