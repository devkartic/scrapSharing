@extends('master')

@section('content')

<div class="container">

    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                All Posts
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Title</th>
                            <th>Post</th>
                            <th>Share</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key => $post)
                        <tr class="odd gradeX">
                            <td>{{ ++$key }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->detatil }}</td>
                            <td class="center">
                                <button> Facebook </button>
                                <button> Twitter </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>

</div>
@endsection
