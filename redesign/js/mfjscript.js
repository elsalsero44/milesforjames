'use strict';

const ANIMATION_SPEED = 300;

let isAnimating = false,
    isOpen = false;

function show() {
    $('[data-js="navlist"]').removeClass('d-none');
    $('[data-js="navlist-options"]').animate({ left: '0'}, ANIMATION_SPEED, () => {
        isAnimating = false;
        isOpen = true;
    });
    $('[data-js="navlist-overlay"]').animate({ backgroundColor: 'rgba(0,0,0,0.6)'}, ANIMATION_SPEED);
}

function hide() {
    $('[data-js="navlist-options"]').animate({ left: '-70%'}, ANIMATION_SPEED, () => {
        isAnimating = false;
        isOpen = false;
        $('[data-js="navlist"]').addClass('d-none');
    });
    $('[data-js="navlist-overlay"]').animate({ backgroundColor: 'rgba(0,0,0,0)'}, ANIMATION_SPEED);
}

$(function() {
    $('[data-js="navlist-button"]').on('click', function (e) {
        // don't open/close if we're animating
        if (!isAnimating) {
            isAnimating = true;
            show();
        }
        e.preventDefault();
        e.stopImmediatePropagation();
    });

    $('[data-js="navlist-overlay"]').on('click', function (e) {
        if (e.target == this) {
            if (!isAnimating) {
                isAnimating = true;
                hide();
            }
        }
        e.preventDefault();
        e.stopImmediatePropagation();
    });

    $('[data-js="navlist-options"]').on('click', 'li', function(e) {
        window.location.href = $(e.target).attr('data-id');
    })
});

