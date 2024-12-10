<!-- Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupation', '職業:') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Case Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_title', '標題:') !!}
    {!! Form::text('case_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Case Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('case_content', '內容:') !!}
    {!! Form::textarea('case_content', null, ['class' => 'form-control']) !!}
</div>
