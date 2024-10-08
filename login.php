<?php
include("header.php");
?>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center">Login</h2>
                    <form id="loginForm" onsubmit="return validateLoginForm()">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                    </form>
                    <p class="text-center mt-3">Don't have an account? <a href="reg.php" class="text-warning">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateLoginForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email === "" || password === "") {
                alert("Please fill out all fields.");
                return false;
            }

           
            return true;
        }
    </script>
    <?php
include("footer.php");
?>

</body>

</html>
