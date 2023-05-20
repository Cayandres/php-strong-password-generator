<?php 
function passwordGenerator($length){
  $psw = ''; 

  $pswCharList = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVXYZ',
    '0123456789',
    '!£$%&()=?°*;:><'
  ];
  
  $pswCharIndex = 0;

  while (strlen($psw) < $length) {
    $charStr = $pswCharList[$pswCharIndex];
    $char = $charStr[rand(0, strlen($charStr) -1)];
    $psw .= $char;
    $pswCharIndex++;
    if($pswCharIndex === count($pswCharList)) $pswCharIndex = 0;
  }
  return str_shuffle($psw);
}

$psw = passwordGenerator($_GET['length']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Password Generator</title>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center mt-5 ">
    <div class="container col-6">
      <h1>Password Generator</h1>
      <form action="index.php" method="GET">
        <div class="row">
          <label for="lenght">Lunghezza Password:</label>
          <div>
            <input type="number" name="length" id="length" class="form-control mt-2">
          </div>
        </div>
      </form>
      <div class="buttons">
        <button type="submit" name="submit" value="submit" class="btn btn-outline-primary mt-2">invia</button>
      </div>
      <div class="results">
        <h2>la tua password generata é:</h2>
        <div class="alert">
          <?php echo $psw ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>