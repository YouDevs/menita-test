<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-4 text-right" data-toggle="modal" data-target="#exampleModal">
                    Agregar producto
                </button>
            </div>
            @if( $errors->count() )
            <div class="row">
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <p class="bg-light text-danger">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Sku</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Precio Lista</th>
                            <th scope="col">Precio Mayoreo</th>
                            <th scope="col">Precio Menudeo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $p)
                        <tr>
                            <th scope="row">{{$p->sku->sku}}</th>
                            <td>{{$p->product}}</td>
                            <td>{{$p->list_price}}</td>
                            <td>{{$p->wholesale_price}}</td>
                            <td>{{$p->retail_price}}</td>
                            <td>{{$p->quantity}}</td>
                            <td>
                                <button type="button" class="btn btn-warning mb-4 text-right btn-output" data-toggle="modal" data-target="#outputModal-{{$p->id}}">
                                    Salida
                                </button>
                                <button type="button" class="btn btn-info mb-4 text-right" data-toggle="modal" data-target="#editModal-{{$p->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger mb-4 text-right">
                                    Eliminar
                                </button>
                            </td>
                            @include('inventory.includes.output')
                            @include('inventory.includes.edit')
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('inventory.includes.create')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>