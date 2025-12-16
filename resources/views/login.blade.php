<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            background-color: #d9dde3;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 360px;
            background: #fff;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .login-card h2 {
            margin-bottom: 25px;
            font-size: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            color: #555;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        .password-box {
    position: relative;
}

.password-box input {
    width: 100%;
    padding: 10px 40px 10px 10px; /* extra right padding for the icon */
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 2px;
}

.password-box .toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #888;
    font-size: 16px;
}


        .forgot {
            font-size: 13px;
            margin-bottom: 20px;
        }

        .forgot a {
            text-decoration: none;
            color: #888;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            background-color: #3c8dbc;
            color: #fff;
            border: none;
            padding: 11px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 2px;
        }

        .btn-login:hover {
            background-color: #367fa9;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 8px;
            margin-bottom: 15px;
            font-size: 13px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Sign in to start your session</h2>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="form-group">
            <label>USERNAME</label>
            <input type="text" name="username" placeholder="Enter username" required>
        </div>

      <div class="form-group password-box">
    <label>PASSWORD</label>
    <input type="password" name="password" placeholder="Enter password" required>
    <i class="fa-solid fa-eye toggle-password"></i>
</div>


        <div class="forgot">
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn-login">
            LOGIN ➜
        </button>
    </form>
    
</div>

<!-- Toggle Password Script -->
<script>
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.querySelector('.password-box input');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Toggle the eye / eye-slash icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

</body>
</html>
