<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-4">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>