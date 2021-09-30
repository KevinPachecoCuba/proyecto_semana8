<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 250,'maxlength' => 250]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-5">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>