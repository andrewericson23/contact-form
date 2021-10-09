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

    <title>credipair</title>
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

        <?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //check if name is empty
        if (!$name) {
            echo '<div class="form-group alert alert-danger" role="alert">Please enter a name</div>';
            //check if phone is empty
        } else if (!$phone) {
            echo '<div class="form-group alert alert-danger" role="alert">Please enter a phone number</div>';
            //check if email is empty
        } else if (!$email) {
            echo '<div class="form-group alert alert-danger" role="alert">Please enter an email address</div>';
            //check for valid email format
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="form-group alert alert-danger" role="alert">Please enter a valid email address</div>';
        } else {
            echo '<div><h3>We will be in touch soon</h3></div>';

            $txt = '<html><body>';
            $txt .= '<h1 style="color:#f40;">Hi Jane!</h1>';
            $txt .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
            $txt .= '</body></html>';

            $mailTo = 'andrew@credipair.com';

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . $email;

            $subject = 'client blah';

            mail($mailTo, $subject, $txt, $headers);
        }

        echo '<form action="contact-submit.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="' . $name . '" placeholder="">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="' . $phone . '" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="' . $email . '" placeholder="">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" value="' . $message . '" placeholder="Tell us what you need for your business" rows="3"></textarea>
                </div>
                <div class="text-right" style="margin: auto">
                    <a class="btn bg-secondary">back</a>
                    <button type="submit" value="submit" class="btn bg-primary">submit</button>
                </div>
                </form>';

        ?>

    </div>

</body>

</html>