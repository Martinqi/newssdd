/**
 * Created by Administrator on 2017/5/11.
 */

$(document).ready(function () {
    $('.list').click(function () {
        $(this).next().stop(true,true).slideToggle();
    });
    $('ul ul li a').click(function () {
        $('ul ul li').removeClass('active');
        $(this).parent().addClass('active');
        $('ul ul li a').removeClass('activeone');
        $(this).addClass('activeone');
    })
});