$('#navbar-btn').click(function () {
    $('.navbar-toggle').toggle()
})

$('#dropdownNavbarLink').click(function () {
    $('#dropdownNavbar').toggle()
})

$('#dropdownNavbarMenu').click(function () {
    $('#dropdownNavbarMenuList').toggle()
})

$('#dropdownNavbarTeater').click(function () {
    $('#dropdownNavbarTeaterList').toggle()
})

$('#dropdownNavbarUser').click(function () {
    $('#dropdownNavbarUserdr').toggle()
})

$('#dropdownNavbarOther').click(function () {
    $('#dropdownNavbarOtherList').toggle()
})

$(document).mouseup(function (e) {
    let film = $("#dropdownNavbar");
    let menu = $("#dropdownNavbarMenuList");
    let admin = $("#dropdownNavbarUserdr");
    let other = $("#dropdownNavbarOtherList");
    if (!film.is(e.target) && film.has(e.target).length === 0) {
        $("#dropdownNavbar").hide('fast');
    }
    if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        $("#dropdownNavbarMenuList").hide('fast');
    }
    if (!admin.is(e.target) && admin.has(e.target).length === 0) {
        $("#dropdownNavbarUserdr").hide('fast');
    }
    if (!other.is(e.target) && other.has(e.target).length === 0) {
        $("#dropdownNavbarOtherList").hide('fast');
    }
})

