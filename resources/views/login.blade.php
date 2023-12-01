<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form action="/login-form" id="loginForm" class="space-y-4" method="POST" onsubmit="return validateForm()">
            @csrf
            <div>
                <label for="email" class="block mb-1">Email:</label>
                <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="password" class="block mb-1">Password:</label>
                <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition duration-300">Login</button>
            </div>
        </form>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </div>


    <script>
       function validateForm() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            let emailError = document.getElementById("emailError");
            let passwordError = document.getElementById("passwordError");

            let valid = true;

            // Email validation
            if (!email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/)) {
                emailError.classList.remove("hidden");
                valid = false;
            } else {
                emailError.classList.add("hidden");
            }

            // Password validation (assumes a valid phone number is numeric with a certain length)
            if (password === "") {
                passwordError.classList.remove("hidden");
                valid = false;
            } else {
                passwordError.classList.add("hidden");
            }

            return valid;
        }
    </script>
</body>
</html>
