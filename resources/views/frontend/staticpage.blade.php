@extends('frontend.layout.layout')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

<!-- start content here -->
<div class="col-12 col-md-9">
  
@foreach($data as $i)

{!! html_entity_decode($i->content) !!}

@endforeach

</div>
<!-- 
end content here -->

@endsection

