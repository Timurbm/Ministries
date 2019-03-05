@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="card-body">
                @foreach($results as $ministr)
                <div class="col-md-12">
                    <h3>{{ $ministr->category_name }}</h3>
                    <hr />
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>
@endsection