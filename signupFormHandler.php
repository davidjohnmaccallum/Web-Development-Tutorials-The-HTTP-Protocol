<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];

    if (!strpos($emailAddress, '@')) {
        http_response_code(400);
        exit();
    }

    if (strpos($emailAddress, '*')) {
        http_response_code(500);
        exit();
    }

?>

<html>
    <head>
        <title>Polar Bear Conservation Society</title>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <style>
            body {
                font-family: 'Titillium Web', sans-serif;
            }
            .left {
                float:left;
                width: 365px;
            }
            .right {
                margin-left: 365px;
            }
            .centered-text {
                text-align: center;
            }
            .centered-image {
                margin: auto;
                display: block;
            }
            .data-recieved {
                border: 1px solid gray;
                padding: 1em;
                width: 30em;
                margin: auto;                
            }
            .label {
                width: 12em;
                display: inline-block;    
                text-align: right;
                padding-right: 1em;
            }
            .value {
                width: 22em;                
            }
        </style>
    </head>
    <body>
        <div class="left">
            <img src="./polarbear2.jpg"/>
        </div>
        <div class="right">
            <h1 class="centered-text">Thank you for signing up!</h1>
            <div class="data-recieved">
                <div>
                    <span class="label">First name:</span>
                    <span class="value"><?php echo $firstName; ?></span>
                </div>
                <div>
                    <span class="label">Last name:</span>
                    <span class="value"><?php echo $lastName; ?></span>
                </div>
                <div>
                    <span class="label">Email address:</span>
                    <span class="value"><?php echo $emailAddress; ?></span>
                </div>
            </div>
            <p class="centered-text"><a href="/http-protocol">Home</a></p>
        </div>
    </body>
</html>

