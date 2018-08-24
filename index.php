<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploading images in CKEditor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 post-div">
                <form action="index.php" method="post" enctype="multipart/form-data" class="post-form">
                    <h1 class="text-center">Add Blog Post</h1>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" >
                    </div>
                    <div class="form-group" style="position: relative;">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save-post" class="btn btn-success pull-right">Save Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <!-- Custom scripts -->
    <script src="scripts.js"></script>
</body>
</html>