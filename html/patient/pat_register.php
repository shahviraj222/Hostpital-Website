<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">         
      <title> Bootstrap 4 Registration Form Example </title>  
      <style>  
      body {  
      color: #3592e9 ;  
      }  
      </style>  
   </head>  
   <body>  
   <form method="POST">
<section class="h-200 bg-dark">  
  <div class="container py-5 h-200">  
    <div class="row d-flex justify-content-center align-items-center h-200">  
      <div class="col">  
        <div class="card card-registration my-4">  
          <div class="row g-0">  
            <div class="col-xl-6 d-none d-xl-block">  
              <img  
                src="Hospital patient-amico.png"  
                alt="Sample photo"  
                class="img-fluid"  
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"  
              />  
            </div>  
            <div class="col-xl-6">  
              <div class="card-body p-md-5 text-black">  
                <h3 class="mb-5 text-uppercase"> Patient registration form </h3>  
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m" name=fname class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1m"> First name </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n" name=lname class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1n"> Last name </label>  
                    </div>  
                  </div>  
                </div>  
                <!-- <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1m1"> Mother's name </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1n1"> Father's name </label>  
                    </div>  
                  </div>  
                </div>   -->
                
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8"  name=address class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Address </label>  
                </div>  
                  <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8"  name=pno class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Phone Number </label>  
                </div>  
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">  
                  <h6 class="mb-0 me-4"> Gender: </h6>  
                  <div class="form-check form-check-inline mb-0 me-4">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name=gender 
                      id="femaleGender"  
                      value="option1"  
                    />  
                    <label class="form-check-label" for="femaleGender"> Female </label>  
                  </div>  
                  <div class="form-check form-check-inline mb-0 me-4">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name=gender 
                      id="maleGender"  
                      value="option2"  
                    />  
                    <label class="form-check-label" for="maleGender"> Male </label>  
                  </div>  
                  <div class="form-check form-check-inline mb-0">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name=gender  
                      id="otherGender"  
                      value="option3"  
                    />  
                    <label class="form-check-label" for="otherGender"> Other </label>  
                  </div>  
                </div>  
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <select name = state class="select">  
                      <option value="1"> State </option>  
                      <option value="2"> Panjab </option>  
                      <option value="3"> Bihar </option>  
                      <option value="4"> Uttar Pradesh </option>  
                    </select>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <select name=city class="select">  
                      <option value="1"> City </option>  
                      <option value="2"> Ludhiana </option>  
                      <option value="3"> Lucknow </option>  
                      <option value="4"> Patna </option>  
                    </select>  
                  </div>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="date" name=DOB id="form3Example9" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example9"> Date of Birth </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" name=pin id="form3Example90" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example90"> Pincode </label>  
                </div>  
                <!-- <div class="form-outline mb-4">  
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example99"> Course </label>  
                </div>   -->
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example97" name=emailid class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example97"> Email ID </label>  
                </div>  
                <div class="d-flex justify-content-end pt-3">  
                  <button type="button" class="btn btn-light btn-lg"> Reset all </button>  
                  <input type="submit"  name=submit value= "submit" class="btn btn-primary btn-lg ms-2"/> 
                </div> 
         
              </div>  
              
            </div>  
          </div>  
        </div>  
      </div>  
    </div>  
  </div>  
</section>  
</form>
</body>  
</html>  

<?php 
include "../../database/db_configure.php";
include "../header.php";
if(isset($_POST['submit']))
{
  echo "hiii";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pno = $_POST['pno'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city = $_POST['city'];
$DOB = $_POST['DOB'];
$pin = $_POST['pin'];
$emailid = $_POST['emailid'];

$query = "insert into paitent values('$fname','$lname','$pno','$emailid','$state','$pin','$DOB','$gender','$city)";
$n = my_iud($query);
if($n==1)
{
echo '<script> swal("success","Sign up! Successfull","success").then(function() {
    window.location = "login.php";
});
</script>';
}
else
{
echo '<script>swal("Failed","something went wrong","warning");</script>';
}
}
?>