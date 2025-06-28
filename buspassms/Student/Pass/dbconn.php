<?php
// database connection
// database name= feepay table_name=payment
$con=mysqli_connect('localhost','root','','buspassdb');

if(('submit'))
{
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'];
$image=$_POST['image'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$amount=$_POST['amount'];

mysqli_query($con,"INSERT INTO users(name,number,email,date,image,source,destination,amount)VALUES('$name','$enrollment',' $department',' $email','$contact','$amount','$payment_id','$payment_status')");


}
?> 

<?php
// database connection
// database name= feepay table_name=payment
$con=mysqli_connect('localhost','root','','buspassdb');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'];
$image=$_POST['image'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$amount=$_POST['amount'];

mysqli_query($con,"INSERT INTO pass(name,number,email,date,image,source,destination,amount)VALUES('$name','$number',' $email',' $date','$image','$source','$destination','$amount')");

header('Location: redirect.php');

}
?> 


<html>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
  }
  body {
    font-family: "Inter", Arial, Helvetica, sans-serif;
  }
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>
<body>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="redirect.php" method="POST">
        <h2><center>Submit Form and Get Your pass</center></h2><br><br>
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input type="text" name="name" id="name" placeholder="Full Name"class="formbold-form-input" required/>
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input type="number"name="number" id="phone"placeholder="Enter your phone number"class="formbold-form-input"required/>
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" required/>
      </div>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input type="date" name="date" id="date"class="formbold-form-input" required/>
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="file" class="formbold-form-label"> Photo</label>
            <input type="file" name="image" id="time" class="formbold-form-input" required/>
          </div>
        </div>
      </div>

      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-">
          Source to Destination
        </label>
        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input type="text" name="source"id="area"placeholder="Enter Source"class="formbold-form-input"
              required/>
            </div>
          </div>
        
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input type="text" name="destination" id="city" placeholder="Enter Destination" class="formbold-form-input"
              required/>
            </div>
          </div>
         
        </div>
      </div>
      <div class="formbold-mb-5">
        <label for="amount" class="formbold-form-label"> Amount </label>
        <input type="number" name="amount" id="amount" placeholder="Enter Amount"class="formbold-form-input" required/>
      </div>
      <div>
        <input type="submit"  class="formbold-btn" name="submit" value="GET YOUR PASS" >
      </div>
    </form>
  </div>
</div>
<!-- <script type="text/javascript">
  myFunction()
  {
    window.location.href('redirect.php');
  }
  </script> -->

  <!-- <button id="myBtn">Redirect</button> -->
  <!-- <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo 'redirect.php'; ?>';
    });
  </script> -->