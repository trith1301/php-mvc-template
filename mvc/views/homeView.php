<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <base href="<?= $data['baseURL'] ?>" target="_blank">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/css/homeView.css">
     <title>Greeting</title>
</head>

<body>
     <div class="wrapper">
          <div class="box">
               <h2 class="title">Greeting Box</h2>
               <div class="greet">
                    <button class="button" type="button">Click to greet</button>
                    <div class="message"></div>
               </div>
          </div>
     </div>
     <script src="public/js/homeView.js"></script>
</body>

</html>