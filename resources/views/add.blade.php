@extends('layout.app')

@section('content')
    <div class="container">
        <form action={{route('add')}} method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="formGroupExampleInput">Министерство</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Министерство" name="category_name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Комитет</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Комитет" name="category_name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Управление</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Управление" name="category_name">
              </div>
            <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Sign in</button>
            </div>
            </div>
        </form>
    </div>
@endsection