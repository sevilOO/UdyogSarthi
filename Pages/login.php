<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="bgBlock">
            <div class="mainBlock">
                <div class="infoFill">
                    <h1>Log in</h1>
                    <div class="gofa">
                        <div class="google">
                            <a href="#">
                                <img src="images/google.png" alt="" srcset="">
                                <h3>Log in with Google</h3>
                            </a>
                        </div>
                        <div class="google">
                            <a href="#">
                                <img src="images/facebook.png" alt="">
                                <h3>Log in with Facebook</h3>
                            </a>
                        </div>
                    </div>
                    <h3>-OR-</h3>
                    <form class="info">
                        <input type="text" placeholder="Unique Disability Id" name="inputField" maxlength="15">
                        <div class="line"></div>
                        <input id="hideShow" type="password" placeholder="Password" maxlength="10" name="inputField">
                        <img id="show" src="images/eye-close.png" alt="" srcset="">
                        <div class="line"></div>
                        <button type="submit" >Log in</button>
                        <h4>Don't have an account? <a href="signup.php" style="text-decoration: none; color: blue;">Create</a></h4>
                    </form>
                </div>
            </div>
            <img src="images/logo.png" alt="" class="logo">
            <img class="bgImg" src="images/login_bg1.svg" alt="" srcset="">
        </div>
    </div>


    <script>

        let show = document.getElementById("show");
        let password = document.getElementById("hideShow");

        show.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                show.src = "images/eye-open.png";
            }
            else{
                password.type ="password";
                show.src = "images/eye-close.png";
            }
        }
    </script>
</body>
</html>