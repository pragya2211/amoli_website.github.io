/**
 * File script.js.
 *
 * Theme custome javascript file.
 *
 * @package Simplus Blog
 */
 jQuery(function ($) {
 	$('a[href="#toggle-search"]').on('click', function (event) {
        event.preventDefault();
        $('.navbar-default .bootsnipp-search .input-group > input').val('');
        $('.navbar-default .bootsnipp-search').toggleClass('open');
        $('a[href="#toggle-search"]').closest('li').toggleClass('active');

        if ($('.navbar-default .bootsnipp-search').hasClass('open')) {
            /* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
            setTimeout(function () {
                $('.navbar-default .bootsnipp-search .form-control').focus();
            }, 100);
        }
    });

    $(document).on('keyup', function (event) {
        if (event.which == 27 && $('.navbar-default .bootsnipp-search').hasClass('open')) {
            $('a[href="#toggle-search"]').trigger('click');
        }
    });
 });
