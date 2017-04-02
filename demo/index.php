
<?php
require_once 'class/ConnectionManager.php';
if (empty(session_id())) {
    session_start();
    print_r($_SESSION);
    session_write_close();
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <script src="js/common.js" type="text/javascript"></script>
        <style>
            html, body {
                padding: 0;
                margin: 0;
                height: 100%;
            }

            div, input {
                box-sizing: border-box;
            }
            input {
                text-align: center;
            }

            .flex-container {
                height: 100%;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .flex-item {
                background-color: #00A388;
                padding: 5px;
                margin: 10px;
                color: white;
                text-align: center;
            }
            .formflex {
                padding: 20px;
                border:2px solid #4CAF50;
                border-radius: 9px;
            }
            .formflex-section {
                padding: 0;
                margin: 0;
                padding-bottom: 10px;
            }

            .flex-item-growable {
                display: flex;
                flex: 1 0 auto;
            }

            .full-width {
                width: 100%;
            }
            .full-height {
                height: 100%;
            }
        </style>
    </head>
    <body>
        <?php include 'header.inc.php'; ?>

        <div class="flex-container">
            <div class="formflex">
                <form id="login-form" action="#" method="POST"  onsubmit="return false;">
                    <div class="formflex-section">
                        <div>
                            Login:
                        </div>
                        <div class="flex-item-growable">
                            <input class="full-width" type="text" name="logintf" value="" />
                        </div>
                    </div>
                    <div class="formflex-section">
                        <div>
                            Password:
                        </div>
                        <div class="flex-item-growable">
                            <input class="full-width" type="password" name="passwdtf" value="" />
                        </div>
                    </div>

                    <div class="formflex-section">
                        <button id="connectBtn" class="w3-btn w3-ripple w3-green full-width">Connection</button>
                    </div>
                </form>
         <hr>
        <?php
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        ?>
            </div>
        </div>


        <script type="text/javascript">
            document.getElementById('connectBtn').addEventListener("click", function () {
                connect('login-form');
                return false; // prevent reload
            }, false);
        </script>
    </body>
</html>
