<!DOCTYPE html>
<html>

<head>
    <title>Upload File</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        body,
        html {
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

        .welcome-text {
            margin-top: -300px;
            /* Move "Welcome" slightly upward */
        }
    </style>
</head>
<h1 class="text-center mb-3 welcome-text">Welcome</h1>
<body class="d-flex flex-column align-items-center justify-content-center vh-100"> 
    <div class="container text-center">
        <h5>Upload a File</h5>
        <?php echo isset($error) ? '<p class="text-danger">' . $error . '</p>' : ''; ?>

        <?php echo form_open_multipart('upload/do_upload'); ?>
        <div class="mb-3">
            <input class="form-control" type="file" name="userfile" />
        </div>
        <input class="btn btn-primary" type="submit" value="Upload" />
        </form>
    </div>
</body>

</html>