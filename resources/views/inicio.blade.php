

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>InicioIOT</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-auto">
                <h1 style="font-family: 'Times New Roman', Times, serif; text-align: center; font: bolder">Proyecto de IoT | Casa Domótica</h1>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center; font: bolder">Bitacora de
                    movimiento</h2>
                <br>
                <button type="button" class="btn btn-outline-warning" style="align-self: center;">Ultimos 10 días</button>
                <br><br>
                <div class="col-6 offset-3 ">
                <div class="form" method="post" action="http://localhost:8080/rango/">
                    <button type="button" class="btn btn-outline-primary" style="align-self: center;">Lectura Fechas</button>
                    From: <input type="text" class="form-control" placeholder="Desde" name="from">
                    to: <input type="text" class="form-control" placeholder="Hasta" name="to">
                </div>
                </div>
                <br><br>
                <table class="table" id="tabla">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Movimiento detectado</th>
                        </tr>
                    </thead>
                    <tbody>


                             <tr>
                                    @foreach($movimientos as $movimiento)
                                    <tr>
                                        <td>{!! $movimiento->id !!}</td>
                                        <td>{!! $movimiento->estado !!}</td>
                                        <td>{!! $movimiento->created_at !!}</td>
                                    </tr>
                                @endforeach
                             <tr>


                           </tbody>

                    </tbody>

                </table>
            </div>






            <div class="col-12 text-center">
                <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center; font: bolder">Control de
                    Luces</h2>
                <br>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-primary" style="align-self: center;">Luces Cocina</button>
                        <br>
                        <button type="button" class="btn btn-outline-secondary" style="margin-top: 5px">Luces baño 1</button>
                        <br>
                        <button type="button" class="btn btn-outline-dark" style="margin-top: 5px">Luces cuarto gamer</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-success" style="margin-left: 5px">Luces Dormitorio
                            1</button>
                        <br>
                        <button type="button" class="btn btn-outline-warning" style="margin-top: 5px; margin-left: 5px">Luces
                            Dormitorio 2</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
