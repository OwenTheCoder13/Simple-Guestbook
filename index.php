<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Simple Guest Book</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <script src="script.js"></script>
        <form id="guestbook-form" action="submit.php" method="POST">
            <input type="text" name="name" placeholder="What is your name?">
            <textarea name="message" placeholder="What is your message?"></textarea>
            <button type="submit">Submit</button>
        </form>
        <div id="messages">
            <?php include "display.php"; ?>
        </div>
    </body>
</html>