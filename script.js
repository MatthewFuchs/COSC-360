document.getElementById("clickMeButton").addEventListener("click", function() {
    document.getElementById("outputMessage").innerText = "Button Clicked!";
});

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function login() {
    // Add logic for handling login
    alert('Login logic goes here');
    closeModal('loginModal');
}

function forgotLogin() {
    alert('Forgot Login logic goes here');
    // Add actual logic for handling forgot login
    closeModal('loginModal');
}


function signup() {
    var newUsername = document.getElementById('newUsername').value;
    var newPassword = document.getElementById('newPassword').value;
    var profilePicture = document.getElementById('profilePicture').files[0];

    // Placeholder logic to display information
    alert('Username: ' + newUsername + '\nPassword: ' + newPassword + '\nProfile Picture: ' + (profilePicture ? profilePicture.name : 'Not provided'));

    // Add actual signup logic here
    closeModal('signupModal');
}

function displayFileName() {
    var selectedFile = document.getElementById('profilePicture').files[0];
    var selectedFileDisplay = document.getElementById('selectedFile');
    
    if (selectedFile) {
        selectedFileDisplay.innerText = 'Selected File: ' + selectedFile.name;
    } else {
        selectedFileDisplay.innerText = '';
    }
}


document.getElementById('loginLink').addEventListener('click', function() {
    openModal('loginModal');
});

document.getElementById('signupLink').addEventListener('click', function() {
    openModal('signupModal');
});
