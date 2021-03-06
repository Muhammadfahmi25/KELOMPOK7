<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(gambar.jpg);
}


input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "PENDAFTARAN ANDA BERHASIL";
            } else {
                echo "ANDA GAGAL, COBA LAGI";
            }
        ?>
    </p>
<?php endif; ?>
 
<center>
  <h1>BANK SAMPAH</h1>
<h2>LOGIN FORM</h2>


<div class="imgcontainer">
  <img src="background.jpg" alt="Avatar" class="avatar" >
</div>

<div class="container">
  <form action="login.php" method="post">
  <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required>
<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
  </form>
    <button><a href="signup.html">Register</a></button>

    <label>
      <br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  </center>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
 
</body>
</html>
