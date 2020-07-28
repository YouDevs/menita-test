<!-- Modal -->
<div class="modal fade" id="outputModal-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="outputModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="outputModal">Salida de producto {{$p->product}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('inventory-output', $p->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Crear Sku</label>
                      <input type="text" name="new_sku" class="form-control" placeholder="sku-code" value="{{$p->sku->sku}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="product">Producto</label>
                        <input type="text" name="product" class="form-control" placeholder="12.00" value="{{$p->product}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad Actual de producto</label>
                        <input type="number" name="quantity" class="form-control" placeholder="100" value="{{$p->quantity}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad que sale</label>
                        <input type="number" name="output" class="form-control output" placeholder="100">
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