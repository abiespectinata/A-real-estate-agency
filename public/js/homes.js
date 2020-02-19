
function heartFull(id, liked) {
    console.log(liked);
    if (liked) {
        console.log('oui');
        $('#heart'+id).children().removeClass('far').addClass('fas')
    } else{
        console.log('non');
        $('#heart'+id).children().removeClass('fas').addClass('far')
    }
}

 $(document).ready(function() {

    $('.heart').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');
        var like = $(this).attr('data-liked') * 1;
        heartFull(id, !like);
        
        
        // return false;

        $.ajax({
            url : '/like-dislike',
            type : 'POST',
            dataType : 'json',
            data: {
                'id': id,
                'action': like
            },        
         }).done(function(res) {
            console.log(res)
            var newlike = res.like;
            var $heart = $("#heart"+res.id)
            $heart.attr('data-liked', newlike);   
            heartFull(res.id, newlike);         
         })

    });

 })