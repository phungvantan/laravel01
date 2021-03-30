@extends('layouts.master')

<?php $n = 1; ?>
@section('content')
<a href="{{ route('loaitin.create') }}" class="btn btn-danger">Create</a>
<h1>Index loaitin</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Order</th>
      <th scope="col">Status</th>
      <th scope="col">TheLoai_ID</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listLoaiTin as $loaitin)
    <tr>
      <th scope="row">{{ $n++ }}</th>
      <td><a href="{{ route('loaitin.show',['id' => $loaitin->id]) }}">{{ $loaitin->name }}</a></td>
      <td>{{ $loaitin->slug }}</td>
      <td>{{ $loaitin->order }}</td>
      <td>{{ $loaitin->status }}</td>
      <td>{{ $loaitin->theloai_id }}</td>
      <td><a href="{{ route('loaitin.edit',['id' => $loaitin->id]) }}">Edit</a></td>
      <td>
      <form action="{{ route('loaitin.destroy', ['id' => $loaitin->id ])}}" method="POST">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="submit" class="btn btn-danger" value="Delete"/>
      </form>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection