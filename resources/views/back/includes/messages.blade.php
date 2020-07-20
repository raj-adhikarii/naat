<div class="col-6">
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
</div>

@section('scripts')
<script>
    $(function() {
        $('.alert').delay(5000).slideUP(500);
    });
</script>
@endsection
