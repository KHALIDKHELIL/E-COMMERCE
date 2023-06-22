
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="cart.css">
  <link rel="stylesheet" href="Loginpage.css">
  <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
  <link rel="icon" href="../Market-Place/image/ብራንድ1.jpg" type="image/x-icon" />
  <title>ብራንድ</title>
</head>

<body>

<header class="header">
  <div class="header-container">
    <div class="logo-container">
      <a href="../My Market.php">
        <img src="../image/logo.jpg" alt="logo" class="logo">
      </a>
    </div>
    <div class="search-container">
      <input type="text" name="text" class="input" id="Input" placeholder="Search products">
      <button class="search-btn">
        <i class="fa fa-search fa-lg" aria-hidden="true" style="color: #fff;"></i>
      </button>
    </div>
    <nav class="nav-bar">
      <a href="My Market.php" class="nav-link">Home</a>
      <a href="login/register.php" class="nav-link">Register</a>
      <a href="/login/index.php" class="nav-link">Login</a>
    </nav>
  </div>
</header>


  <div class="subnav">
    <div class="cart">
      <button id="payment_icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
      <p id="count">0</p>
    </div>
    <div class="containercart">
      <div class="sidebar">
        <div class="head">
          <p>My Cart</p>
        </div>
        <div id="cartItem">Your cart is empty</div>
        <div class="foot">
          <h3 style="color: rgb(255, 255, 255);">Total</h3>
          <h2 id="total">$ 0.00</h2>
        </div>
        <div class="delete-cart">
          <button onclick="deleteAllItems()">Empty Cart </button>
        </div>
      </div>
    </div>
  </div>

  <main style="background-color: #ffffff;">
    <div id="root"></div>
  </main>


  <!---! *it starts here -->
  <div class="Login_body">

    <form action="/payment/payments.php" class="form_container" method="post">
      <button style="position: relative;left: 45%;top: 0; margin: 0 0;" id="dis_Login"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button>
      <div class="logo_container">
        <p class="basket"><i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i></p>
      </div>
      <div class="title_container">
        <p class="title">Login to your Account</p>
        <span class="subtitle">Get started with our app, just Login and enjoy the experience.</span>
      </div>
      <br>
      <div class="input_container">
        <label class="input_label" for="email_field">Email</label>
        <p class="icon-holder"><i class="fa fa-envelope" aria-hidden="true"></i></p>
        <input placeholder="name@email.com" title="Inpit title" name="input-name" type="text" class="input_field" id="email_field" required>
      </div>
      <div class="input_container">
        <label class="input_label" for="password_field">Password</label>
        <p class="icon-holder"><i class="fa fa-key" aria-hidden="true"></i></p>
        <input placeholder="Password" title="Inpit title" name="input-name" type="password" class="input_field" id="password_field" required>
      </div>
      <input type="submit" class="sign-in_btn" value="Login" title="Sign In">
      <div id="signup">
        <p class="note"><br>New to the Website ? <a class="signup" href="/login/register.php">Sign Up</a> </p>
      </div>

    </form>
  </div>
  <?php

  ?>
  <script>
    // Get the form element
    var form = document.querySelector(".form_container");

    // Get the input elements
    var email = document.getElementById("email_field");
    var password = document.getElementById("password_field");

    // Get the error message elements
    var emailError = document.createElement("span");
    var passwordError = document.createElement("span");

    // Add the error message elements to the input containers
    email.parentNode.appendChild(emailError);
    password.parentNode.appendChild(passwordError);

    // Define a function to validate the form
    function validateForm(event) {
      // Prevent the form from being submitted
      event.preventDefault();

      // Clear any previous error messages
      emailError.textContent = "";
      passwordError.textContent = "";

      // Check if the email field is valid
      if (!email.validity.valid) {
        // If not, display an error message
        emailError.textContent = "Please enter a valid email address.";
      }

      // Check if the password field is valid
      if (!password.validity.valid) {
        // If not, display an error message
        passwordError.textContent = "Please enter a password.";
      }

      // If both fields are valid, submit the form
      if (email.validity.valid && password.validity.valid) {
        form.submit();
      }
    }

    // Add an event listener to the form submit button
    form.addEventListener("submit", validateForm);
  </script>


  <script>
    document.getElementById('payment_icon').addEventListener("click", function() {
      document.querySelector('.Login_body').style.display = 'flex';
    })

    document.getElementById('dis_Login').addEventListener("click", function() {
      document.querySelector('.Login_body').style.display = 'none';
    })
  </script>

  <a href="#">
    <Back class="back-top">Back to top</div>
  </a>


  <footer>
    <div class="footer-wrap">

      <div class="widgetFooter">
        <h4 class="uppercase">useful links</h4>
        <ul id="footerUsefulLink">
          <li title="About US">
            <span class="usefulLinksIcons">
              <i class="far fa-id-card"></i>
            </span> <!-- HERE ADD THE USEFUL LINKS WHEN FINISHING, DON'T YOU FORGET KHALID :() -->
            <a href="ABOUTUS.php">&nbsp;About us</a>
          </li>
          <li title="Our Team">
            <span class="usefulLinksIcons">
              <i class="far fa-handshake"></i>
            </span>
            <a href="ABOUTUS.php/#stalk">&nbsp;Our team</a>
          </li>

          <li title="Contact Us">
            <span class="usefulLinksIcons">
              <i class="far fa-envelope"></i>
            </span>
            <a target="_blank" href="mailto:khalidkhelil19@gmail.com">&nbsp;Contact us</a>
          </li>
        </ul>
      </div>




      <div class="logo-container" style="z-index: 1000; position:absolute; left:50%; display:flex; justify-content:center; align-items:center; text-align:center;"><a href="My Market.php"><img style=" border-radius: 50%;" src="../image/logo.jpg" alt="logo" width="120px"></a> </div>



      <div class="widgetFooter right">
        <h4 class="uppercase">Social media links</h4>
        <ul id="footerMediaLinks">
          <li class="media1" title="Facebook">
            <span class="mediaLinksIcons fb">
              <i class="fab fa-facebook-square"></i>
            </span>
            <a class="fb" target="_blank" href="https://www.facebook.com/khalidkhelil">&nbsp;facebook</a>
          </li>
          <li class="media2" target="_blank" title="Twitter">
            <span class="mediaLinksIcons twit">
              <i class="fab fa-twitter-square"></i>
            </span>
            <a class="twit" target="_blank" href="https://www.Twitter.com/khalidkhelil">&nbsp;Twitter</a>
          </li>
          <li class="media3" title="Instagram">
            <span class="mediaLinksIcons insta">
              <i class="fab fa-instagram"></i>
            </span>
            <a class="insta" target="_blank" href="https://www.instagram.com/khalid.khelil">&nbsp;instagram</a>
          </li>
          <li class="media4" title="Github">
            <span class="mediaLinksIcons git">
              <i class="fab fa-github-alt"></i>
            </span>
            <a target="_blank" class="git" href="https://www.github.com/khalidkhelil">&nbsp;Github</a>
          </li>
        </ul>
      </div>


    </div>




    <div class="footerCopy">
      <div class="inb">
        <p style="padding:5px; line-height: 10px; word-spacing: 1.5px; letter-spacing: 2px; ">Copyrights<sup>&copy;</sup> 2023. All Rights Reserved. <br> Developed with <i class="fas fa-heart" style="color: rgb(222, 27, 27);"></i> by <a target="_blank" href="ABOUTUS.PHP" style="text-decoration: none; color: rgb(144, 144, 229);">OUR TEAM</a></p>
      </div>
    </div>
  </footer>
  <script src="cart.js"></script>




</body>

</html>