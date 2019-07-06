$('#cnic').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 5 || length == 13)
        $(this).val($(this).val() + '-');

});
$('#father_cnic').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 5 || length == 13)
        $(this).val($(this).val() + '-');

});
$('#regno').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 2 || length == 7)
        $(this).val($(this).val() + '-' + 'Arid' + '-');

});
$('#cellno').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 4 || length == 13)
        $(this).val($(this).val() + '-');

});
$('#telephone').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 7 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 3 || length == 13)
        $(this).val($(this).val() + '-');

});

$('#emergency_cell').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 4 || length == 13)
        $(this).val($(this).val() + '-');

});
$('#guardian_phone').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 4 || length == 13)
        $(this).val($(this).val() + '-');

});
$('#emergency_tel').keydown(function() {

    //allow  backspace, tab, ctrl+A, escape, carriage return
    if (event.keyCode == 8 || event.keyCode == 7 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true))
        return;
    if ((event.keyCode < 48 || event.keyCode > 57))
        event.preventDefault();

    var length = $(this).val().length;

    if (length == 3 || length == 13)
        $(this).val($(this).val() + '-');

});