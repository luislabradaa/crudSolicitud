<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solicitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/education.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <center>
            <H1>Registro universidad</H1>
        </center>
        <div class="container">

        <form class="row g-3 needs-validation"  action="newRequest.php" method="POST" enctype="multipart/form-data" novalidate>
            
        <div class="card">
            <div class="card-body row g-3">
                
                <div class="col-4">
                    <label  class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" name="ape_paterno" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" name="ape_materno" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-3">
                    <label  class="form-label">Télefono</label>
                    <input type="text" class="form-control" name="telefono" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-5">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Télefono de casa</label>
                    <input type="text" class="form-control" name="tel_casa" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body row g-3">
                
                <div class="col-4">
                    <label  class="form-label">Nombre de la madre</label>
                    <input type="text" class="form-control" name="n_madre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" name="ap_madre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" name="am_madre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Nombre del padre</label>
                    <input type="text" class="form-control" name="n_padre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" name="ap_padre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" name="am_padre" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-3">
                    <label  class="form-label">Télefono del padre o madre</label>
                    <input type="text" class="form-control" name="tel_fam" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body row g-3">
                
                <div class="col-6">
                    <label  class="form-label">Bachillerato de procedencia</label>
                    <input type="text" class="form-control" name="bachillerato" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label">Especialidad cursada</label>
                    <input type="text" class="form-control" name="especialidad" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-2">
                    <label  class="form-label">Promedio obtenido</label>
                    <input type="text" class="form-control" name="promedio" required>
                    <div class="invalid-feedback">
                    Campo requerido
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label">Fotografía del estudiante</label>
                    <input type="file" class="form-control"  name="foto" required>
                    <div class="invalid-feedback">Selecciona una imagen</div>
                </div>
                <div class="col-4">
                    <label class="form-label">Certificado de bachillerato</label>
                    <input type="file" class="form-control" name="certificado" required>
                    <div class="invalid-feedback">Selecciona un documento</div>
                </div>
                <div class="col-4">
                    <label class="form-label">Comprobante de domicilio</label>
                    <input type="file" class="form-control" name="comp_dom" required>
                    <div class="invalid-feedback">Selecciona un documento</div>
                </div>

            </div>
        </div>           
            <button type="submit" class="btn btn-dark">Enviar solicitud</button>
        </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src="Validations/actions.js"></script>
</html>