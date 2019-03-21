@extends('include.adminMaster')
@section('content')

    <h3>Show All Categories</h3>



        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            @foreach($categories as $category)
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->category_name}}</td>
                <td><button class="btn btn-primary"><a href="/editCategory/{{$category->id}}" style="color: white; text-decoration: none;">Edit</a></button></td>

                <td><button class="btn btn-danger"><a href="/delCategory/{{$category->id}}" style="color: white;text-decoration: none;">Delete</a></button></td>
            </tr>
            </tbody>
            @endforeach
        </table>



@endsection