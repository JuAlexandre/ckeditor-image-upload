// Initialize CKEditor
CKEDITOR.replace('body');

// Configure CKEditor
CKEDITOR.config.extraPlugins = 'imageUpload';
CKEDITOR.config.uploadUrl= 'upload.php';

CKEDITOR.plugins.add('imageUpload', {
    init: function(editor) {
        let fileDialog = $('<input type="file">');

        fileDialog.on('change', function () {
            let uploadUrl = editor.config.uploadUrl;
            let file = fileDialog[0].files[0];
            let imageData = new FormData();
            imageData.append('image', file);

            $.ajax({
                url: uploadUrl,
                type: 'POST',
                contentType: false,
                processData: false,
                data: imageData,
            }).done(function(done) {
                let ele = editor.document.createElement('img');
                ele.setAttribute('src', done);
                editor.insertElement(ele);
            });

        });

        editor.ui.addButton('Image', {
            label: 'Insert Image',
            command: 'openDialog',
            toolbar: 'insert'
        });

        editor.addCommand('openDialog', {
            exec: function(editor) {
                fileDialog.click();
            }
        })
    }
});
