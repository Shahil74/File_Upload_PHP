<!DOCTYPE html>
<html>
<head>
    <title>Upload Success</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .container {
            max-width: 500px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center">
        <h3 class="text-success">File Uploaded Successfully!</h3>
        <p><strong>File Name:</strong> <?php echo $upload_data['file_name']; ?></p>
        
        <?php if (in_array($upload_data['file_ext'], ['.jpg', '.jpeg', '.png', '.gif'])): ?>
            <img src="<?php echo base_url('uploads/'.$upload_data['file_name']); ?>" class="img-thumbnail" width="200">
        <?php endif; ?>
        
        <br><br>
        <a href="<?php echo base_url('upload'); ?>" class="btn btn-primary">Upload Another File</a>
    </div>
</body>
</html>
