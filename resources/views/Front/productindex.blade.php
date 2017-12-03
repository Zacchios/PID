@foreach($products as $product)
    <div class="vignette bottom col-md-3">

        <img src="{{asset($product->media)}}">
        </br>
        {{$product->name}}<br>
        {{$product->marque->name}}</br>
        {{$product->unitprice}}€</br>
        {{$product->stock}} pièce(s) disponible(s)</br>

    </div>
@endforeach