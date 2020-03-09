<html>
    <head>
        <title>Futrzasta Dolina</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icon.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/fontello.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="menu.js"></script>

        <script>
            function paypal(){
                document.getElementById("donate-box-top").innerHTML = '<a>Paypal Donate</a>';
                document.getElementById("donate-box-bot").innerHTML = '<div class="buttons"> <button onclick="paypal()">Paypal</button> <button onclick="psc()">PaySafeCard</button> <button onclick="dotpay()">Dotpay</button> </div> <form action="paypal"  method="POST"> <a>Donate in PLN</a> <input type="number"> <br> <a>Your Nickname</a> <br> <input type="text"> <br> <button>Donate</button> </form>';
            }

            function psc(){
                document.getElementById("donate-box-top").innerHTML = '<a>PSC Donate</a>';
                document.getElementById("donate-box-bot").innerHTML = '<div class="buttons"> <button onclick="paypal()">Paypal</button> <button onclick="psc()">PaySafeCard</button> <button onclick="dotpay()">Dotpay</button> </div> <form action="psc"  method="POST"> <a>Donate in PLN</a> <input type="number"> <br> <a>Your Nickname</a> <br> <input type="text"> <br> <button>Donate</button> </form>';
            }

            function dotpay(){
                document.getElementById("donate-box-top").innerHTML = '<a>Dotpay Donate</a>';
                document.getElementById("donate-box-bot").innerHTML = '<div class="buttons"> <button onclick="paypal()">Paypal</button> <button onclick="psc()">PaySafeCard</button> <button onclick="dotpay()">Dotpay</button> </div> <form action="dotpay"  method="POST"> <a>Donate in PLN</a> <input type="number"> <br> <a>Your Nickname</a> <br> <input type="text"> <br> <button>Donate</button> </form>';
            }
        </script>
    </head>
    <body onload="paypal()">
        <div class="header">
            <div class=inheader>
                <div class="logo">
                    <h1>
                        Futrzasta Dolina
                    </h1>
                </div>
                <div id="navbutton">
                    <button onclick="togglemenu()"><i class='icon-menu'></i></button>
                </div>
                <div class="nav">
                <ul class="navigation">
                    <a href="index.php"><li>Home</li></a>
                    <a href="https://discord.gg/33Rf4C7"><li>Discord</li></a>
                    <a href="players.php"><li>About Server</li></a>
                </ul>
                </div>
            </div>
        </div>
        <div id="mobilemenu">
            
            <div class="discordbutton">
                <a href="https://discord.gg/33Rf4C7"><li>Join our Discord</li></a>
            </div>
            <div class="donatebutton">
                <a href="donate.php"><li>Support our server</li></a>
            </div>
            <div class="playersbutton">
                <a href="players.php"><li>About Server</li></a>
            </div>
            <div class="homebutton">
                    <a href="index.php"><li>Home</li></a>
                </div>
        </div>
        <div class="container2">
            <div class="space" style="height: 20px;"></div>
            <div class="donate-box">
                <div class="donate-box-top" id="donate-box-top">
                    <a>Donate</a>
                </div>
                <div class="donate-box-bot" id="donate-box-bot">
                    <div class="buttons">
                        <button onclick="paypal()">Paypal</button>
                        <button onclick="psc()">PaySafeCard</button>
                        <button onclick="dotpay()">Dotpay</button>
                    </div>
                    <form action="" method="POST">
                        <a>Donate in PLN</a>
                        <input type="number">
                        <br>
                        <a>Your Nickname</a>
                        <br>
                        <input type="text">
                        <br>
                        <button>Donate</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>