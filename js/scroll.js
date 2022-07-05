    $(document).ready(function () {
        const navbar = document.querySelector('.nav-dent');
        const navlink = document.querySelector('.nav-link'); 
        window.onscroll = () => {
            if (window.scrollY > 100) {
                $('#logo-blanco').prop("src", "/img/logo.png");
                navbar.classList.add('nav-active');
                $('.nav-link').each(function (i, obj) {
                    obj.classList.add('nav-link-active');
                });
            } else {
                if ($(window).innerWidth() > 1199) {
                    navbar.classList.remove('nav-active');
                $('#logo-blanco').prop("src", "/img/Logo-Dentininos-Blanco.png");
                $('.nav-link').each(function (i, obj) {
                    obj.classList.remove('nav-link-active');
                });
                }
                
            }
        };
        
    })
