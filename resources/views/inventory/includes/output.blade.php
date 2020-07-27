<!-- Modal -->
<div class="modal fade" id="outputModal" tabindex="-1" role="dialog" aria-labelledby="outputModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="outputModal">Salida de producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('inventory-create')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Crear Sku</label>
                      <input type="text" name="new_sku" class="form-control" id="new-sku" placeholder="sku-code" value="{{$p->sku}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="product">Producto</label>
                        <input type="text" name="product" class="form-control" id="product" placeholder="12.00" value="{{$p->product}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="100" value="{{$p->quantity}}">
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