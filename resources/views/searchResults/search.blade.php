@extends('include.adminMaster')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">News</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Category</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                </thead>



                                <tbody>
                                @if (count($news)>0)
                                    <div class="alert-danger">Search result about: <b> {{$query}} </b> is:</div><br>
                                @endif


                                    @foreach($news as $new)
                                        <tr>
                                            <td><a href="#">{{$new->title}}</a></td>
                                            <td>edit</td>
                                            <td>delete</td>
                                            <td>show</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @if (count($categories)>0)
                                    <div class="alert-danger">Search result about: <b> {{$query}} </b> is:</div><br>
                                @endif

                                    @foreach($categories as $category)
                                        <tr>
                                            <td><a href="#">{{$category->category_name}}</a></td>
                                            <td>edit</td>
                                            <td>delete</td>
                                            <td>show</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection






