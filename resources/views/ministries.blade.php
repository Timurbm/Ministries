@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="card-body">
                <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="GET">
                {{ csrf_field() }}
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <a href="/add">ADD</a>
                @foreach($ministries as $ministr)
                <div class="col-md-12">
                    <h3>{{ $ministr->category_name }}</h3>
                    <hr />
                    <div class="row">
                        @foreach($ministr->children as $cats)
                        <div class="col-md-4">
                            <h4>{{ $cats->category_name }}</h4>
                            <hr />
                            @foreach($cats->children as $cat)
                            <h5>{{$cat->category_name}}</h5>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection