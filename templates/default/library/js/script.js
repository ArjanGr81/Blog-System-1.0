(function ($) {
    
    // user options navigation
    $('.fa-user').on('click touch', function () {
        $(this).toggleClass('active');
        $('.meta-nav__user').toggleClass('active');
    });

    // primary navigation
    $('.nav--primary__item').on('click touch', function () {
        var label_ID = $(this).attr('id');
        
		if ($('#' + label_ID).hasClass('active')) {
            $('#' + label_ID).removeClass('active');
            $(this).find('.sub-menu').closest('ul').removeClass('d-flex');
		} else {
			$('.nav--primary__item').removeClass('active');
            $('#' + label_ID).toggleClass('active');
            $('.sub-menu').removeClass('d-flex');
            $(this).find('.sub-menu').closest('ul').addClass('d-flex');
        }
    });

    function toggleMenu() {
        $('.main-header__mobile-nav').toggleClass('is-mobile');
        $('.main-header__navigation').toggleClass('is-mobile');
        $('.main-header__nav').toggleClass('is-mobile');
        $('.main-header').toggleClass('is-mobile');
        $('.main-content').toggleClass('is-mobile');
        $('.nav--primary').toggleClass('is-mobile');
        $('body').toggleClass("is-mobile");
    }

    // General show/hide function
    function doActionBlock(d, e) {
        var div = $(d);
        if (e === "open") {
            div.fadeIn('fast');
            $('#add_comment').hide();
        }
        if (e === "close") {
            div.fadeOut('fast');
            $('#add_comment').show();
        }
    }

    $('.main-header__mobile-nav').on('click touch', function(e) {
        toggleMenu();
    });

    $('#add_comment').click(function() {
        doActionBlock('#show_insert_box', 'open');
        $('#show_insert_box').css('display', 'flex');
        
    });

    $('#close_insert_box').click(function() {
        doActionBlock('#show_insert_box', 'close');
        $('#show_insert_box').removeClass('d-flex');
    });

    $('.single-comment__delete').on('click touch', function() {
        $('.delete-comment').fadeOut('fast');
        $('.delete-reply').fadeOut('fast');
        $(this).closest('.single-comment').find('.delete-comment').fadeIn('fast').css('display', 'flex');
    });

    $('.reply__delete').on('click touch', function() {
        $('.delete-reply').fadeOut('fast');
        $('.delete-comment').fadeOut('fast');
        $(this).closest('.replies-content').find('.delete-reply').fadeIn('fast').css('display', 'flex');
    });

    $('.delete-comment .fa-times').on('click touch', function() {
        $('.delete-comment').fadeOut('fast');
    });

    $('.delete-reply .fa-times').on('click touch', function() {
        $('.delete-reply').fadeOut('fast');
    });

    $('input[name="type"]').on('change', function(e) {
        var getForm = $(this).closest('form');
        var current_counter = $(this).next().attr('id');
        var update_counter = getForm.find($(this)
                                    .hasClass('radiobox_like') ? '.radiobox_unlike' : '.radiobox_like')
                                    .next()
                                    .attr('id');

        $.ajax({
            type: 'POST',
            url: getForm.attr("action"),
            data: getForm.serialize(),
            success: function(data) {
                $('#' + current_counter).html(parseInt($('#' + current_counter).html()) + 1);
                $('#' + update_counter).html(parseInt($('#' + update_counter).html()) - 1);
            }
        });
    });

    $('#search_submit').on('click touch', function(e) {
        if ($('#search').val()) { 
            e.preventDefault();
        }
        window.location.replace(WWW + "/search/" + $('#search').val());
    });

    $('.search_results').infiniteScroll({
        // options
        path: '.pagination__next',
        append: '.recent-post',
        history: false,
      });

        tinymce.init({
            selector: 'textarea.insert-text',
            theme: "modern",
            skin: "light",
            body_class: "mce-body__color",
            content_css : "/blog/templates/default/library/css/style.css",
            plugins: 'print preview paste searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons image code',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough emoticons | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap | fullscreen  preview print | insertfile image media link codesample',
            toolbar_sticky: true,
            image_title: true,
            automatic_uploads: true,
            invalid_elements: "span, div",
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                var file = this.files[0];
    
                var reader = new FileReader();
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
    
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
                };
    
                input.click();
            },
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            importcss_append: true,
            height: 138,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
            branding: false,
            resize: false,
           });

})(jQuery);