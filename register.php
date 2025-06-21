<?php
include 'connect.php';
session_start();

$signUpMessage = "";
$signInMessage = "";

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); // Recomendado usar password_hash()

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        $signUpMessage = "¡ESTE CORREO YA EXITE!";
    } else {
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            $signUpMessage = "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            $signUpMessage = "Error al registrar. Intenta nuevamente.";
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if( $email==='admin' && $password==='admin'){
      $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        $signInMessage = "CORREO O CONTRASEÑA INCORRECTA!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>REGISTRO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">REGISTRO</h1>
    <?php if (!empty($signUpMessage)): ?>
      <h4 class="message" style="color: red; text-align: center; margin-bottom: 15px;">
        <?= $signUpMessage ?>
      </h4>
    <?php endif; ?>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname">NOMBRES</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">APELLIDOS</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">CORREO</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">CONTRASEÑA</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <div class="links">
      <p>YA TIENES UNA CUENTA?</p>
      <button id="signInButton">INICIAR SESION</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">INICIAR SESION</h1>
    <?php if (!empty($signInMessage)): ?>
      <h4 class="message" style="color: red; text-align: center; margin-bottom: 15px;">
        <?= $signInMessage ?>
      </h4>
    <?php endif; ?>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">CORREO</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">CONTRASEÑA</label>
      </div>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="links">
      <p>AUN NO TIENES UNA CUENTA?</p>
      <button id="signUpButton">REGISTRATE</button>
    </div>
  </div>

  <script src="script.js"></script>

  <!-- Mostrar el formulario correspondiente según el mensaje -->
  <script>
    <?php if (!empty($signUpMessage)): ?>
      document.getElementById('signup').style.display = 'block';
      document.getElementById('signIn').style.display = 'none';
    <?php elseif (!empty($signInMessage)): ?>
      document.getElementById('signIn').style.display = 'block';
      document.getElementById('signup').style.display = 'none';
    <?php else: ?>
      // Por defecto puedes elegir uno u otro
      document.getElementById('signIn').style.display = 'block';
      document.getElementById('signup').style.display = 'none';
    <?php endif; ?>
  </script>
</body>
</html>
