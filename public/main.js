$(document).ready(function() {
    $('#logout_link').click(function() {
      $('#modal').fadeIn(300);
    });

    $('#close_link').click(function() {
      $('#modal').fadeOut(300);
    });
    $('#cancel_link').click(function() {
        $('#modal').fadeOut(300);
    });
});

