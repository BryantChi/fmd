<!-- Order Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_number', '訂單編號:') !!}
    {!! Form::text('order_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '訂購人姓名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', '聯絡電話:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', '縣市:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district', '鄉鎮市區:') !!}
    {!! Form::text('district', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', '郵遞區號:') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', '地址:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', '付款方式:') !!}
    {!! Form::text('payment_method', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', '支付狀態:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_details', '支付詳情:') !!}
    {!! Form::text('payment_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', '金額:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_details', '訂單詳情:') !!}
    {!! Form::text('order_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_status', '訂單狀態:') !!}
    {!! Form::text('order_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Third Party Ref Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_party_ref', '第三方支付回傳編號:') !!}
    {!! Form::text('third_party_ref', null, ['class' => 'form-control']) !!}
</div>
