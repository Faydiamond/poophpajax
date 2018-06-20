<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontandmore.css">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <center>
                    <h1>send data with php & ajax</h1>
                </center>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><br>
    <div class="container">
    <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <center>
                    <input type="text" class="form-control" placeholder="Name" id="Name"><br>
                    <input type="text" class="form-control" placeholder="Last Name" id="LaName">
                </center>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
             <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Age" id="Ag">
             </div>
             <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Identification" id="Dni">
             </div>
             <div class="col-sm-2"></div>
         </div>
     </div><br>
     <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
             <div class="col-sm-8">
                 <center>
                    <button class="btn btn-info" id="Send">Send</button>
                 </center>
             </div>
             <div class="col-sm-2"></div>
         </div>
     </div><br>
     <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
             <div class="col-sm-8">
                 <center>
                    <p id="Res"></p>
                 </center>
             </div>
             <div class="col-sm-2"></div>
         </div>
     </div>
    
  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/direct.js"></script>
</body>
</html>