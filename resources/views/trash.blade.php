@extends('layouts.admin.navigation')
@section('content')
@if (Session::has('success'))
       <div class="alert alert-success">
           <p>{{ Session::get('success') }}</p>
       </div>
   @endif
<div class="container" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Size</th>
      <th scope="col">Type</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($trash as $trashs)
  @if( $trashs->type == 0 )
  <tr>
      <th scope="row"><a class="link-secondary"  href ="{{ route('openfolder', $trashs->id)}}" ><i class="bi bi-folder"></i> {{ $trashs->folder_name }}</a></th>
      <td>{{ $trashs->updated_at->format('d.m.Y') }}</td>
      <td>{{  "_"}}</td>
      <td>{{ "_"}}</td>
      <td>    <a class="nav-link nav-icon " href="#" data-bs-toggle="dropdown">
            <i class="bi bi-three-dots-vertical link-secondary"></i>  </a>
            <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('Restordropfile', $trashs->id)}}">Restor</a>
          <a class="dropdown-item" href="{{ route('destroy', $trashs->id)}}">Delete</a>
  </div>
        </td>
        </tr>
   
    @else
    <tr>
      <th scope="row"><a class="link-secondary" target="_blank" href ="{{ asset('uploads/' . $trashs->file_path )}}" >{{ $trashs->file_name }}</a></th>
      <td>{{ $trashs->updated_at->format('d.m.Y') }}</td>
      <td>{{ $trashs->file_size }}</td>
      <td>{{ $trashs->file_type }}</td>
      <td>    <a class="nav-link nav-icon " href="#" data-bs-toggle="dropdown">
            <i class="bi bi-three-dots-vertical link-secondary"></i>  </a>
            <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('Restordropfile', $trashs->id)}}">Restor</a>
          <a class="dropdown-item" href="{{ route('destroy', $trashs->id)}}">Delete</a>
  </div>
        </td>
        </tr>
@endif
 @endforeach
    
  </tbody>

</table>
</div>
@endsection