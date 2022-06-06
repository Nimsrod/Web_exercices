<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séance 20</title>
    <style>
        .button{
            background-color: red;
            color: white;
            padding: 8px;
            width: 120px;
            margin: 8px auto    ;
        }

        .box{
            display: block;
            margin-left: 700px;
        }

        .pop{
            display: none;
            text-align: center;
            margin-left: 600px;
            margin-right: 600px;
        }
        #right{
            float: right;
            padding: 0 0 0 0;
            margin: 0 0 0 0;
            color: black;
            background-color: white;
            
        }

    </style>
</head>
<body>
    <div class="box">
        
        <button class="button">Click</button>
    
    </div>

    <div class="pop">
        <button id="right">X</button>
        <h1>Ninja Sales !!!</h1>
        <p>50% off all clothing. don't miss out !!!</p>

        <button class="button">Click here</button>
    </div>


    <script src="script.js"></script>
</body>
</html>