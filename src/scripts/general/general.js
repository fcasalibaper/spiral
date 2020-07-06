import $ from 'jquery';
import { isSafari, isAppleDevice, toolResponsive } from '../utils/utils';


export default function General() {
    const spiral = {
        init: () => {
            $(document).ready(function(){
                spiral.ready();
                // toolResponsive();
            }); 
        },

        ready: () => {
            // toolResponsive();
            spiral.menuOpen();
            spiral.formValidation.init();
            spiral.openModalIngresar();
            spiral.dropDown();
            spiral.hideFooterContentOnSection();
            spiral.checkElement()
        },

        hideFooterContentOnSection : () => {
            let location = window.location.pathname;

            if ( location.indexOf('login') > 0 || location.indexOf('recovery') > 0 ) {
                $('.dudas__info').hide();
            }
        },

        checkElement : () => {
            if (isAppleDevice()) {
                isSafari('.header__menu__list__login');
            }
        },

        // MI CUENTA MENU
        dropDown : () => {
            const $btnAccount= $('.headerList__mobile__account');

            $btnAccount.on('click', function () {
                $(this).toggleClass('active')
            })
        },

        // MODAL INGRESAR
        openModalIngresar: () => {
            // OPEN INGRESAR
            const $body = $('body');
            const $modalIngresar = $('.modalIngresar');
            const $overflow = $('.overflow');
            const $btnIngresar = $('#btnModalIngresar, .header__login__mobile');

            $btnIngresar.on('click', function(){
                if (!$body.hasClass('openIngresar')) {
                    $body.addClass('openIngresar');
                }
            })

            $modalIngresar.find('.closeModal').on('click', close)
            
            $overflow.mousedown(close);

            function close() {
                if ($body.hasClass('openIngresar')) {
                    return $body.removeClass('openIngresar');
                }
            }
        },

        // MENU MOBILE
        menuOpen : () => {
            const $elAction = $('.menu--hamburger');
            const $body = $('body');

            $elAction.add('.dropdown > li a').on('click', function(event){
                $body.toggleClass('openMenu');

                console.log('hola')
            });
        }, 
        
        formValidation : {
            init : () => {
                spiral.formValidation.validateForm();
                spiral.formValidation.inpurCounterLimit();
            },
            validateForm : () => {
                var forms = $('.needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            },

            inpurCounterLimit : () => {
                // add a span tag to display the counter
                $(".post_title").prev("label").children(".adverts-form-required").after("<span class=\"title-counter\">22</span>");

                // add an input length limit
                $(".post_title").keydown(function(){
                    if(this.value.length > 22){
                        return false;
                    }
                    $(".title-counter").html(+(22 - this.value.length));
                });
            }
            
        },
    };

    spiral.init();

};
General();
