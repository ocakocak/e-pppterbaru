@if ($message = Session::get('success'))
<div class="col-md-12">
      <div class="alert alert-success alert-block">
          <strong style="font-family:Roboto Slab; letter-spacing:2px">{{ $message }}</strong>
      </div>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="col-md-12">
      <div class="alert alert-danger alert-block">
          <strong style="font-family:Roboto Slab; letter-spacing:2px">{{ $message }}</strong>
      </div>
</div>
@endif
