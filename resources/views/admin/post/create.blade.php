@extends('admin.layouts.base')

@section('content')

  <div class="container">

    <form method="POST" action="{{route('admin.posts.store')}}">

        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
          <label for="text">Testo</label>
          <textarea class="form-control" name="text" id="text"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary pl-5 pr-5 pt-2 pb-2" >Crea</button>

    </form>

  </div>

 @endsection 