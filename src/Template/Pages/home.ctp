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
                <div class="buttonRow hidden">
                    <button id="openWindowButton">Open External Window</button>
                    <button id="closeWindowButton">Close LIFF App</button>
                </div>
                <div class="buttonRow hidden">
                    <button id="sendMessageButton">Send Message</button>
                    <button id="getAccessToken">Get Access Token</button>
                </div>
                <div class="buttonRow hidden">
                    <button id="getProfileButton">Get Profile</button>
                    <button class="hidden" id="shareTargetPicker">Open Share Target Picker</button>
                </div>
            </div>
            <div id="shareTargetPickerMessage"></div>
            <!-- ACCESS TOKEN DATA -->
            <div id="accessTokenData" class="hidden textLeft">
                <a href="#" onclick="toggleAccessToken()">Close Access Token</a>
                <table>
                    <tr>
                        <th>accessToken</th>
                        <td id="accessTokenField"></td>
                    </tr>
                </table>
            </div>
            <!-- PROFILE INFO -->
            <div id="profileInfo" class="hidden textLeft">
                <h2>Profile</h2>
                <a href="#" class="hidden"> onclick="toggleProfileData()">Close Profile</a>
                <div class="hidden"> id="profilePictureDiv">
                </div>
                <table>
                    <tr>
                        <th>userId</th>
                        <td id="userIdProfileField"></td>
                    </tr>
                    <tr class="hidden">>
                        <th>displayName</th>
                        <td id="displayNameField"></td>
                    </tr>
                    <tr class="hidden">>
                        <th>statusMessage</th>
                        <td id="statusMessageField"></td>
                    </tr>
                </table>
            </div>
            <!-- LIFF DATA -->
            <div id="liffData" class="hidden">
                <h2 id="liffDataHeader" class="textLeft">LIFF Data</h2>
                <table>
                    <tr>
                        <th>OS</th>
                        <td id="deviceOS" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>Language</th>
                        <td id="browserLanguage" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>LIFF SDK Version</th>
                        <td id="sdkVersion" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>LINE Version</th>
                        <td id="lineVersion" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>isInClient</th>
                        <td id="isInClient" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>isLoggedIn</th>
                        <td id="isLoggedIn" class="textLeft"></td>
                    </tr>
                </table>
            </div>
            <!-- LOGIN LOGOUT BUTTONS -->
            <div class="buttonGroup">
                <button id="liffLoginButton">Log in</button>
                <button id="liffLogoutButton">Log out</button>
            </div>
            <div id="statusMessage">
                <div id="isInClientMessage"></div>
                <div id="apiReferenceMessage">
                </div>
            </div>
        </div>
        <!-- LIFF ID ERROR -->
        <div id="liffIdErrorMessage" class="hidden">
            <code id="code-block">
            </code>
        </div>
        <!-- LIFF INIT ERROR -->
        <div id="liffInitErrorMessage" class="hidden">
        </div>
        <!-- NODE.JS LIFF ID ERROR -->
        <div id="nodeLiffIdErrorMessage" class="hidden">
        </div>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <?= $this->Html->script('liff-starter2') ?>
    </body>
</html>