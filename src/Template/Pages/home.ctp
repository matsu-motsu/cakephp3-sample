<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIFF Starter</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="liffAppContent">
            <button id="getProfileButton">Get Profile</button>
            <!-- PROFILE INFO -->
            <div id="profileInfo" class="hidden textLeft">
                <h2>Profile</h2>
                <a href="#" onclick="toggleProfileData()">Close Profile</a>
                <div id="profilePictureDiv">
                </div>
                <table>
                    <tr>
                        <th>userId</th>
                        <td id="userIdProfileField"></td>
                    </tr>
                    <tr>
                        <th>displayName</th>
                        <td id="displayNameField"></td>
                    </tr>
                    <tr>
                        <th>statusMessage</th>
                        <td id="statusMessageField"></td>
                    </tr>
                </table>
            </div>
        </div>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <?= $this->Html->script('liff-starter2') ?>
    </body>
</html>