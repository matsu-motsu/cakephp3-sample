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
                    <button id="openWindowButton" style="display:none">Open External Window</button>
                    <button id="closeWindowButton" style="display:none">Close LIFF App</button>
                </div>
                <div class="buttonRow">
                    <button id="sendMessageButton" style="display:none">Send Message</button>
                    <button id="getAccessToken" style="display:none">Get Access Token</button>
                </div>
                <div class="buttonRow">
                    <button id="getProfileButton">Get Profile</button>
                    <button id="shareTargetPicker" style="display:none">Open Share Target Picker</button>
                </div>
            </div>
            <h2>userId</h2>
            <p id="userIdProfileField"></p>
            <div id="shareTargetPickerMessage" style="display:none"></div>
            <!-- ACCESS TOKEN DATA -->
            <div id="accessTokenData" class="hidden textLeft" style="display:none">
                <h2>Access Token</h2>
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
                <h2 style="display:none">userId</h2>
                <p id="userIdProfileField3"></p>
                <a href="#" onclick="toggleProfileData()" style="display:none">Close Profile</a>
                <div id="profilePictureDiv" style="display:none">
                </div>
                <table>
                    <tr style="display:none">>
                        <th>userId</th>
                        <td id="userIdProfileField2"></td>
                    </tr>
                    <tr style="display:none">
                        <th>displayName</th>
                        <td id="displayNameField"></td>
                    </tr>
                    <tr style="display:none">
                        <th>statusMessage</th>
                        <td id="statusMessageField"></td>
                    </tr>
                </table>
            </div>
            <!-- LIFF DATA -->
            <div id="liffData" style="display:none">
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
            <div class="buttonGroup" style="display:none">
                <button id="liffLoginButton">Log in</button>
                <button id="liffLogoutButton">Log out</button>
            </div>
            <div id="statusMessage" style="display:none">
                <div id="isInClientMessage"></div>
                <div id="apiReferenceMessage">
                    <p>Available LIFF methods vary depending on the browser you use to open the LIFF app.</p>
                    <p>Please refer to the <a href="https://developers.line.biz/en/reference/liff/#initialize-liff-app">API reference page</a> for more information.</p>
                </div>
            </div>
        </div>
        <!-- LIFF ID ERROR -->
        <div id="liffIdErrorMessage" class="hidden" style="display:none">
            <p>You have not assigned any value for LIFF ID.</p>
            <p>If you are running the app using Node.js, please set the LIFF ID as an environment variable in your Heroku account follwing the below steps: </p>
            <code id="code-block">
                <ol>
                    <li>Go to `Dashboard` in your Heroku account.</li>
                    <li>Click on the app you just created.</li>
                    <li>Click on `Settings` and toggle `Reveal Config Vars`.</li>
                    <li>Set `MY_LIFF_ID` as the key and the LIFF ID as the value.</li>
                    <li>Your app should be up and running. Enter the URL of your app in a web browser.</li>
                </ol>
            </code>
            <p>If you are using any other platform, please add your LIFF ID in the <code>index.html</code> file.</p>
            <p>For more information about how to add your LIFF ID, see <a href="https://developers.line.biz/en/reference/liff/#initialize-liff-app">Initializing the LIFF app</a>.</p>
        </div>
        <!-- LIFF INIT ERROR -->
        <div id="liffInitErrorMessage" class="hidden" style="display:none">
            <p>Something went wrong with LIFF initialization.</p>
            <p>LIFF initialization can fail if a user clicks "Cancel" on the "Grant permission" screen, or if an error occurs in the process of <code>liff.init()</code>.</p>
        </div>
        <!-- NODE.JS LIFF ID ERROR -->
        <div id="nodeLiffIdErrorMessage" class="hidden" style="display:none">
            <p>Unable to receive the LIFF ID as an environment variable.</p>
        </div>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <?= $this->Html->script('liff-starter2') ?>
    </body>
</html>