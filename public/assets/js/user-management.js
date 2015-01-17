$('.block-user').on('click', function() {
    var tr = $(this).parent().parent();
    var uId = tr.attr('data-student');
    if(tr.hasClass('blocked')) {
        var confirmed = confirm("Are you sure that you want to unblock this user? ");
        if(!confirmed)
            return false;
        $.get(uId + '/unblock', function(response){
            console.log(response);
            if(response.status == 'success') {
                tr.removeClass('blocked');
            }
        });
        return false;
    }
    var confirmed = confirm("Are you sure that you want to block this user? ");
    if(!confirmed)
        return false;
    $.get(uId + '/block', function(response){
        console.log(response);
        if(response.status == 'success') {
            tr.addClass('blocked');
        }
    });
    return false;
});