<!-- Marquee Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marquee_text', 'Marquee Text:') !!}
    {!! Form::text('marquee_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Used Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('used', 'Used:') !!}
    {!! Form::('used', 1, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    <label for="toggle-button">啟用/停用</label>
    <div class="custom-control custom-switch">
        {!! Form::checkbox('used', 1, $marqueeInfo->used ?? true, ['class' => 'custom-control-input', 'id' => 'toggle-button']) !!}
        <label class="custom-control-label" for="toggle-button"></label>
    </div>
</div>
