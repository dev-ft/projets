<?php
include 'connection.inc.php';
require_once 'class/DBForumPost.class.php';
require_once 'class/User.class.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Protected page</title>

        <link href="css/w3.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/common.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include 'header.inc.php'; ?>
        <p>
            If you see this page, you are logged-in.
        </p>
        <div id="postsSection">
            <?php
            $manager = new DBForumPost();
            
            $posts = $manager->getPostsOnDay(time());
            if (count($posts) == 0) {
                echo '<p>No post today !</p>';
            } else {
                /* @var ForumPost post */
                foreach ($posts as $post) {
                    /* @var User $usr */
                    $usr = $post->getAuthor();
                    
                    echo '<div class="post-subject">';
                    echo '<a href="http://www.apple.com" target="_blank">'.$post->getSubject() . '</a> on ' . strftime("%d/%m/%Y", $post->getCreationDate()) . ' at ' . strftime("%H:%M:%S", $post->getCreationDate());
                    echo ' by ' . $usr->getFName().' '.$usr->getLName();
                    echo '</div>';

                    echo '<div class="post-body">';
                    echo $post->getContents();
                    echo '</div>';
                }
            }
            ?>
            <a href="posts.php">
                <button id="disconnect-btn-header" class="w3-btn w3-ripple w3-green">Post Something</button>
            </a>

        </div>
    </body>
</html>
