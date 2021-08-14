@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genre CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<body>
<div class="container mt-2">
    <div class="row">

        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Genre CRUD</h2>
        </div>
        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewGenre" class="btn btn-success">Add</button></div>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Genre name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->genre }}</td>
                    <td>
                       <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $genre->id }}">Edit</a>
                      <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $genre->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
             {!! $genres->links() !!}
        </div>
    </div>        
</div>
@include('genre.bootstrap-model')
</body>
</html>
@endsection
@section('scripts')
{!!Html::script('js/script.js')!!}
@endsection
