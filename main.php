
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
   <div class="containner">
       <div class="row">
           <div class="col-md-4" >
          
           </div>
           <div class="col-md-4" >
            
           </div>
           <div class="col-md-4" >
            
           </div>
       </div>
   
       <div class="row">
       <div class="col-md-4" >
       <h3 class="bg-light" id="response"></h3>
           </div>
           <div class="col-md-4" >
                                <form action="submit.php" method="post">
                                        <div class="mb-3">
                                 <div class="mb-3">
                                   <?php 
                                 
                                 if(isset($_SESSION['captchaerror'])){
                                   ?>
                                       <h4 class="bg-danger" >Captcha not matcha</h4>
                                   <?php
                                    unset($_SESSION['captchaerror']);
                                 }
                                   
                                   
                                   ?>
                                </div>
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" required  class="form-control" name="name">
                                      </div>  
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" required class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Date of birth</label>
                                    <input type="date" name="dob" required class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">About your self</label>
                                </div>
                                <div class="mb-3">
                                        <textarea class="form-control" required name="about" id="" cols="10" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Enter captcha</label>
                                    <input type="text"  class="form-control" required name="captcha" id="captcha">
                                </div>
                                <div class="mb-3">
                                <img src="captcha.php">   
                            </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
           </div>
           <div class="col-md-4" >
            
           </div>
       </div>

   </div> 

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
setInterval(function()
{
    $.ajax({ 
 url: 'response.php', 
 type: 'get', 
 // dataType: 'json', 
 // data: data,
  })
 .done(function(response) {
       $("response").html(response); 
       if(response== '00:00'){
        window.location = "over.php";
       }else{
        document.getElementById("response").innerHTML =response;
       }


      console.log(response);
 }) .fail(function(xhr) { 
       console.log(xhr); 
 });
},1000);
</script>
</body>
</html>