<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center; font: bolder">Bitacora de
                    movimiento</h2>
                <br>
                <div class="btn-group" id="opciones">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <br><br>
                <table class="table" id="tabla">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-center">
                <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center; font: bolder">Control de
                    Luces</h2>
                <br>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-primary" style="align-self: center">Luces Cocina</button>
                        <br>
                        <button type="button" class="btn btn-secondary" style="margin-top: 5px">Luces baño 1</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-success" style="margin-left: 5px">Luces Dormitorio
                            1</button>
                        <br>
                        <button type="button" class="btn btn-warning" style="margin-top: 5px; margin-left: 5px">Luces
                            Dormitorio 2</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
