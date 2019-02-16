<div class="container">
@if(Session::has('alert'))
    <div class="alert alert-danger" role="alert">
        {{ session('alert') }}
    </div>
@endif
@if(Session::has('notice'))
    <div class="alert alert-success" role="alert">
        {{ session('notice') }}
    </div>
@endif
</div>