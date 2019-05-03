@extends('master')

@section('content')

<div class="container">

    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $post->title }}
            </div>
            <div class="panel-body">
                {{ $post->post }}
            </div>
            <div class="panel-footer">
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FscrapSharing%2Fpublic%2Fposts%2F1&layout=button_count&size=large&width=84&height=28&appId" width="84" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>

</div>
@endsection
