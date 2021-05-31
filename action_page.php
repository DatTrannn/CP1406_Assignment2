<html>
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
            body{
                background-color: #945A37;
                text-align:center;
                width:100%;
                color: white;
                height:100%;
            }
        </style>
    </head>
<body>
<h1 class="display-3">Thank You!</h1>
<p class="lead">Thank you for signing up for the Petite Treats Weekly newsletter.
  We have added the following information to our files regarding your interests:
  </p>
  <div class="container">
  Welcome <?php echo $_POST["fname"]; ?><br>
  Your zip code is <?php echo $_POST["zipcode"]; ?><br>
  Your email address is <?php echo $_POST["email"]; ?></div>
</p>
<hr>
<p class="lead">
  <a class="btn btn-light btn-sm" href="index.html" role="button">Continue to homepage</a>
</p>


</body>
</html>