@extends('layouts.admin') 
@include('alerts.success')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  @foreach ($users as $user)
  <tbody>
  <td>{{$user->name}}</td>
  <td>{{$user->email}}</td>
  <td>   {!!link_to_route('user.edit', $title = 'Edit', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
  </tbody>
  @endforeach
  </table>
  {{ $users->links() }}
@stop