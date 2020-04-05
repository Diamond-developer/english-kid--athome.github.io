<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>X3-English</title>

  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./public/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./public/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->


  <script src="./public/bootstrap.min.js"></script>
  <script src="./public/jquery-1.11.1.min.js"></script>
  <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <style>
    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  <script>
    $(document).on('click', '.panel div.clickable', function(e) {
      var $this = $(this); //Heading
      var $panel = $this.parent('.panel');
      var $panel_body = $panel.children('.panel-body');
      var $display = $panel_body.css('display');

      if ($display == 'block') {
        $panel_body.slideUp();
      } else if ($display == 'none') {
        $panel_body.slideDown();
      }
    });

    $(document).ready(function(e) {
      var $classy = '.panel.autocollapse';

      var $found = $($classy);
      $found.find('.panel-body').hide();
      $found.removeClass($classy);
    });
  </script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
        include("layout/directional.php");
        include("layout/body-left/body-left.php");
      ?>
    </div>
  </div>
</body>

</html>