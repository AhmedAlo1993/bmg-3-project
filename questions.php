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
             <a class="nav-link active1  link" href="students.php">students <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item mar">
             <a class="nav-link link" href="grades.php">grades </a>
           </li>
           <li class="nav-item mar">
            <a class="nav-link active link" href="questions.php">questions</a>
          </li> 
         <li class="nav-item mar">
               <a class="nav-link link" href="admins.php">admins</a>
        </li>

         </ul>
         
      
    </div>
   </div>
     </nav>
  
<section>
    <div class="container">
      <form action="">

        <div class="" style="width: 65%;">
            <label for="question" class="mt-4 style-label">Question :</label>
            <input rows="3" cols="5" type="text" value="" name="question" class="form-control " id="question" placeholder="enter question" > 
        </div>
        <div class=" ">
            <label for="option3" class="my-1 style-label label-option">Question Score:</label>
            <input type="number" value="" class="form-control "name="questionscore" id="option3" placeholder=" Enter Score question" style="width: 40%;">
           
        </div>
        <div class="option">
            <label for="option1" class="my-1 style-label label-option"> A:</label>
            <input type="text"value=""  class="form-control " id="option1 "name="Aoption" placeholder="first option" style="width: 40%;">
        </div>
        <div class="option option22">
            <label for="option2" class="my-1 style-label label-option"> B:</label>
                <input type="text"value=""  class="form-control" id="option2"name="Boption" placeholder=" secound option" style="width: 40%;">
        </div>

        <div class="option ">
            <label for="option3" class="my-1 style-label label-option"> C:</label>
            <input type="text"value=""  class="form-control " id="option3"name="Coption" placeholder=" third option" style="width: 40%;">
           
        </div>
             <label for="" class="my-1 style-label label-option ">true answer :</label>
             <span>A</span>
             <input type="radio" name="trueanswer" value="A">
             <span class="mx-3">
             <span>B</span>
             <input type="radio" name="trueanswer" value="B">
           </span>
             <span>C</span>
             <input type="radio" name="trueanswer" value="C">
        <div> 

        </div>
        <span>Exam name :</span>
        <select name="exams" value="<?php echo  $beforupdateexams; ?>" id="" class="selectoption" >
            <option hidden> select exam</option>
            <option> matematik</option>
            <option > programlama</option>
            <option > tarih</option>

          </select>
          <div>
        <button type="submit"  name="insertque" class="btn btn-success my-3" >insert</button>
            
        <button type="reset" class="btn btn-dark my-3" id="" >clear</button>
        </div>
      </form>
    
</div>

</section>


     <section>
           <div class="container">
            <h4>all student</h4>

            <table class="table">
                <thead class="thead-dark ">
                    <tr>
                      <th scope="col"> question</th>
                      <th scope="col">Score </th>
                      <th scope="col">first option </th>
                      <th scope="col">secound option </th>
                      <th scope="col">third option</th>
                      <th scope="col">true answer </th>
                      <th scope="col"> exam</th>
                      <th scope="col"> control </th>
      
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <th scope="row">the comments in php language:</th>
                    <td>10</td>
                    <td>/#</td>
                    <td>#</td>
                    <td>**</td>
                    <td>B</td>
                    <th > programlama</th>
                    <td><button class="btn btn-danger">delete</button></td>

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