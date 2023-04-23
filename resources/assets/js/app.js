import './bootstrap';

$(function (){
    $('body').find('.datepicker').each(function (){
        $(this).datetimepicker({
            showClose: true,
            debug: true,
        });
    });
});
