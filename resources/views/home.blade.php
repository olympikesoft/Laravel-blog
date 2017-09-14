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

                    <div class="panel-body">
                      <div class="container">
                        <table id="example" class="display" cellspacing="0" width="40%">
      <thead>
        <tr>
          <th>#ID</th>
          <th>#TITLE</th>
          <th>Editar</th>
          <th>Remover</th>
        </tr>
      </thead>
      <tbody>
           @foreach ($posts as $post)
        <tr>

          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td><a href="/posts/edit/{{$post->id}}">[X]</a><td>
          <td><a href="/posts/remove/{{$post->id}}">[X]</a><td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </div>
                    </div>

                </div>
                <div class="panel-body">
                  <div class="container">
                    {{$posts->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
