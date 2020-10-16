<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zespół Szkół PGNiG im. Walorego Goetla w Krakowie</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="verification">
<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/kiranshastry" title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
<main>
    <div class="verify">
        <div class="verify__content">
            <div class="u-center-text u-margin-bottom-sm">
                <h3 class="heading-tertiary">Logowanie</h3>
            </div>
            <form action="index.php" class="form verify__form" method="post" id="form">
                <div class="form__group">
                    <label for="username" class="form__label">Nazwa użytkownika</label>
                    <input type="text" class="form__input" name="username" id="username" autocomplete="off" placeholder="Wpisz nazwę użytkownika">
                    <svg class="form__icon form__icon--positive"><use xlink:href="assets/icons/sprite.svg#check"></use></svg>
                    <svg class="form__icon form__icon--negative"><use xlink:href="assets/icons/sprite.svg#exclamation"></use></svg>
                    <small class="form__error">Error</small>
                </div>
                <div class="form__group">
                    <label for="password" class="form__label">Hasło</label>
                    <input type="password" class="form__input" name="password" id="password" autocomplete="off" placeholder="Wpisz hasło">
                    <svg class="form__icon form__icon--positive"><use xlink:href="assets/icons/sprite.svg#check"></use></svg>
                    <svg class="form__icon form__icon--negative"><use xlink:href="assets/icons/sprite.svg#exclamation"></use></svg>
                    <small class="form__error">Error</small>
                </div>
                <div class="u-center-text">
                    <input type="submit" class="btn btn--gradient" name="submit" value="Wyślij">
                </div>
            </form>
            <script src="assets/js/form-handler.js"></script>
        </div>
    </div>
</main>

</body>
</html>