@extends('layouts.master')
@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un produit</div>
            <div class="panel-body">
                <div class="col-sm-12">

                    {!! Form::open(['route' => 'desktop.store', 'class' => 'form-horizontal panel']) !!}
                   <!-- <div class="form-group">
                        {{ Form::select('Typedeproduit',['...','Ordinateur','Laptop','Souris','Clavier','Ecran'],null,['class' => 'form-control','onchange'=>'choixproduit()']) }}
                    </div>-->
                    <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}

                    </div>

                    <div class="form-group">
                        {!! Form::text('price',null, ['class' => 'form-control', 'placeholder' => 'prix']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::text('stock',null, ['class' => 'form-control', 'placeholder' => 'stock']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::text('promotion',null, ['class' => 'form-control', 'placeholder' => 'promotion']) !!}

                    </div>
                        <div class="form-group">
                            {!! Form::select('marque',$listemarque,null, ['class' => 'form-control', 'placeholder' => '...']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::select('type',$listtype,null, ['class' => 'form-control', 'placeholder' => '...']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::text('processor',null, ['class' => 'form-control', 'placeholder' => 'processor']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::text('graphiccard',null, ['class' => 'form-control', 'placeholder' => 'graphiccard']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::text('thumbscreen',null, ['class' => 'form-control', 'placeholder' => 'thumbscreen']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::text('weight',null, ['class' => 'form-control', 'placeholder' => 'weight']) !!}

                        </div>

                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
<!--<script type="text/javascript">

    function choixproduit(){
        console.log($('option:selected',this).text());
        if ($('option:selected',this).text() == 'Ordinateur')
            $('#name').attr().visible();
    }
</script>-->