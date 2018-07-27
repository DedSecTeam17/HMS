/*global $, window, document*/
$(document).ready(function () {
    'use strict';
    
    var btn = $('.back-to-top');
    
    
    $('nav .linkss li a').click(function () {
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top
        }, 1000);
    });
    $('html').niceScroll({ cursorcolor: '#1A9BDC', cursorwidth: '16px', cursorborder: '1px solid #1A9BDC' });
    $(window).scroll(function () {
        if ($(this).height() >= 605) {
            btn.show('slow');
        }
    });
    btn.click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500);
    });
    $('.bannar').height($(window).height());
    /*********************************************************************************************************************************
     * *******
     */
    $('#search').keyup(function () {
        var txt = $(this).val();
        if (txt == '') {
            $.ajax({
                url: 'fetch.php',
                method: 'post',
                data: { search: txt },
                datatype: 'text',
                success: function (data) {
                    $('#result').html(data);
                }
            });
        } else {
            // $('#result').html('');
            $.ajax({
                url: 'fetch.php',
                method: 'post',
                data: { search: txt },
                datatype: 'text',
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
    });
});


function prepareEventHandelers(params) {
    document.getElementById('signupfrm').onsubmit = function () {
        if (document.getElementById('userPassword1').value != document.getElementById('userPassword2').value) {
            document.getElementById('errormessage').innerHTML = "Passwords you entered not match";
            return false;
        } else {
            document.getElementById('errormessage').innerHTML = "";
            return true;
        }
    }
}

window.onload = function () {
    prepareEventHandelers();
}