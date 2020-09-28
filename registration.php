<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

</style>
</head>
<body>
        <div class="box">
                <h2>Register</h2>
                <p>Personal Data</p>
                <form>
                  <div class="inputBox">
                    <input type="text" name="username" required onkeyup="this.setAttribute('value', this.value);"  value="">
                    <label>Username</label>
                  </div>
                  <div class="inputBox">
                    <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                    <label>Email</label>
                  </div>
                  <div class="inputBox">
                        <input type="password" name="text" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Password</label>
                  </div>
                  <div class="inputBox">
                        <input type="password" name="text" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Conform Password</label>
                  </div>
                  <input type="submit" name="sign-in" value="Submit">
                </form>
              </div>
</body>
</html>
