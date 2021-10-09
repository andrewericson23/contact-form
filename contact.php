<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="contact-style.css">

  <title>Total Web Devs</title>
</head>

<body>

  <nav>
    <div class="logo"><img src="assets/default.png" id="title" alt="credipair"></div>
    <i class="fas fa-bars" style="width: 50px; float: right" data-toggle="collapse" data-target="#nav-menu"></i>
  </nav>

  <div class="contact">

    <div class="collapse" id="nav-menu" style="max-width: 90%; margin: 20px auto">
      <a class="nav-link" href="#">Home</a><br>
      <a class="nav-link" href="#">About</a><br>
      <a class="nav-link" href="#">Services</a><br>
      <a class="nav-link" href="#">Log In</a><br>
    </div>

    <div class="text-center">
      <h3 class="contact-lead">Reach out for a free consultation</h3>
    </div>

    <form action="contact-submit.php" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="">
      </div>
      <div class="form-group">
        <label for="name">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="3" placeholder="Tell us your credit goals so we can help you get there"></textarea>
      </div><br>
      <div class="text-right" style="margin: auto">
        <a class="btn bg-secondary" onClick=goHome()>back</a>
        <button type="submit" value="submit" class="btn bg-primary">submit</button>
      </div>
    </form>

  </div>

  <script>
    function goHome() {
      window.location.replace('https://127.0.0.1/index.html');
    }
  </script>
</body>

</html>