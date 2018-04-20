function signUp() {
    var attributeList = [];
    var dataEmail = {
        Name : 'email',
        Value : id + document.getElementById("myMasonNetID").value
    };
    var attributeEmail =
    new AWSCognito.CognitoIdentityServiceProvider.CognitoUserAttribute(dataEmail);

    attributeList.push(attributeEmail);

    var cognitoUser;
    userPool.signUp('username', document.getElementById("createPassword").value, attributeList, null, function(err, result){
        if (err) {
            alert(err);
            return;
        }
        cognitoUser = result.user;
        console.log('user name is ' + cognitoUser.getUsername());
    });
}
