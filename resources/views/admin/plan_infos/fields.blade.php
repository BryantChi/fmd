<!-- Plan Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_name', '方案名稱:') !!}
    {!! Form::text('plan_name', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Plan Sqm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_sqm', '方案面積:') !!}
    {!! Form::text('plan_sqm', null, ['class' => 'form-control']) !!}
</div>


<!-- Plan Style Field -->
<x-plan-style-input
    id="plan_style_1"
    label="方案 Style 1:"
    :imagePath="$planInfo->plan_style_1 ?? null" />

<x-plan-style-input
    id="plan_style_2"
    label="方案 Style 2:"
    :imagePath="$planInfo->plan_style_2 ?? null" />

<x-plan-style-input
    id="plan_style_3"
    label="方案 Style 3:"
    :imagePath="$planInfo->plan_style_3 ?? null" />

<x-plan-style-input
    id="plan_style_4"
    label="方案 Style 4:"
    :imagePath="$planInfo->plan_style_4 ?? null" />


<!-- Plan Price Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('plan_price', 'Plan Price:') !!}
    {!! Form::number('plan_price', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('plan_price', '方案價格:') !!}
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="plan_price">$</span>
        </div>
        <input type="number" name="plan_price" class="form-control" aria-label=""
            aria-describedby="plan_price">
    </div>
</div>

@push('page_scripts')
    <script>
        $(document).ready(function() {
            // $(document).on('change', '.custom-file-input', function() {
            //     var fileName = $(this).val().split('\\').pop();
            //     $(this).siblings('.custom-file-label').addClass("selected").html(fileName);
            // });
            // $(document).on('change', '#plan_style_1', function () {
            //     let fileInput = this;
            //     let fileReader = new FileReader();

            //     fileReader.onload = function(e) {
            //         let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
            //         $(fileInput).closest('.form-group').find('.img-preview-s1').html(previewHtml);
            //     };

            //     fileReader.readAsDataURL(fileInput.files[0]);
            // });
            $(document).on('change', '[id^="plan_style_"]', function () {
                let fileInput = this;
                let fileReader = new FileReader();
                let id = $(fileInput).attr('id'); // 獲取元素的ID
                let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

                fileReader.onload = function (e) {
                    let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
        });
    </script>
@endpush
