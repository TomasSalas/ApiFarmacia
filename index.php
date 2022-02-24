<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacias De Turno</title>
    <!-- CDN BOOTSTRAP,SELECT -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <!-- CDN JQUERY , BOOTSTRAP , SELECT -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <div class="container p-4">
        <div class="row">
            <div class="form-group">
                <label>Región</label>
                <select class="form-control js-example-basic-single" id="select_region" name="select_region" ></select>
            </div>
            <div class="form-group">
                <label>Comuna</label>
                <select class="form-control js-example-basic-single" id="select_comuna" name="select_comuna" ></select>
            </div>
            <div class="form-group">
                <label>Farmacia</label>
                <input class="form-control" id="txt_farma" name="txt_farma" disabled> </input>
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input class="form-control" id="txt_dire" name="txt_dire" disabled> </input>
            </div>
            <div class="form-group">
                <label>Fecha Turno</label>
                <input class="form-control" id="txt_fecha" name="txt_fecha" disabled> </input>
            </div>
        </div>
    </div>
</body>

</html>