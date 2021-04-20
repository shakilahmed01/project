@include('layouts.nevheader')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>




        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shakil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #aaa;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </body>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 8 Phone Number OTP Auth Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5" style="max-width: 550px">

            <div class="alert alert-danger" id="error" style="display: none;"></div>

            <h3>Add Phone Number</h3>

            <div class="alert alert-success" id="successAuth" style="display: none;"></div>

            <form>
                <label>Phone Number:</label>

                <input type="text" id="number" class="form-control" placeholder="+880 ********">

                <div id="recaptcha-container"></div>

                <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
            </form>


            <div class="mb-5 mt-5">
                <h3>Add verification code</h3>

                <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>

                <form>
                    <input type="text" id="verification" class="form-control" placeholder="Verification code">
                    <button type="button" class="btn btn-danger mt-3" onclick="verify()">Verify code</button>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>


        <script>
        var firebaseConfig = {
          apiKey: "AIzaSyDCjzgrvb6TH9854u3FgAzjXhfgIhXmaHE",
          authDomain: "tello-5fb63.firebaseapp.com",
          projectId: "tello-5fb63",
          storageBucket: "tello-5fb63.appspot.com",
          messagingSenderId: "388579747342",
          appId: "1:388579747342:web:9dd8dad18b0452c5813e5f",
          measurementId: "G-GF4EQVC3JB"
        };
            firebase.initializeApp(firebaseConfig);
        </script>
        <script type="text/javascript">
            window.onload = function () {
                render();
            };

            function render() {
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
                recaptchaVerifier.render();
            }

            function sendOTP() {
                var number = $("#number").val();
                firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                    window.confirmationResult = confirmationResult;
                    coderesult = confirmationResult;
                    console.log(coderesult);
                    $("#successAuth").text("Message sent");
                    $("#successAuth").show();
                }).catch(function (error) {
                    $("#error").text(error.message);
                    $("#error").show();
                });
            }

            function verify() {
                var code = $("#verification").val();
                coderesult.confirm(code).then(function (result) {
                    var user = result.user;
                    console.log(user);
                    $("#successOtpAuth").text("Auth is successful");
                    $("#successOtpAuth").show();
                }).catch(function (error) {
                    $("#error").text(error.message);
                    $("#error").show();
                });
            }
        </script>
    </body>

    </html>

</html>
@include('layouts.footer')
