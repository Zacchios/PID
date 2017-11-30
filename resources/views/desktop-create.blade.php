@extends('layouts.master')
@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un produit</div>
            <div class="panel-body">
                <div class="col-sm-12">

                    {!! Form::open(['route' => 'desktop.store', 'class' => 'form-horizontal panel', 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}

                    <div class="form-group {{$errors->has('name')?'has-error':''}}">

                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name','<small class="help-block">:message</small>')  !!}
                    </div>

                    <div class="form-group {{$errors->has('price')?'has-error':''}}">
                        {!! Form::text('price',null, ['class' => 'form-control', 'placeholder' => 'prix']) !!}
                        {!! $errors->first('price','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('stock')?'has-error':''}}">
                        {!! Form::text('stock',null, ['class' => 'form-control', 'placeholder' => 'stock']) !!}
                        {!! $errors->first('stock','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('promotion')?'has-error':''}}">
                        {!! Form::text('promotion',null, ['class' => 'form-control', 'placeholder' => 'promotion']) !!}
                        {!! $errors->first('promotion','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('marque')?'has-error':''}}">
                            {!! Form::select('marque',$listemarque,null, ['class' => 'form-control', 'placeholder' => '...']) !!}
                        {!! $errors->first('marque','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('type')?'has-error':''}}">
                            {!! Form::select('type',$listtype,null, ['class' => 'form-control', 'placeholder' => '...']) !!}
                        {!! $errors->first('type','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('processor')?'has-error':''}}">
                            {!! Form::text('processor',null, ['class' => 'form-control', 'placeholder' => 'processor']) !!}
                        {!! $errors->first('processor','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('graphiccard')?'has-error':''}}">
                            {!! Form::text('graphiccard',null, ['class' => 'form-control', 'placeholder' => 'graphiccard']) !!}
                        {!! $errors->first('graphiccard','<small class="help-block">:message</small>')  !!}

                        </div>

                    <div class="form-group {{$errors->has('thumbscreen')?'has-error':''}}">
                            {!! Form::text('thumbscreen',null, ['class' => 'form-control', 'placeholder' => 'thumbscreen']) !!}
                        {!! $errors->first('thumbscreen','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('weight')?'has-error':''}}">
                        {!! Form::text('weight',null, ['class' => 'form-control', 'placeholder' => 'weight']) !!}
                        {!! $errors->first('weight','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('picture')?'has-error':''}}">
                        <input type="file" name="file">
                        {!! $errors->first('picture','<small class="help-block">:message</small>')  !!}

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