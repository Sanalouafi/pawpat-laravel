const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('c_password');

nameInput.addEventListener('input', validateName);
phoneInput.addEventListener('input', validatePhone);
emailInput.addEventListener('input', validateEmail);
passwordInput.addEventListener('input', validatePassword);
confirmPasswordInput.addEventListener('input', validateConfirmPassword);

function validateName() {
    const nameError = document.getElementById('nameError');
    if (nameInput.value.trim() === '') {
        nameError.innerText = 'Please enter your full name.';
    } else {
        nameError.innerText = '';
    }
}

function validatePhone() {
    const phoneError = document.getElementById('phoneError');
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phoneInput.value.trim())) {
        phoneError.innerText = 'Please enter a valid phone number (10 digits).';
    } else {
        phoneError.innerText = '';
    }
}

function validateEmail() {
    const emailError = document.getElementById('emailError');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailInput.value.trim())) {
        emailError.innerText = 'Please enter a valid email address.';
    } else {
        emailError.innerText = '';
    }
}

function validatePassword() {
    const passwordError = document.getElementById('passwordError');
    if (passwordInput.value.trim() === '') {
        passwordError.innerText = 'Please enter a password.';
    } else if (passwordInput.value.trim().length < 6) {
        passwordError.innerText = 'Password must be at least 6 characters long.';
    } else {
        passwordError.innerText = '';
    }
}

function validateConfirmPassword() {
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    if (confirmPasswordInput.value.trim() === '') {
        confirmPasswordError.innerText = 'Please confirm your password.';
    } else if (passwordInput.value.trim() !== confirmPasswordInput.value.trim()) {
        confirmPasswordError.innerText = 'Passwords do not match.';
    } else {
        confirmPasswordError.innerText = '';
    }
}

document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault();
      if(validateForm()){
        this.submit();

    }

});

function validateForm() {
    validateName();
    validatePhone();
    validateEmail();
    validatePassword();
    validateConfirmPassword();

    const errorMessages = document.querySelectorAll('.text-red-500');
    for (let i = 0; i < errorMessages.length; i++) {
        if (errorMessages[i].innerText !== '') {
            return false;
        }
    }

    return true;
}
