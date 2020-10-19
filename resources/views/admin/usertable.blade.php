@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="col-md-12">
    <h3>Datatable</h3>
</div>

  <!-- datatable -->

  <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Urls</th>
                
            </tr>
        </thead>
        <tbody>  
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->url }}</td>
     
            </tr>
            @endforeach
        </tbody>
      <tfoot>
            <tr>
                <th>Id</th>
                <th>Urls</th>
                
            </tr>
        </tfoot> 
     
    </table>

    

@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush