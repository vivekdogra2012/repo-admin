@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="col-md-12">
    <h1>JWR Static Page CMS V2.0</h1>
</div>



<form action="/insert" method="post">
    <div class="form-row col-md-12">
        {{ csrf_field() }}
      <div class="form-group col-md-6">
        <label for="inputEmail4">Page URL</label>
        <input type="text" class="form-control" name="Page_URL" placeholder="Enter Page URL">
        @if ($errors->any())
        <br><div class="alert alert-danger">{{ $errors->first('Page_URL') }}</div>
        @endif
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Page Heading</label>
        <input type="text" class="form-control" name="Page_Heading" placeholder="Enter Page Heading">
        @if ($errors->any())
        <br><div class="alert alert-danger">{{ $errors->first('Page_Heading') }}</div>
        @endif
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Meta Tags</label>
      <textarea class="form-control" aria-label="With textarea" name="Meta_Tags" placeholder="Enter Meta Tags Here"></textarea>
      @if ($errors->any())
      <br><div class="alert alert-danger">{{ $errors->first('Meta_Tags') }}</div>
      @endif
    </div>

    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Desktop Banner</label>
          <input type="text" class="form-control" name="Desktop_Banner" placeholder="Desktop Banner">
        @if ($errors->any())
          <br><div class="alert alert-danger">{{ $errors->first('Desktop_Banner') }}</div>
        @endif
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Mobile Banner</label>
          <input type="text" class="form-control" name="Mobile_Banner" placeholder="Desktop Banner">
        @if ($errors->any())
          <br><div class="alert alert-danger">{{ $errors->first('Mobile_Banner') }}</div>
        @endif
        </div>
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress">Page Content</label>
        <textarea class="form-control" aria-label="With textarea" id="summernote" name="editordata" placeholder="Enter Page Content Here"></textarea>
        @if ($errors->any())
        <br><div class="alert alert-danger">{{ $errors->first('editordata') }}</div>
        @endif
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress">CSS</label>
        <textarea class="form-control" aria-label="With textarea" name="CSS" placeholder="Enter CSS here"></textarea>
        @if ($errors->any())
        <br><div class="alert alert-danger">{{ $errors->first('CSS') }}</div>
        @endif
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress">JS</label>
        <textarea class="form-control" aria-label="With textarea" name="JS" placeholder="Enter JS here"></textarea>
        @if ($errors->any())
        <br><div class="alert alert-danger">{{ $errors->first('JS') }}</div>
        @endif
      </div>
      
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary" value="add">Create</button>
      </div>
    
  </form>


@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush