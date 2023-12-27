<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | RASIKA OFFICIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
   
</head>

<body style="background-color:black ">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 adminBackground ">
                <div class="row">

                    <div class="col-6 offset-3 AdminLoginCard ">
                        <div class="row" >

                            <div class="col-12 d-flex justify-content-center">
                                <img src="Resources/images/LOGO/gymLoginlogo.png" width="150px" alt="">
                            </div>

                            <div class="col-12  mt-3 text-center text-white">
                                <h1 style="font-weight: bold;"><u>Admin Login</u> </h1>
                            </div>




                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class="text-white-50">Email</span>
                                    </div>

                                    <div class="col-12 mb-3 text-center">
                                        <input type="email" placeholder="Please Enter Your Email" class="form-control" id="emailInput">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class="text-white-50">password</span>
                                    </div>

                                    <div class="col-12 mb-3 text-center">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="password" id="PasswordInput" placeholder="Please Enter Your Pasword" class="form-control">
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-outline-light" onclick="PasswordVisible();"><i class="bi bi-eye-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex mb-2 justify-content-center">
                                <button class="btn btn-outline-light" onclick="SignInProcess();">LogIn</button>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- <script src="js/script.js"></script> -->

    <script>
        // Sign in Process
        function SignInProcess() {
            var emailInput = document.getElementById("emailInput").value;
            var PasswordInput = document.getElementById("PasswordInput").value;
            var command = "SignInProcess";

            var f = new FormData();
            f.append("command", command);
            f.append("emailInput", emailInput);
            f.append("PasswordInput", PasswordInput);

            var r = new XMLHttpRequest();
            r.onreadystatechange = function() {
                if (r.readyState == 4 && r.status == 200) {
                    var responstext = r.responseText;

                    if (responstext == "Success") {
                        window.location = "adminDashboard.php";
                    } else {
                        alert(responstext);
                    }
                }
            };

            r.open("POST", "BackEnd.php", true);
            r.send(f);
        }
    </script>

</body>

</html>