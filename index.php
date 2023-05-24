<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="css/css/bootstrap.min.css">
  <script src=""></script>
  <title>Document</title>
</head>
<body>
 <h1>FORMULARIO DE REGISTRO DE FACTURACION</h1>
  <div class="container rounded-3 border border-primary p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end"   >
      <div class="frm"   class="formulario">
          <div class="row">
              <div class="col-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Factura</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ingresa tu nombre">
                  </div>
              </div>
              <div class="col-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha de Factura</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                  </div>
              </div>
          </div>
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ingresa tu nombre">
                    </div>
                  </div>
                  <div class="col-6">
                      <div class="mb-5">
                          <label for="exampleFormControlInput1" class="form-label">Cedula</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ingresa tu documento">
                      </div>
                  </div>
                </div>
                </div>
                <div class="container mt-4 text-center" >
                  <input type="submit" class="btn btn-primary" value="Guardar Clientes">
                  <input type="reset"  class="btn btn-primary" value="Borrar">
            </div>
        </div>
  </div>
  <div class="container-1 p-3  mt-4 text-center ">
     <button type="button" class="btn btn-primary btn-lg">Detalle de factura</button>
  </div>

    <div class="container border border-primary p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
      <div class="row">
        <div class="col-2">
           <label for="exampleFormControlInput1" class="form-label">Nombre</label>
           <input type="text" class="form-control" id="nombre" placeholder="">
        </div>
            <div class="col-2">
              <label for="exampleFormControlInput1" class="form-label">valor</label>
              <input type="text" class="form-control" id="valor" placeholder="">
            </div>
            <div class="col-2">
              <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
              <input type="text" class="form-control" id="cantidad" placeholder="">
            </div>
            <div class="col-2">
              <label for="exampleFormControlInput1" class="form-label">total</label>
              <input type="text" class="form-control" id="total" placeholder="">
            </div>
            <div class="col-2"><br>
            <button type="button" class="btn btn-outline-success">+</button>
            </div>
            <div class="col-2"><br>
            <button type="button" class="btn btn-outline-danger">-</button>
            </div>
      </div>
    </div>
</body>
</html>