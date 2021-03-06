






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/end.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>

    

</head>
<?php require_once 'nav.php' ?>

        <body style="background-color: #ccd5e3;">


        <div id="end" class="flex-center flex-column p-0">
          
            <div >



                 <div class="jumbotron  align-middle shadow-lg  mb-5 bg-black rounded mt-5 " style=" margin-right: auto;margin-left: auto; height: 300% ;padding: 0px; width: 70%; "> 
                  
                  <div class="row m-0 p-0" >
                    <div class="col-lg-6 m-0 ,p-0" style="background: rgb(23,13,193);
                background: linear-gradient(90deg, rgba(23,13,193,1) 0%, rgba(144,170,203,1) 0%, rgba(213,224,238,1) 96%);
                
                ">
                <img src="images/img16.png" class="mt-3 ml-3 " style="width:35%; height: 25%;">
                <div >
                <h2 class="text-white text-left mx-5 my-3" > MADRS Test </h2>
                   <p class="text-white text-left mx-5" style="font-size:13px">To accurately test your level of depression , along with the MADRS test which evaluates core symptoms of depression  fill in the form details by follwoing the below instructions. </p>
                   <ol class="text-white text-left mx-5 mb-5" style="font-size:13px">
                       <li>If you are a male then enter 1 or if you are a female then enter 2 in the gender space .</li>
                       <li>Rate your education on the scale of 10 for the education space.</li>
                       <li>Enter your avarage daily resting period in Hrs</li>
                   </ol>
                </div>
                    </div>
                    <div class="col-lg-6 bg-white">
                         <h2 class=" text-center mt-3 mb-4" id="finalScore" ><strong>0</strong></h2>
                 <form class="mb-3" style="color: #90AACB;" method="post" action="end.php">
                  <!-- <form class="mb-3" style="color: #90AACB;" action="{{ url_for('predict')}}" method="post">
                    <div id="add_err2"></div> -->

                     <input type="text" class="form-control mb-3" placeholder="Username " required="required" name="username" maxlength="50" id="username">
                    <div class="row">
                     

                        <div class="col">
                          <input type="text" class="form-control" placeholder="Gender" name="gender" required="required" maxlength="1" id="gender">
                        </div>

                         <div class="col">
                          <input type="text" class="form-control" placeholder="MADRS Score" required="required" name="score" maxlength="2" id="score">
                        </div>
                      </div>
                      <div class="row mt-4 mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Education" name="education" required="required" maxlength="2" id="education">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Resting Period(in Hrs)" name="rest" required="required" maxlength="2" id="rest">
                        </div>
                      </div>
                   
                <div class="text-center">
                   <?php require_once 'testdetails.php' ?>
                </div>
                
                <button type="submit" class="btn text-white ml-4 mt-4 rounded-0" style=" width:85%; box-shadow: 4px 4px 3px #c7c7c7; background-color:#90AACB;" id="prediction" name="prediction">Predict</button>
                 
                
                </form>
                <h5 class="text-center">{{ prediction_text }}</h5>
                </div>
                 </div>
                 
                 
                </div>
           
        </div>
    </div>
    
    <script src="js/end.js">
    </script>
</body>

</html>