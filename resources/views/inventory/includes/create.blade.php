<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('inventory-create')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Crear Sku</label>
                      <input type="text" name="new_sku" class="form-control" id="new-sku" placeholder="sku-code">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Seleccionar Sku existente</label>
                        @if (count($skus))
                            <select class="form-control" name="sku" id="sku">
                            <option value="">-- seleccione --</option>
                                @foreach ($skus as $s)
                                    <option value="{{$s->id}}">{{$s->sku}}</option>
                                @endforeach
                            </select>
                        @else
                            <select class="form-control" name="sku" id="sku" disabled>
                                <option value="">-- no existen skus --</option>
                            </select>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="product">Producto</label>
                        <input type="text" name="product" class="form-control" id="product" placeholder="12.00">
                    </div>
                    <div class="form-group">
                        <label for="list-price">Precio de lista</label>
                        <input type="number" name="list_price" class="form-control" id="list-price" placeholder="12.00">
                    </div>
                    <div class="form-group">
                        <label for="wholesale-price">Precio de mayoreo</label>
                        <input type="number" name="wholesale_price" class="form-control" id="wholesale-price" placeholder="10.00">
                    </div>
                    <div class="form-group">
                        <label for="retail-price">Precio de menudeo</label>
                        <input type="number" name="retail_price" class="form-control" id="retail-price" placeholder="15.00">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="100">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar producto</button>
                </div>
            </form>
        </div>
    </div>
</div>