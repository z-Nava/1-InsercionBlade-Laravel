<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Insertar Clientes</title>
</head>
<body>
    <div class="container">
        <h4>Nuevo clientes</h4>
        <div class="row">
            <div class="col-xl-12">
            <form action="{{route('cliente.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="col-xl-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" required maxlength="50" autocomplete="family-name">
        </div>
        <div class="col-xl-6">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required maxlength="30" autocomplete="given-name">
        </div>
    </div>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="documento">Documento</label>
            <input type="text" class="form-control" name="documento" id="documento" required maxlength="15" autocomplete="off">
        </div>
        <div class="col-xl-6">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" required maxlength="150" autocomplete="street-address">
        </div>
    </div>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" required maxlength="15" autocomplete="tel">
        </div>
        <div class="col-xl-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required maxlength="50" autocomplete="email">
        </div>
    </div>
    <div class="form-row">
        <input type="submit" value="Guardar" class="btn btn-primary">
        <input type="reset" class="btn btn-default" value="Cancelar">
        <a href="javascript:history.back()">Ir al listado</a>
    </div>
</form>
            </div>
        </div>
    </div>
</body>
</html>