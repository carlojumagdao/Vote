<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="../assets/css/style.css" media="screen,projection">
    <style>
        html,body{
            background-image:url(../assets/img/bglogin.png);
        }
        .card-panel {
            background-color: rgba(115, 96, 96, 0.28);
            border-left: none;
            padding: 15px;
        }
        .input-field, label{
            padding-left: 10%;
            padding-right: 10%;
        }
        input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #ffc107 !important;
            box-shadow: 0 1px 0 0 #ffc107 !important;
        }
        .checkbox-orange[type="checkbox"].filled-in:checked + label:after{
             border: 2px solid #ffc107;
             background-color: #ffc107;
        }
        input:not([type]):focus:not([readonly]) + label,
        input[type=text]:focus:not([readonly]) + label,
        input[type=password]:focus:not([readonly]) + label,
        input[type=email]:focus:not([readonly]) + label,
        input[type=url]:focus:not([readonly]) + label,
        input[type=time]:focus:not([readonly]) + label,
        input[type=date]:focus:not([readonly]) + label,
        input[type=datetime-local]:focus:not([readonly]) + label,
        input[type=tel]:focus:not([readonly]) + label,
        input[type=number]:focus:not([readonly]) + label,
        input[type=search]:focus:not([readonly]) + label,
        textarea.materialize-textarea:focus:not([readonly]) + label {
            color: #f5c012;
        }
        .input-field label{
            color:#f5f5f5;
        }
    </style>
</head>
<body>
<div class="container">
    <center>
        <div class="col s6" style="padding-top: 5%">
            <div class="card-panel" style="width: 35%;padding-top: 3%">
                <img src="../assets/img/logo.png" width="180px">
                <p class="black-text">Membership Monitoring and Election Content Management System</p>
                <form method="POST" action="login.php">
                <div class="row margin" style="padding-top: 2%">
                    <div class="input-field">
                        <i class="amber-text accent-3 material-icons prefix mdi-social-person small"></i>
                        <input name = "username" class="white-text" id="username" type="text">
                        <label class="" for="username">Username</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field">
                        <i class="amber-text accent-3 material-icons prefix mdi-communication-vpn-key small"></i>
                        <input name = "password" class="white-text" id="password" type="password">
                        <label class="" for="password">Password</label>
                    </div>
                </div>
                <div class="row margin">
                    <div style="margin-left: -24%">
                        <input class= "filled-in checkbox-orange" type="checkbox" id="remember-me" />
                        <label class="white-text" for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col s12">
                        <input type="submit" class="offset-s1 col s10 btn amber accent-3" value="Login" name="btnLogin" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </center>
</div>
    <script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
    <script src="../assets/js/style/materialize.min.js"></script>
    <script src="../assets/js/jquery/dist/jquery.min.js"></script>
</body>
</html>