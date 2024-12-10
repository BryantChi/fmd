<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $marqueeInfo->id }}</p>
</div>

<!-- Marquee Text Field -->
<div class="col-sm-12">
    {!! Form::label('marquee_text', 'Marquee Text:') !!}
    <p>{{ $marqueeInfo->marquee_text }}</p>
</div>

<!-- Used Field -->
<div class="col-sm-12">
    {!! Form::label('used', 'Used:') !!}
    <p>{{ $marqueeInfo->used }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $marqueeInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $marqueeInfo->updated_at }}</p>
</div>

