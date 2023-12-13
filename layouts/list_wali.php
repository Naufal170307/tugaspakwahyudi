<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include '../components/header.php';
    ?>
    
    <div class="mx-5 my-2">
        <div class="position-relative">
                <div class="col start-0 fs-1">
                    Data Wali
                </div>
                <div class="col position-absolute top-50 end-0 translate-middle-y">
                    <?php
                        include '../components/btn_add_wali.php';
                    ?>
                </div>
        </div>
    </div>

    <div class="m-5">
        <?php
            include '../components/table_wali.php';
        ?>
    </div>
</body>
</html>