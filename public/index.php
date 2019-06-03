<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php include '../game.php'; ?>

<div class="jumbotron text-center">
  <h1>Hero Game</h1>
</div>

<div class="container">

  <div class="row characters pb-2">
    <div class="hero col-sm-6">
      <img src="images/hero.png" width="200" height="200">
    </div>
    <div class="beast col-sm-6">
      <img src="images/beast.png" width="200" height="200">
    </div>
  </div>

  <div class="row play text-center">
    <div class="col-sm-12 text-center">
      <button type="button" class="btn btn-primary">PLAY</button>
    </div>
  </div>

  <hr class="my-4">
  <div class="row text-center results"><p></p></div>
  <hr class="my-4">

  <div class="row">

    <div class="col-sm-6">
      <h3 class="text-center pb-2">Orderus' stats</h3>
      <table>
        <tr>
          <td>Health</td>
          <td> </td>
        </tr>
        <tr>
          <td>Strength</td>
          <td></td>
        </tr>
        <tr>
          <td>Defence</td>
          <td></td>
        </tr>
        <tr>
          <td>Speed</td>
          <td></td>
        </tr>
        <tr>
          <td>Luck</td>
          <td></td>
        </tr>
      </table>
    </div>

    <div class="col-sm-6">
      <h3 class="text-center pb-2">Beast's stats</h3>
      <table>
        <tr>
          <td>Health</td>
          <td> </td>
        </tr>
        <tr>
          <td>Strength</td>
          <td></td>
        </tr>
        <tr>
          <td>Defence</td>
          <td></td>
        </tr>
        <tr>
          <td>Speed</td>
          <td></td>
        </tr>
        <tr>
          <td>Luck</td>
          <td></td>
        </tr>
      </table>
    </div>

  </div>
</div>

</body>
</html>