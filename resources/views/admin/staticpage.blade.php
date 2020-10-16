@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="col-md-12">
    <h4>Static Page</h4>

<ul>
  <div class="title">

</div>
@foreach($data as $i)
<!-- 
<div>{{ $i->heading }}</div>
<div>{{ $i->meta_tag }}</div> 
<div>{{ $i->meta_tag }}</div> 
<div img src="{{ $i->desktop_banner }}"></div> 
<img src="{{$i->desktop_banner}}" class="event-page-country-logo"> -->

{!! html_entity_decode($i->content) !!}

@endforeach
</ul>


</div>


@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush