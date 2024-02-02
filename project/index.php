<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $idno = $_POST['idno'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password=md5($_POST['password']);
        $gender = $_POST['gender'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "regi";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id,name, dob, idno,email,phone,password,gender) VALUES ('0', '$name', '$dob', '$idno','$email','$phone','$password','$gender')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>

<html>
 <link rel="stylesheet" href="st.css">
 <form action="register.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b> Full Name</b></label>
    <input type="text" placeholder="Enter Full name" name="email" id="email" required>

    <label for="d.o.b"><b>D.O.B</b></label>
    <input type="date" placeholder="Enter D.O.B" name="d.o.b" id="d.o.b" required>
<br>
<br>
    <label for="id.no"><b>ID.NO</b></label>
    <input type="number" placeholder="Enter ID NO" name="id no" id="id no" required>
  <br><br>
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
	
	<label for="phone"><b>Phone</b></label><br>
     <input type="text" name="phone" size="10"/> 
     <br> <br> 

	<label for="password"><b>password </b></label>
    <input type="password" placeholder="Enter password" name="password" id="password" required>
	<p>
			Gender:
			<input type="radio" name="gender" value="male" id="female">Male
			<input type="radio" name="gender" value="female" id="female">Female
<br><br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</html> 