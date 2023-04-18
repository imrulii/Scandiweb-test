$('.mystaff_hide').addClass('collapse');

$('.mystuff').change(function(){
    var selector = '.mystaff_' + $(this).val();

    $('.mystaff_hide').collapse('hide');
    

    $(selector).collapse('show');
    $(selector).attr('required', true);

}); 