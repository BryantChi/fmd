<div class="form-group col-sm-6">
    {!! Form::label($id, $label) !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="{{ $id }}" name="{{ $id }}" accept="image/*">
        <label class="custom-file-label" for="{{ $id }}">Choose file</label>
    </div>
    <div class="img-preview img-preview-s{{ str_replace('plan_style_', '', $id) }} mt-2">
        @if ($imagePath ?? null)
            <p>預覽</p>
            <img src="{{ env('APP_URL', 'https://fmd.tw') . '/uploads/' . $imagePath }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>
<div class="clearfix"></div>
