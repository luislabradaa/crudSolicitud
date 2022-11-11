<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <center>
            <H1>Registro universidad</H1>
        </center>
        <br>
        <div class="container">

        <form action="newRequest.php" method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label  class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" name="ape_paterno">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido materno</label>
                <input type="text" class="form-control" name="ape_materno">
            </div>
            <div class="mb-3">
                <label  class="form-label">Télefono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
            </div>
            <div class="mb-3">
                <label  class="form-label">Télefono de casa</label>
                <input type="text" class="form-control" name="tel_casa">
            </div>
            <div class="mb-3">
                <label  class="form-label">Télefono del padre o madre</label>
                <input type="text" class="form-control" name="tel_fam">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nombre de la madre</label>
                <input type="text" class="form-control" name="n_madre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" name="ap_madre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido materno</label>
                <input type="text" class="form-control" name="am_madre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nombre del padre</label>
                <input type="text" class="form-control" name="n_padre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" name="ap_padre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido materno</label>
                <input type="text" class="form-control" name="am_padre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Bachillerato de procedencia</label>
                <input type="text" class="form-control" name="bachillerato">
            </div>
            <div class="mb-3">
                <label  class="form-label">Especialidad cursada</label>
                <input type="text" class="form-control" name="especialidad">
            </div>
            <div class="mb-3">
                <label  class="form-label">Promedio obtenido</label>
                <input type="text" class="form-control" name="promedio">
            </div>
            <div class="mb-3 form-check">
                <label class="form-label">Foto del estudiante</label>
                <input type="file" class="form-control" name="foto">
            </div>
            <div class="mb-3 form-check">
                <label class="form-label">Certificado</label>
                <input type="file" class="form-control" name="certificado">
            </div>
            <div class="mb-3 form-check">
                <label class="form-label">Comprobante de domicilio</label>
                <input type="file" class="form-control" name="comp_nom">
            </div>
            <button type="submit" class="btn btn-dark">Enviar solicitud</button>
        </form>
           <br>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>