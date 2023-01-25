<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/createKar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style> -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />
    
</head>
<body>
    <script src="register.js"></script>
    <section>
        <nav>
            <!-- <a href=""><img src="tlogo.png" alt=""></a> -->
            <div class="Logo">
                <ul>
                    <li>
                        <a href="/">Home</a>
                        <a href="/createKar" style="color: lightpink;">Register</a>
                        <a href="/login">Login</a>
                        <a href="/user">User</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>
    <section class="payment">
        <div class="error"></div>
        <div class="error"></div>
        <div class="pay">
            <h2>Personal Information</h2>
            <form action="{{route('update', $kars->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="inputname">
                    <div class="input_box">
                        <input type="text" placeholder="Name" name="Name" id="Name" minlength=5 maxlength=20 value="{{$kars->Name}}" required>
                        <i class="fa fa-user icon" style="color: whitesmoke;"></i>
                    </div>
                </div>
                <div class="inputemail">
                    <div class="input_box">
                        <input type="number" placeholder="Age" name="Age" id="Age" min=20 value="{{$kars->Age}}" required>
                        <i class="fa fa-envelope-o" style="color: whitesmoke;"></i>
                    </div>
            </div>
            <div class="inputAdd">
                <div class="input_box">
                    <input type="text" placeholder="Address" name="Address" id="Address" minlength=8 maxlength=15 value="{{$kars->Address}}" required>
                    <i class="fa fa-address-card" aria-hidden="true" style="color: whitesmoke;"></i>
                </div>
            </div>
            <div class="inputTLP">
                <div class="input_box">
                    <input type="tel" placeholder="Telephone Number" name="TLP" id="TLP" value="{{$kars->TLP}}" onchange="validate()" required>
                    <i class="fa fa-phone" aria-hidden="true" style="color: whitesmoke;"></i>
                    <script>
                    function validate() {
                    var x = document.getElementById("TLP").value;
                    if(x.startsWith("08") && (x.length >= 9 && x.length <= 12)) {
                        return true;
                    }
                        else{
                            alert("Invalid phone number, please enter a valid number starts with 08 and contain 9-12 digits");
                            return false;
                        }
                    }
                    </script>
                </div>
            </div>
            <div id="submit" >
                <button onclick="readData()">Register</button>
            </div>
            <div class="login">
                Already have an account? <a href="/login" style="color: pink">Login</a> now!
            </div>
        </form>
        </div>
    </section>
        
    <section class="footer">
        <div class="sm">
            <ul style="align-items: center;">
                <li><a href="https://twitter.com/bncc_binus?lang=en"><i class="fa fa-twitter" style="color: whitesmoke"></i></a></li>
                <li><a href="https://id-id.facebook.com/bina.nusantara.computer.club/"><i class="fa fa-facebook" style="color: whitesmoke"></i></a></li>
                <li><a href="https://www.instagram.com/technoscapebncc/"><i class="fa fa-instagram" style="color: whitesmoke"></i></a></li> 
            </ul>
            <p>
               Copyright © 2022 BNCC. All Rights Reserved
            </p>
            
        </div>
    </section>
</body>
</html>