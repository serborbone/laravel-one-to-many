@extends('admin.layouts.base')

@section('content')
  <div class="container">

      {{-- Btn crea nuovo post --}}
      <a href="{{route('admin.posts.create')}}" class="btn btn-primary mb-4">Nuovo Post</a>

      <table class="table">
      <thead class="thead-dark">

        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Testo</th>
          <th scope="col">Slug</th>
          <th scope="col"></th>
        </tr>

      </thead>

      <tbody>
          @foreach ($posts as $singlepost)
              <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->content}}</td>
                  <td>{{$post->slug}}</td>
              </tr>
          @endforeach
      </tbody>

    </table>
</div>
@endsection