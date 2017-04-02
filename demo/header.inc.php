<?php
/*
  Page header
 */
require_once 'class/ConnectionManager.php';
if (empty(session_id())) {
    session_start();
    session_write_close();
}
$cm = new ConnectionManager();
?>
<div class="header">
    <div class="header-container">
        <div>
            Mon super site qui déchire
        </div>
        <div>
            <?php
            if (isset($_SESSION['conn_token']) && $cm->isValidConnection($_SESSION['conn_token'])) {
                echo ' <button id="disconnect-btn-header" class="w3-btn w3-ripple w3-orange">Disconnect</button>';
            }
            ?>
            <script type="text/javascript">
                var btn = document.getElementById('disconnect-btn-header');
                if (btn) {
                    btn.addEventListener("click", function () {
                        disconnect();
                    }, false);

                }

            </script>
        </div>
    </div>
</div>