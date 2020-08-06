/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @package Simplus Blog
 */

(function ($) {

    wp.customize('blogname', function (value) {
        var $title = $('.site-title a');
        value.bind(function (to) {
            $title.text(to);
        });
    });
    wp.customize('blogdescription', function (value) {
        var $description = $('.site-description');
        value.bind(function (to) {
            $description.text(to);
        });
    });
    wp.customize('simplus_blog_sidebar_pos', function (value) {
        var $body = $('body');
        var $primary = $('#primary');
        var $secondary = $('#secondary');
        value.bind(function (to) {
            switch (to) {
                case 'no':
                    $body.addClass('no-sidebar').removeClass('right-sidebar').removeClass('left-sidebar');
                    $primary.addClass('col-sm-12').removeClass('col-sm-8').removeClass('col-sm-push-4');
                    $secondary.addClass('hidden');
                    break;
                case 'left':
                    $body.addClass('left-sidebar').removeClass('right-sidebar').removeClass('no-sidebar');
                    $primary.addClass('col-sm-8').addClass('col-sm-push-4').removeClass('col-sm-12');
                    $secondary.addClass('col-sm-4').addClass('col-sm-pull-8').removeClass('hidden');
                    break;
                default: // right
                    $body.addClass('right-sidebar').removeClass('left-sidebar').removeClass('no-sidebar');
                    $primary.addClass('col-sm-8').removeClass('col-sm-push-4').removeClass('col-sm-12');
                    $secondary.addClass('col-sm-4').removeClass('col-sm-pull-8').removeClass('hidden');
                    break;
            }
        });
    });
    wp.customize('simplus_blog_footer_copyright', function (value) {
        var $copyright = $('#footer_copyright');
        value.bind(function (to) {
            $copyright.html('<p>' + to + '</p>');
        });
    });
    wp.customize('header_textcolor', function (value) {
        value.bind(function (to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });
})(jQuery);
