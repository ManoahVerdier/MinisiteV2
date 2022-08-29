
import './bootstrap';


$('#accordion .btn-link').on('click', function () {
    $(this).parent().parent().parent().parent().toggleClass('active');
    $(this).parent().parent().parent().parent().toggleClass('inactive');
});

if ($('#emptyComparatif').length) {
    $('#emptyComparatif').on('click', function () {
        var $this = $(this);
        $.ajax({
            url: "/delComparison"
        }).done(function (data) {
            location.reload(true);
        })
      });
}