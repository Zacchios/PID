<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="{{route('desktop-create')}}">Ajouter Produit</a></td>
            <td></td>
            <td> </td>
            <td></td>
            <td></td>
        </tr>
        @foreach($desktops as $desktop)
        <tr>

            <td><img src="{{asset($desktop->product->media)}}"></td>
            <td>{{ $desktop->product->name}}</td>
            <td>{{$desktop->product->marque->name}}</td>
            <td>{{$desktop->product->unitprice}}€</td>
            <td>{{$desktop->product->stock}} pièce(s) disponible(s)</td>
            <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('desktop.edit', [$desktop->product->id]) }}" role="button" title="@lang('Modifier')">MAJ<span class="fa fa-remove"></span></a></td>


            <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('desktop-destroy', [$desktop->product->id]) }}" role="button" title="@lang('Supprimer')">X<span class="fa fa-remove"></span></a></td>

        </tr>
        @endforeach

        </tbody>
    </table>
</div>




<!--
@foreach($desktops as $desktop)
    <a  href="{{route('admindesktopshow',$desktop->desktopid)}}"><div class="vignette bottom col-md-3">

        <img src="{{asset($desktop->product->media)}}">
        </br>
        {{$desktop->product->name}}<br>
        {{$desktop->product->marque->name}}</br>
        {{$desktop->product->unitprice}}€</br>
        {{$desktop->product->stock}} pièce(s) disponible(s)</br>

        </div></a>
@endforeach--!>