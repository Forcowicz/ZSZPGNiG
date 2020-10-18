 const form = document.getElementById('form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    username.addEventListener('focusout', function () {
        checkUsernameInput();
    });

    password.addEventListener('focusout', function () {
        checkPasswordInput();
    });

    function checkUsernameInput() {
        const usernameValue = username.value.trim();

        if(usernameValue === '') {
            setErrorFor(username, 'To pole nie może być puste!')
        } else if (usernameValue.length <= 3) {
            setErrorFor(username, 'Nazwa użytkownika jest za krótka!');
        } else {
            setSuccessFor(username);
        }
    }

    function checkPasswordInput() {
        const passwordValue = password.value.trim();

        if(passwordValue === '') {
            setErrorFor(password, 'To pole nie może być puste!');
        } else if (passwordValue.length <= 3) {
            setErrorFor(password, 'Hasło jest za krótkie!');
        } else {
            setSuccessFor(password);
        }
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