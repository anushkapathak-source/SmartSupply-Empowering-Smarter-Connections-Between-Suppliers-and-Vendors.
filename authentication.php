
<?php include 'db.php'; ?>
<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login / Register</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        height: 100vh;
        background: linear-gradient(135deg, #74ebd5, #9face6);
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container {
        width: 800px;
        height: 500px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        overflow: hidden;
        position: relative;
      }

      .form-box {
        position: absolute;
        top: 0;
        height: 100%;
        width: 50%;
        padding: 40px;
        transition: 0.5s ease-in-out;
        background: rgba(255, 255, 255, 0.3);
      }

      .form-box h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
      }

      .form-box input {
        width: 100%;
        padding: 12px 15px;
        margin: 10px 0;
        border: none;
        border-radius: 8px;
        outline: none;
        font-size: 16px;
      }

      .form-box button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        background: #333;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
      }

      .form-box button:hover {
        background: #555;
      }

      .toggle-box {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: 0.5s ease-in-out;
      }

      .toggle-box h2 {
        color: #fff;
        margin-bottom: 10px;
      }

      .toggle-box p {
        color: #f0f0f0;
        margin-bottom: 30px;
        text-align: center;
        padding: 0 20px;
      }

      .toggle-box button {
        padding: 12px 30px;
        background: #fff;
        color: #333;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
      }

      .toggle-box button:hover {
        background: #e0e0e0;
      }

      .login-box {
        left: 0;
        z-index: 2;
      }

      .register-box {
        left: 100%;
        z-index: 1;
      }

      .container.active .login-box {
        left: -100%;
      }

      .container.active .register-box {
        left: 0;
        z-index: 2;
      }

      .container.active .toggle-box {
        right: 50%;
      }

      @media screen and (max-width: 768px) {
        .container {
          width: 95%;
          height: auto;
          flex-direction: column;
        }

        .form-box,
        .toggle-box {
          width: 100%;
          height: auto;
          position: relative;
        }

        .container.active .toggle-box {
          right: 0;
        }
      }
    </style>
  </head>
  <body>
    <div class="container" id="container">
      <!-- Login Form -->
      <div class="form-box login-box">
        <h2>Login</h2>
        <input type="email" placeholder="Email" required />
        <input type="password" placeholder="Password" required />
        <button id="loginSubmit" ><a  href="index.php">Login</button>
      </div>

      <!-- Register Form -->
      <div class="form-box register-box">
        <h2>Register</h2>
        <input type="text" placeholder="Full Name" required />
        <input type="email" placeholder="Email" required />
        <input type="password" placeholder="Password" required />
        <button id="registerSubmit">Register</button>
      </div>

      <!-- Toggle Panel -->
      <div class="toggle-box">
        <h2 id="toggleTitle">New here?</h2>
        <p id="toggleText">Register and discover great opportunities!</p>
        <button id="toggleBtn">Register</button>
      </div>
    </div>

    <script>
      const container = document.getElementById("container");
      const toggleBtn = document.getElementById("toggleBtn");
      const toggleTitle = document.getElementById("toggleTitle");
      const toggleText = document.getElementById("toggleText");

      const loginSubmit = document.getElementById("loginSubmit");
      const registerSubmit = document.getElementById("registerSubmit");

      let isLogin = true;

      toggleBtn.addEventListener("click", () => {
        container.classList.toggle("active");
        isLogin = !isLogin;
        toggleTitle.innerText = isLogin ? "New here?" : "Already a user?";
        toggleText.innerText = isLogin
          ? "Register and discover great opportunities!"
          : "Login to access your account.";
        toggleBtn.innerText = isLogin ? "Register" : "Login";
      });

      loginSubmit.addEventListener("click", () => {
        alert("Login successful (mock)");
        container.classList.remove("active"); // Go back to login
        isLogin = true;
        toggleTitle.innerText = "New here?";
        toggleText.innerText = "Register and discover great opportunities!";
        toggleBtn.innerText = "Register";
      });

      registerSubmit.addEventListener("click", () => {
        alert("Registration successful (mock)");
        container.classList.remove("active"); // Go back to login after registering
        isLogin = true;
        toggleTitle.innerText = "New here?";
        toggleText.innerText = "Register and discover great opportunities!";
        toggleBtn.innerText = "Register";
      });
    </script>
  </body>
</html>
