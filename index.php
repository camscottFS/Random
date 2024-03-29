<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 mt-4 mb-4">
          <div class="row">
            <?php
              $logos = array(
                '0','1','2','3','4','5','6','7','8','9',
                '10','11','12','13','14','15','16','17',
                '18','19','20','21','22','23','24','25',
                '26','27','28','29','30','31','32','33',
                '34','35','36','37','38','39');
              $randomize = array_rand($logos, 12);
              shuffle($randomize);
              foreach ($randomize as $randomize) {
                echo '<div class="col-3">';
                  echo '<img class="w-100 mt-4 random-image" src="assets/img/' . $randomize . '.png" alt="img">';
                echo '</div>';
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  </body>
</html>
