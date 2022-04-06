<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIFF Starter</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <button id="getProfileButton">Get Profile</button>
        <h5>LINE USER ID</h5>
        <p id="user-id"></p>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <?= $this->Html->script('liff-starter2') ?>
    </body>
</html>