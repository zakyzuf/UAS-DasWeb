<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equals.</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body>
    <header>
        <h1>equals.</h1>
        <ul>
            <li><a href="#catalog">CATALOG</a></li>
            <li><a href="#inspiration">INSPIRATION</a></li>
            <li><a href="#aboutus">ABOUT US</a></li>
            <li><a href="#contacts">CONTACTS</a></li>
        </ul>
        <div class="icon">
            <img src="asset/search.png">
            <a href="admin.php"><img src="asset/user.png"></a>
            <img src="asset/heart.png">
            <img src="asset/shopping-bag.png">
        </div>
    </header>
    <div class="slideimage">
        <img src="asset/img1.png" class="img">
        <div class="slide-text">
            <h1>Exclusive furniture</h1>
            <h1 class="text2">& accessories</h1>
            <button>SHOP NOW</button>
            <div class="nav" style="margin-right: 150px;">
            <ul class="point">
                <li><a onclick="imgSlider('asset/img1.png')"><img src="asset/points.png"></a></li>
                <li><a onclick="imgSlider('asset/img2.png')"><img src="asset/points.png"></a></li>
                <li><a onclick="imgSlider('asset/img3.png')"><img src="asset/points.png"></a></li>
            </ul>
            </div>
        </div>
    </div>

    <div id="catalog"><h1 style="color: #fff;">.</h1></div>
    <div class="shop">
        <h1>SHOP BY ROOM</h1>
        <div class="container">
            <div><img src="asset/livingroom.jpg"><a href="livingroom.php">LIVING ROOM</a></div>
            <div><img src="asset/bathroom.jpg"><a href="bathroom.php">BATHROOM</a></div>
            <div><img src="asset/bedroom.jpg"><a href="bedroom.php">BEDROOM</a></div>
            <div><img src="asset/kitchen.jpg"><a href="kitchen.php">KITCHEN</a></div>
        </div>
    </div>

    <div id="inspiration"><h1 style="color: #fff;">.</h1></div>
    <div class="bestseller">
        <h1>BESTSELLERS</h1>
        <div class="box-container">
            <div class="box">
                <img src="asset/bestseller1.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>    
            <div class="box">
                <img src="asset/bestseller2.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>    
            <div class="box">
                <img src="asset/bestseller3.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>   
            <div class="box">
                <img src="asset/bestseller4.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>    
            <div class="box">
                <img src="asset/bestseller5.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>    
            <div class="box">
                <img src="asset/bestseller6.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div> 
            <div class="box">
                <img src="asset/bestseller7.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>
            <div class="box">
                <img src="asset/bestseller8.jpg" alt="">
                <h3>Lorem Ipsum</h3>
                <p>$100</p>
            </div>   
        </div>
    </div>

    <div class="contact" id="contacts">
        <div style="width: 60%; margin-top: 120px">
            <h1 style="padding-left: 18%;"><b>Contact </b>Us</h1>
                <p style="padding-left: 18%; padding-right: 11%;">Questions or concerns? Just fill out the form below and i will get back to you within 24 hours</p>    
        </div>
        <div style="width: 40%; margin-top: 60px;">
            <form id="formContact" method="post" style="padding-top: 50px" onsubmit="return validateForm()"> 
            <div> 
                <div class="text-box-in"> 
                <input type="text" id="fname" name="fname" placeholder="First Name" style="margin-right: 10px; margin-top: 10px"> 
                <input type="text" id="lname" name="lname" placeholder="Last Name" style="margin-bottom: 20px"> 
            </div>
            <input type="text" id="number" name="number" placeholder="Phone Number" style="width: 35%; margin-bottom: 20px"><br>
            <input type="text" id="questions" name="questions" placeholder="Questions" style="width: 35%; margin-bottom: 20px"><br>
            <button type="submit">Submit Now</button>
            </form>
        </div>
        </div>
    </div>

    <footer> 
        <div class="address"> 
            <h4>Address</h4> 
            <p>Pipang Ltd, Griva Digeni, <br>81-83 Jacovides Tower, 1st Floor <br>1090 Picosia USA </p>
        </div>
        <div class="services"> 
            <h4>Services</h4> 
            <p>overview</p>
            <p>features</p>
            <p>technology</p>
            <p>Terms & Conditions</p>
            <p>Privacy</p>
        </div>
        <div class="getintouch"> 
            <h4>Get In Touch</h4> 
            <p>info@equals.com <br><span>+1 844-721-7120</span> </p>
            <div class="icon"> 
                <object data="asset/facebook.png"></object> 
                <object data="asset/linkedin.png"></object> 
                <object data="asset/twitter.png"></object> 
            </div>
        </div>
        <div class="wesupport"> 
            <h4>We Support</h4> 
            <img src="asset/footerlogo.png" style="width: 200px; height: 60px; margin-left: -8px;margin-top: -2px;"> 
            <p>Copyright 2022 Equals.</p>
        </div>
    </footer>

    <script type="text/javascript">
        function pindah(url) {
        window.location = url;
        }
        function imgSlider(anything) {
            document.querySelector('.img').src = anything;
        }
        function validateForm() {
            var fname = document.forms["formContact"]["fname"].value;
            var lname = document.forms["formContact"]["lname"].value;
            var number = document.forms["formContact"]["number"].value;
            var questions = document.forms["formContact"]["questions"].value;
            if (fname == "" && lname == "" && number == "" && questions == "") {
                alert("Please fill all the blank field");
                return false; 
            } else if (fname == "") {
                alert("Please enter your first name");
                return false;
            } else if (lname == "") {
                alert("Please enter your last name");
                return false;
            } else if (number == "") {
                alert("Please enter your phone number");
                return false;
            } else if (questions == "") {
                alert("Please enter your question");
                return false;
            } else if(fname != "" && lname != "" && number != "" && questions != "") {
                alert("We will answer your question as fast as we can :)");
                clearForm();
                return false;
            }
        }
        function clearForm() {
            document.getElementById("formContact").reset();
        }
    </script>
    
</body>
</html>