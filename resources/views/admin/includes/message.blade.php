
@if(Session::has('msg'))
    <div class="alert alert-danger" role="alert">
    <p>{{ Session::get('msg') }}</p>
    </div>
    @endif
