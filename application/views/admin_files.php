<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center">
                <h2>Admin Panel</h2>
            </div>
            <div class="card-body">
                <h4 class="mb-3">Uploaded Files</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th >File Name</th>
                                <th class="text-center">Preview</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Download</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($files)): ?>
                                <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td><?php echo $file['file_name']; ?></td>
                                        <td class="text-center">
                                            <?php if (preg_match('/\.(jpg|jpeg|png|gif)$/', $file['file_name'])): ?>
                                                <img src="<?php echo base_url($file['file_path']); ?>" width="80" class="rounded shadow">
                                            <?php elseif (preg_match('/\.(pdf)$/', $file['file_name'])): ?>
                                                <a href="<?php echo base_url($file['file_path']); ?>" target="_blank" class="btn btn-info btn-sm">View PDF</a>
                                            <?php else: ?>
                                                <span class="text-muted">No preview</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center"><?php echo $file['file_size'].'kb'; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url($file['file_path']); ?>" download class="btn btn-success btn-sm">Download</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('admin/delete/' . $file['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center text-danger">No files uploaded yet.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
