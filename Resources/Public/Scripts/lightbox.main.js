$(document).ready(function () {
    $('img[data-htmlarea-clickenlarge="1"]').each(function () {
        var src = $(this).attr('src');
        var contentUid = $(this).parents('.csc-default').attr('id');
        $(this).wrap('<a href="'+src+'" data-lightbox="lightbox_'+contentUid+'" />');
    });
});