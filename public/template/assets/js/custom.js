/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

// custom menu active
var path = location.pathname.split('/')
var url = location.origin + '/' + path[1]
$('ul.sidebar-menu li a').each(function() {
    if($(this).attr('href').indexOf(url) !== -1) {
        $(this).parent().addClass('active').parent().parent('li').addClass('active')
    }
})
// console.log(url)

// datatables
$(document).ready( function () {
    $('#table1').DataTable();
});

// modal confirmation
function submitDel(id) {
    $('#del-'+id).submit()
}

function returnLogout() {
    var link = $('#logout').attr('href')
    $(location).attr('href', link)
}

var forceInputUppercase = function(e) {
    let el = e.target;
    let start = el.selectionStart;
    let end = el.selectionEnd;
    el.value = el.value.toUpperCase();
    el.setSelectionRange(start, end);
};

document.querySelectorAll(".text-uppercase").forEach(function(current) {
    current.addEventListener("keyup", forceInputUppercase);
});
