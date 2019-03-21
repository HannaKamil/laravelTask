@extends('include.adminMaster')
@section('content')

  <h3>Create News</h3><br><br>

  <form method="post" action="/addNews" enctype="multipart/form-data">
    {{csrf_field()}}

    <input name="form_newsName" class="form-control form-control-lg" type="text" placeholder="News Title"  autocomplete="off" required><br>


    <div class="input-group">
      <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
      <input name="imageForm" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
      <label class="custom-file-label" for="inputGroupFile01">upload main photo</label>
    </div>


    </div>
    <br><br>


      <?php $categories = \Illuminate\Support\Facades\DB::table('categories')->orderBy('created_at' , 'desc')->get(); ?>
    <div>Categories:</div>

    <select name="category_form" required>
        <option value=""> Select Category</option>
        @foreach($categories as $category)
      <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
    </select>


    <br><br>

    <div class="form-group">
      <label for="exampleFormControlTextarea2">News Content</label>
      <textarea name="contentForm" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Add News</button>
  </form>




  <form action="/dropZone" class="dropzone" id="myDropzoneForm">
    {{csrf_field()}}


  </form>

@endsection
