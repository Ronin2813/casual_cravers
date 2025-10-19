<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
       .labels, .inputs{
        display:grid;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="title"><p>Sign Up</p></div>
        <form id="signup" action="useradd.php" method="post">
            <div class="lables">
                <label for="fname" >Fullname</lablel><br>
                <label for="email">Email</lablel><br>
                <label for="phone">Number</lablel><br>
                <label for="address">Address</lablel><br>
                <label for="pass">Password</lablel><br>
                <label for="cpass">Confirm Password</lablel>
            </div>
            <div class="inputs">
                <input type="text" id="fname" name="fname" placeholder="Please Enter Your Name" autofocus>
                <input type="email" id="email" name="email" placeholder="Please Enter Your Email" >
                <input type="telephone" id="phone" name="phone" placeholder="Please Enter Your Phone Number" >
                <input type="address" id="address" name="address" placeholder="Please Enter Your Address" >
                <input type="password" id="pass" name="pass" placeholder="Please Enter Your Password" >
                <input type="password" id="cpass" name="cpass" placeholder="Please Confirm Your Password" >
                <input type="submit" value="Sign up">
            </div>
            <p>Already have a account? <a href="login.php">Login </a>here</p>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('#signup').on('submit',()=>{
            var fname = $('#fname').val();
            var email = $('#email').val();
            var number = $('#phone').val();
            var address = $('#address').val(); 
            var pass = $('#pass').val();
            var cpass = $('#cpass').val();
            var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/;
            var pass_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).{8,24}$/;

            if(fname.length < 3 || fname.length > 20){
                alert("Fullname must be between 3 to 20 characters");
                return false;
            }

            else if(!regex.test(email)){
                alert("Please enter a valid email address");
                return false;
            }
            
            else if(number.length !== 10 || isNaN(number)){
                alert("Please enter a valid 10 digit phone number");
                return false;
            }
            else if(address.trim().length < 10){
                alert("Please enter a valid address");
                return false;
            }
            else if(!pass_regex.test(pass)){
                alert("Password must be between 8 to 24 characters and include at least one uppercase letter, one lowercase letter, one number, and one special character.");
                return false;
            }
            else if(pass !== cpass){
                alert("Password and Confirm Password must be same");
                return false;
            }
            


        });
    </script>

</body>
</html>