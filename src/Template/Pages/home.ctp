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
            <!-- ACTION BUTTONS -->
            <div class="buttonGroup">
                <div class="buttonRow">
                    <button id="getProfileButton">Get Profile</button>
                </div>
            </div>
            <!-- PROFILE INFO -->
            <div id="profileInfo" class="hidden textLeft">
                <h2>Profile</h2>
                <a href="#" onclick="toggleProfileData()">Close Profile</a>
                <table>
                    <tr>
                        <th>userId</th>
                        <td id="userIdProfileField"></td>
                    </tr>
                </table>
            </div>
        </div>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <?= $this->Html->script('liff-starter2') ?>
    </body>
</html>