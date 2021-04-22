@extends('admin.layout.main')

@section('title') Asignar Delivery @endsection

@section('icon') mdi-map-marker @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">

{!! Form::open(['url' => [$form_url],'files' => true,'method' => 'POST'],['class' => 'col s12']) !!}

@include('admin.order.form_assing')

</form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
