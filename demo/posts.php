<?php
include 'connection.inc.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Post page</title>

        <link href="css/w3.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <script src="js/common.js" type="text/javascript"></script>
    </head>
    <body>
<?php include 'header.inc.php'; ?>
        <p>
            If you see this page, you are logged-in.
        </p>
        <div id="postsSection">
            <form id="form-post">
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Subject:</td>
                            <td>
                                <input type="text" name="subject" value="" size="50" />

                            </td>
                        </tr>
                        <tr>
                            <td>Message:</td>
                            <td>
                                <textarea name="msg" rows="4" cols="50"></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <button id="form-btn" class="w3-btn w3-ripple w3-blue">Send</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        
        <a href="protected.php">
                <button id="disconnect-btn-header" class="w3-btn w3-ripple w3-green">Back</button>
            </a>

        <script type="text/javascript">
            document.getElementById('form-btn').addEventListener("click", function () {
                postMsg('form-post');
                return false; // prevent reload
            }, false);
        </script>
    </body>
</html>
