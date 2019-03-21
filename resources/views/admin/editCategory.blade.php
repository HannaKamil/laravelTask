@extends('include.adminMaster')
@section('content')

    <h3>Edit Category</h3><br><br>

    {{$id->category_name}}

    <form method="post" action="/updateCategory/{{$id->id}}">
        {{csrf_field()}}
        <input name="form_categoryName" value="{{$id->category_name}}" class="form-control form-control-lg" type="text" placeholder="Add Category" autocomplete="off"><br>
        <button type="submit" class="btn btn-secondary">Update category</button>
    </form>

@endsection