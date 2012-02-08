$(document).ready(function() {
    $('ul.menu > li > ul > li > ul > li').hide();
    $('ul.menu > li.active > ul').children().show();
});
