
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>成功!</strong> {{Session::get('success')}}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-warning alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>失败!</strong>  {{Session::get('error')}}
</div>
    @endif