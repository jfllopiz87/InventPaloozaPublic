<<<<<<< HEAD
@extends('../layouts/default')

@section('title')
{{Lang::get('messages.no_permissions')}}
@stop

@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 box">
        <h3 align="center"><span class="fa-stack fa-lg">
                <i class="fa fa-user fa-stack-1x"></i>
                <i class="fa fa-ban fa-stack-2x text-danger"></i>
            </span>
            {{Lang::get('messages.no_permissions')}}</h3>
    </div>
    <div class="col-sm-3"></div>
</div>
@stop
=======
@extends('../layouts/default')

@section('title')
{{Lang::get('messages.no_permissions')}}
@stop

@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 box">
        <h3 align="center"><span class="fa-stack fa-lg">
                <i class="fa fa-user fa-stack-1x"></i>
                <i class="fa fa-ban fa-stack-2x text-danger"></i>
            </span>
            {{Lang::get('messages.no_permissions')}}</h3>
    </div>
    <div class="col-sm-3"></div>
</div>
@stop
>>>>>>> f9eb8f2935e210dc911e20d1ac3f5a5339b5f8e8
