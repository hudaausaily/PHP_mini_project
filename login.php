


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1>Login</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailError" class="error"></small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
        <small id="passwordError" class="error"></small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script>
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    loginForm.addEventListener('submit', (event)) => {
      event.preventDefault();

      let isValid = true;
    }
      // Reset error messages
      emailError.textContent = '';
      passwordError.textContent = '';

      // Validate email
      if (!emailInput.value) {
        emailError.textContent = 'Email is required';
        isValid = false;
      } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailInput.value)) {
        emailError.textContent = 'Email is invalid';
        isValid = false;
      }

      // Validate password
      if (!passwordInput.value) {
        passwordError.textContent = 'Password is required';
        isValid = false;
      } else if (passwordInput.value.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters long';
        isValid = false;
      }

      if (isValid) {
        // Send login request to server
        fetch('/login.php', 
          method: 'POST',
          headers: 
            'Content-Type': 'application/json'),
          },
        
