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

    $('.main-header__mobile-nav').on('click touch', function(e) {
        toggleMenu();
    });

    $('.delete-post').on('click touch', function() {
        $('.show-delete').fadeOut('fast');
        $(this).closest('.show-post-data').find('.show-delete').fadeIn('fast').css('display', 'flex');
    });

    $('.fa-times').on('click touch', function() {
        $('.show-delete').fadeOut('fast');
    });

    tinymce.init({
        selector: 'textarea.edit-post__text',
        theme: "modern",
        skin: "light",
        body_class: "mce-body__color",
        content_css : "/blog/templates/admin/library/css/style.css",
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
        height: 238,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'sliding',
        contextmenu: "link image imagetools table",
        branding: false,
        resize: false,
       });

})(jQuery);