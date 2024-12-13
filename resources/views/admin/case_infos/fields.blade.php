<!-- Case Front Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_front_image', '封面:') !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="case_front_image" name="case_front_image" accept="image/*">
        <label class="custom-file-label" for="case_front_image">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($caseInfos->case_front_image ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://fmd.tw') . '/uploads/' . $caseInfos->case_front_image }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
@php
    $categories = App\Models\Admin\CaseCategoryInfo::all()->pluck('name', 'id')->toArray();
@endphp
<div class="form-group col-sm-6">
    {!! Form::label('category', '類別:') !!}
    {!! Form::select('category', ['' => '請選擇'] + ($categories ?? []), $caseInfos->category ?? null, [
        'class' => 'form-control',
        // 'required' => true,
    ]) !!}
</div>

<!-- Case Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_title', '標題:') !!}
    {!! Form::text('case_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Case Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('case_content', '內容:') !!}
    {!! Form::textarea('case_content', null, ['class' => 'form-control', 'id' => 'contents']) !!}
</div>

@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{!! asset('vendor/tinymce/js/tinymce/tinymce.js') !!}"></script>
@endpush
@push('page_scripts')
<script src="{{ asset('assets/admin/js/case.js') }}" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#case_front_image', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
