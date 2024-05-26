document.addEventListener("DOMContentLoaded", function() {
    function toggleBodyOverflow() {
        const body = document.querySelector('body');
        if (body.style.overflow === 'hidden') {
            body.style.overflow = 'auto'; // Abilita lo scorrimento
        } else {
            body.style.overflow = 'hidden'; // Disabilita lo scorrimento
        }
    }

    const menuToggle = document.getElementById("menu-bar");
    const menu = document.getElementById("menu");
    const exitMenu = document.getElementById("exit-menu");

    menuToggle.addEventListener("click", function() {
        menu.classList.toggle("show");
        exitMenu.classList.toggle("show");
        toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
    });

    exitMenu.addEventListener("click", function() {
        menu.classList.remove("show");
        exitMenu.classList.remove("show");
        toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
    });

    flatpickr('#giornata', {
        enableTime: true,
        dateFormat: "Y-m-d\\TH:i",
        locale: 'it', // Imposta la lingua italiana
        minDate: "today", // Data minima odierna
        minTime: "08:00", // Ora minima (8:00 AM)
        maxTime: "21:00", // Ora massima (9:00 PM)
        disable: [
            function(date) {
                return date.getDay() === 0; // Disabilita la domenica (0 = Domenica, 1 = Lunedì, ..., 6 = Sabato)
            }
        ]
    });

    flatpickr('#otherElement', {
        enableTime: true,
        dateFormat: "Y-m-d\\TH:i",
        locale: 'en', // Imposta la lingua inglese per un altro elemento
    });
});
