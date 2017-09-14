@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <?php echo e(Auth::user()->id); ?>

                        </div>
                    @endif



                </div>
                <div class="panel-body">

                    <form action="/create/post" method="post">

                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Title </label>
                        <input type="name" class="form-control" name="title" value="title" id="email">
                      </div>
                      <input type="hidden" name="username" value="{{Auth::user()->id}}">
                      <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" name="content" id="comment"></textarea>

  </div>
                      <button type="submit" class="btn btn-default">Update</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
