// When using loose Javascript files:
var CognitoUserPool = AmazonCognitoIdentity.CognitoUserPool;

// Modules, e.g. Webpack:
var AmazonCognitoIdentity = require('amazon-cognito-identity-js');
var CognitoUserPool = AmazonCognitoIdentity.CognitoUserPool;

// ES Modules, e.g. transpiling with Babel
import { CognitoUserPool, CognitoUserAttribute, CognitoUser, AuthenticationDetails } from 'amazon-cognito-identity-js';

function registerUser() {
    AWSCognito.config.region = 'us-east-2';

    var poolData = {
        UserPoolId : 'us-east-1_lhOTNBd1g', // your user pool id here
        ClientId : '3s4rr5dlmgrn76o8fukcec48p8' // your app client id here
    };

    var userPool = new CognitoUserPool(poolData);
    var id = document.getElementById("myMasonNetID").value;
    var email = document.getElementById("myMasonNetID").value + "@gmu.edu";
    var password = document.getElementById("createPassword").value;

    var attributeList = [];

    var dataEmail = {
        Name : 'email',
        Value : email;
    };

    var attributeEmail = new CognitoUserAttribute(dataEmail);

    attributeList.push(attributeEmail);

    userPool.signUp(id, password, attributeList, null, function(err, result){
        if (err) {
            alert(err.message || JSON.stringify(err));
            return;
        }
        else {
          window.location.href = "../afterSignUp.html";
        }
        cognitoUser = result.user;
        console.log('user name is ' + cognitoUser.getUsername());
    });
}

function confirm() {
    var poolData = {
        UserPoolId : 'us-east-1_lhOTNBd1g',
        ClientId : '3s4rr5dlmgrn76o8fukcec48p8'
    };

    var userPool = new CognitoUserPool(poolData);
    var username = document.getElementById("myMasonNetID").value;
    var password = document.getElementById("enterPassword").value;
    var code = document.getElementById("confirmCode").value;

    var userData = {
        Username : username,
        Pool : userPool
    };

    //think we may need to go ahead and see if this verification is successful, then to log the user in
    var cognitoUser = new AmazonCognitoIdentity.CognitoUser(userData);
    cognitoUser.confirmRegistration(code, true, function(err, result) {
        if (err) {
            alert(err.message || JSON.stringify(err));
            return;
        }
        console.log('call result: ' + result);
    });
}

//authenticate user to log on
function authenticate() {
    var username = document.getElementById("enterMasonNetID").value;
    var password = document.getElementById("enterPassword").value;

    var authenticationData = {
        Username : username,
        Password : password,
    };

    var authenticationDetails = new AuthenticationDetails(authenticationData);

    var poolData = {
        UserPoolId : 'us-east-1_lhOTNBd1g',
        ClientId : '3s4rr5dlmgrn76o8fukcec48p8'
    };

    var userPool = new CognitoUserPool(poolData);
    var userData = {
        Username : username,
        Pool : userPool
    };

    var cognitoUser = new AmazonCognitoIdentity.CognitoUser(userData);
    cognitoUser.authenticateUser(authenticationDetails, {
        onSuccess: function (result) {
            console.log('access token + ' + result.getAccessToken().getJwtToken());

            AWS.config.region = 'us-east-2';

            AWS.config.credentials = new AWS.CognitoIdentityCredentials({
                IdentityPoolId : '...', // your identity pool id here
                Logins : {
                    // Change the key below according to the specific region your user pool is in.
                    'cognito-idp.us-east-2.amazonaws.com/us-east-1_lhOTNBd1g' : result.getIdToken().getJwtToken()
                }
            });

            //refreshes credentials using AWS.CognitoIdentity.getCredentialsForIdentity()
            AWS.config.credentials.refresh((error) => {
                if (error) {
                     console.error(error);
                } else {
                     // Instantiate aws sdk service objects now that the credentials have been updated.
                     // example: var s3 = new AWS.S3();
                     console.log('Successfully logged!');
                }
            });
            window.location.href = "../choose.html";
        },

        onFailure: function(err) {
            alert(err.message || JSON.stringify(err));
        },

    });
}
