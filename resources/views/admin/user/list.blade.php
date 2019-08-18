@extends('admin.app')
@section('content')
<div class="container">
  <h2>{{ $title }}</h2>
  <p>This table contains user list.</p>
  <button class="float-right btn btn-primary"><i class="fa fa-plus"></i></button>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sl.no</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action(Edit/Delete)</th>
      </tr>
    </thead>
    <tbody>
      @php
        $count = 1;
      @endphp
      @foreach($users as $user)
      <tr>
        <td> {{ $count }} </td>
        <td> USER{{ $user->id }} </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td data-user-id="{{ $user->id }}">
          <button class="btn btn-info"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      @php
        $count++;
      @endphp
      @endforeach
    </tbody>
  </table>
</div>
@endsection
