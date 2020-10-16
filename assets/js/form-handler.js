 const form = document.getElementById('form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    var errorArray = [];

    username.addEventListener('focusout', function () {
    checkInputs();
});

    password.addEventListener('focusout', function () {
    checkInputs();
});

    function checkInputs() {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if(usernameValue === '') {
    setErrorFor(username, 'To pole nie może być puste!');
    errorArray.push('Nick pusty.');
} else if (usernameValue.length <= 3) {
    setErrorFor(username, 'Nazwa użytkownika jest za krótka!');
    errorArray.push('Nick za krótki.')
} else {
    setSuccessFor(username);
}

    if(passwordValue === '') {
    setErrorFor(password, 'To pole nie może być puste!');
    errorArray.push('Hasło puste.');
} else if (passwordValue.length <= 3) {
    setErrorFor(password, 'Hasło jest za krótkie!');
    errorArray.push('Hasło za krótkie.');
} else {
    setSuccessFor(password);
}

    function setErrorFor(input, message) {
    const formGroup = input.parentElement;
    const error = formGroup.querySelector('.form__error');

    error.innerText = message;
    formGroup.className = 'form__group form__group--error';
    input.className = 'form__input form__input--error';
}

    function setSuccessFor(input) {
    const formGroup = input.parentElement;
    formGroup.className = 'form__group form__group--success';
    input.className = 'form__input form__input--success';
}
}