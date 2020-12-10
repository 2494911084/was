$(function(){


    //TAB切换
    $('.tab').each(function(){
        $(this).children('.tab1').eq(0).addClass('on');
    });

    $('.tab_nr').each(function(){
        $(this).children('.tab_nr1').eq(0).show();
    });

    $('.tab1').click(function(){ 
    // $('.tab1').mouseover(function(){
        $(this).addClass('on').siblings().removeClass('on');
        $(this).parents().siblings('.tab_nr').children('.tab_nr1').eq($(this).index()).show().siblings().hide();
    });


})