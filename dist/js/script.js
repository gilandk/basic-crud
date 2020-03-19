$(function() {

    //add active link on menu
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename) {
        $('.nav-sidebar li').removeClass('active');
    }
    $('.nav-sidebar li a[href="' + filename + '"]').parent("li").addClass('active');

    //confirmation when click
    $('.confirmation').on('click', function() {
        var confirmation = confirm('Are you sure to delete this RECORD');
        if (confirmation) {
            return true;
        }
        return false;
    });

});

//confirm adding acc
$('.confirmacc').on('click', function() {
    var confirmation = confirm('Create LOGIN ACCOUNT?');
    if (confirmation) {
        return true;
    }
    return false;
});


$(document).ready(function() {

    // Add Class
    $('.edit').click(function() {
        $(this).addClass('editMode');
    });

    // Save data
    $(".edit").focusout(function() {
        $(this).removeClass("editMode");
        var id = this.id;
        var split_id = id.split("_");
        var field_name = split_id[0];
        var edit_id = split_id[1];
        var value = $(this).text();

        $.ajax({
            url: 'update.php',
            type: 'post',
            data: { field: field_name, value: value, id: edit_id },
            success: function(response) {
                console.log('Save successfully');
            }
        });

    });

});

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})