jQuery(document).ready(function($){
    let frame;
    $('#set-mobile-featured-image').on('click', function(e){
        e.preventDefault();
        if (frame) { frame.open(); return; }
        frame = wp.media({
            title: DFI_TEXTS.title,
            button: { text: DFI_TEXTS.button },
            multiple: false
        });
        frame.on('select', function(){
            const attachment = frame.state().get('selection').first().toJSON();
            $('#mobile-featured-image-id').val(attachment.id);
            $('#mobile-featured-image-container').html('<img src="'+attachment.sizes.thumbnail.url+'" />');
        });
        frame.open();
    });

    $('#remove-mobile-featured-image').on('click', function(){
        $('#mobile-featured-image-id').val('');
        $('#mobile-featured-image-container').html('');
    });
});
