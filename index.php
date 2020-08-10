<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body>
  <div class="container contact-form">
  <div class="contact-image">
    <img src="img/rocket.png" alt="rocket_contact" />


    <?php if (isset($_GET['success'])){?>
          <div class="alert alert-success" role="alert">
  You Message Send Successul!
</div>
       <?php } ?>
  </div>
  <form  action="post.php" method="POST">
    <h3>Drop Us a Message</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
          <span class="text-danger">
        <?php if (isset($_GET['nameErr'])){
          echo $_GET['nameErr'];
        }
          ?>
          </span>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
          <span class="text-danger">
          <?php if (isset($_GET['emailErr'])){
          echo $_GET['emailErr'];
        }
        ?>
         </span>
        </div>
        <div class="form-group">
          <input type="numeric" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
          <span class="text-danger">
          <?php if (isset($_GET['phoneErr'])){
            echo $_GET['phoneErr'];
          }
          ?>
        <span>
        </div>
        <div class="form-group">
          <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
        </div>
      </div>
    </div>
  </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>