@extends('include.adminMaster')
@section('content')

  <h3>Add New Category</h3><br><br>

  <form method="post" action="/addCategory">
    {{csrf_field()}}
    <input name="form_categoryName" class="form-control form-control-lg" type="text" placeholder="Add Category" autocomplete="off"><br>
    <button type="submit" class="btn btn-secondary">Add category</button>
  </form>


@endsection
