@extends('include.adminMaster')
@section('content')

    <h3>Show All News</h3>



        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">Image Uploaded</th>
                <th scope="col">Category Name</th>
                <th scope="col">Content</th>
            </tr>
            </thead>

            @foreach($allNews as $all)
            <tbody>
            <tr>
                <th scope="row">{{$all->title}}</th>
                <td><img style="width:150px; height: 150px;" src="Cover_images/{{$all->image_uploaded}}"></td>


                <td>{{$all->category_name}}</td>
                <td>{{$all->content}}</td>
                {{--<td><button class="btn btn-primary"><a href="/editNew/{{$all->id}}" style="color: white; text-decoration: none;">Edit</a></button></td>--}}
                <td><button class="btn btn-danger"><a href="/delNew/{{$all->id}}" style="color: white;text-decoration: none;">Delete</a></button></td>
                <td><button class="btn btn-primary"><a href="/showNew/{{$all->id}}" style="color: white; text-decoration: none;">Show</a></button></td>
            </tr>
            </tbody>
            @endforeach
        </table>


    @foreach($dropZoneImages as $dropZoneImage)
        <td><img style="width:150px; height: 150px;" src="Cover_images/{{$dropZoneImage->path}}"></td>
    @endforeach
@endsection