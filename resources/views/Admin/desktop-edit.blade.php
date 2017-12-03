@extends('layouts.admin')

@section('nav')
    @include('Admin.navadmin')
@endsection

@section('left')
    @include('Admin.Leftpanel')
@endsection

@section('right')

  <!--  <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">-->

            <div class="panel-heading">Mettre à jour le produit</div>
            <div class="panel-body">
                <div class="col-sm-12">

                    {!! Form::open(['route' => ['desktop.update',$desktop->product->id],'method'=>'put', 'class' => 'form-horizontal panel', 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}

                        {!! Form::hidden('id',$desktop->product->id,['class' => 'form-control', 'placeholder' => 'Nom']) !!}

                    <div class="form-group {{$errors->has('name')?'has-error':''}}">
                        {!! Form::label('name', 'Nom', array('class' => 'mylabel'))!!}
                        {!! Form::text('name', $desktop->product->name, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name','<small class="help-block">:message</small>')  !!}
                    </div>

                    <div class="form-group {{$errors->has('price')?'has-error':''}}">
                        {!! Form::label('Prix', 'Prix', array('class' => 'mylabel'))!!}
                        {!! Form::text('price',$desktop->product->unitprice, ['class' => 'form-control', 'placeholder' => 'prix']) !!}
                        {!! $errors->first('price','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('stock')?'has-error':''}}">
                        {!! Form::label('Stock', 'Stock', array('class' => 'mylabel'))!!}
                        {!! Form::text('stock',$desktop->product->stock, ['class' => 'form-control', 'placeholder' => 'stock']) !!}
                        {!! $errors->first('stock','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('promotion')?'has-error':''}}">
                        {!! Form::label('Promotion', 'Promotion', array('class' => 'mylabel'))!!}
                        {!! Form::text('promotion',$desktop->product->promotion, ['class' => 'form-control', 'placeholder' => 'promotion']) !!}
                        {!! $errors->first('promotion','<small class="help-block">:message</small>')  !!}

                    </div>

                    <div class="form-group {{$errors->has('marque')?'has-error':''}}">
                        {!! Form::label('Marque', 'Marque', array('class' => 'mylabel'))!!}
                            {!! Form::select('marque',$listemarque, $desktop->product->marqueid, ['class' => 'form-control', 'placeholder' => '...']) !!}
                        {!! $errors->first('marque','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('type')?'has-error':''}}">
                        {!! Form::label('Type', 'Type', array('class' => 'mylabel'))!!}
                            {!! Form::select('type',$listtype,$desktop->type->id, ['class' => 'form-control', 'placeholder' => '...']) !!}
                        {!! $errors->first('type','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('processor')?'has-error':''}}">
                        {!! Form::label('processor', 'Processeur', array('class' => 'mylabel'))!!}
                            {!! Form::text('processor',$desktop->processor, ['class' => 'form-control', 'placeholder' => 'processor']) !!}
                        {!! $errors->first('processor','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('graphiccard')?'has-error':''}}">
                        {!! Form::label('graphiccard', 'Carte Graphique', array('class' => 'mylabel'))!!}
                            {!! Form::text('graphiccard',$desktop->graphiccard, ['class' => 'form-control', 'placeholder' => 'graphiccard']) !!}
                        {!! $errors->first('graphiccard','<small class="help-block">:message</small>')  !!}

                        </div>

                    <div class="form-group {{$errors->has('thumbscreen')?'has-error':''}}">
                        {!! Form::label('thumbscreen', 'Taille de l\'écran', array('class' => 'mylabel'))!!}
                            {!! Form::text('thumbscreen',$desktop->thumbscreen, ['class' => 'form-control', 'placeholder' => 'thumbscreen']) !!}
                        {!! $errors->first('thumbscreen','<small class="help-block">:message</small>')  !!}

                        </div>
                    <div class="form-group {{$errors->has('weight')?'has-error':''}}">
                        {!! Form::label('weight', 'Poids', array('class' => 'mylabel'))!!}
                        {!! Form::text('weight',$desktop->weight, ['class' => 'form-control', 'placeholder' => 'weight']) !!}
                        {!! $errors->first('weight','<small class="help-block">:message</small>')  !!}

                    </div>
                    <div class="form-group {{$errors->has('picture')?'has-error':''}}">
                        <input type="file" name="file">
                        {!! $errors->first('picture','<small class="help-block">:message</small>')  !!}
                        <img src="{{asset($desktop->product->media)}}">
                    </div>


                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
