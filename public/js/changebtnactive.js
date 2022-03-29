var tabselect = $('#myTab').children('li');
tabselect.click(function () {
    $('.btnactive').addClass('d-none');
    $('.btnactive').removeClass('btnactive');
    var liClicked = tabselect.children('button.active').attr('id');
    var liClickedReplace = '#btn' + liClicked.replace("-tab", "");
    $(liClickedReplace).removeClass('d-none');
    $(liClickedReplace).addClass('btnactive');
});






