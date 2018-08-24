// Initialize CKEditor
CKEDITOR.replace('body');

// Configure CKEditor
CKEDITOR.config.extraPlugins = 'simpleImageUpload';
CKEDITOR.config.uploadUrl= 'upload.php';