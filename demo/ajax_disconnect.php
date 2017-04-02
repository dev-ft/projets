<?php
session_start();
session_destroy();
unset($_SESSION['conn_token']);
session_write_close();