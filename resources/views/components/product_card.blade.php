<div class="col-md-3">
  @if ($producto->oferta_id != 1)
    <div class="ribbon-wrapper ribbon-lg">
      <div class="ribbon bg-danger">
        OFERTA -{{$producto->oferta}}%
      </div>
    </div>
  @endif
  <div class="card mb-4 box-shadow">
    <a href="/inventario/productos/{{$producto['id']}}">
      <img class="card-img-top" src="/inventario/img/{{$producto['imagen']}}" alt="Card image cap" height="200">
    </a>
    @isset($favoritos)
      <div class="card-img-overlay" align="left">
        <a href="{{ route('favoritos.eliminar', ['id'=>$producto->id]) }}" class="badge badge-danger">x</a>
      </div>
    @endisset
    
    <div class="card-body">
        <span class="text-muted">{{$producto['categoria']}}</span>
        <p class="card-text">{{$producto['nombre']}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
              <a href="/inventario/productos/{{$producto['id']}}"><button type="button" class="btn btn-sm btn-outline-secondary text-info">Ver</button></a>
              <button type="button" class="btn btn-sm btn-outline-secondary">Añadir a carrito</button>
          </div>
          @if ($producto->oferta_id != 1)
            <h3 class="text-danger">${{number_format($producto['precio_venta'] - ($producto['precio_venta'] * ($producto->oferta / 100)))}}</h3>
            <h5 class="text-success"><strike>${{$producto['precio_venta']}}</strike></h5>
          @else
            <h3 class="text-success">${{number_format($producto['precio_venta'])}}</h3>
          @endif
        </div>
    </div>
  </div>
</div>