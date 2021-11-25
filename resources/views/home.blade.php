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
  
  @foreach($files as $file)
   @if( $file->type == 0 )
    <tr>
      <th scope="row"><a class="link-secondary"  href ="{{ route('openfolder', $file->id)}}" >
      @if( $file->favarout == 1)
        <i class="bi bi-star">
      @endif
      <i class="bi bi-folder"></i> {{ $file->folder_name }}</a></th>
      <td>{{ $file->updated_at->format('d.m.Y') }}</td>
      <td>{{  "_"}}</td>
      <td>{{ "_"}}</td>
      <td>  <a class="nav-link nav-icon " href="#" data-bs-toggle="dropdown">
            <i   class="bi bi-three-dots-vertical link-secondary"></i>  </a>
            <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('openfolder', $file->id)}}">Open</a>
   
          
        

          @if( $file->favarout == 1)
          <a class="dropdown-item" href="{{ route('deletefavarout', $file->id)}}">remove from favarout</a>  
           @else
          <a class="dropdown-item" href="{{ route('makefavarout', $file->id)}}">Set a favarout</a> 
          @endif     
          <a class="dropdown-item" href="{{ route('delete', $file->id)}}">Delete</a>
    </div>
        </td>
        </tr>

    @endif 

   
  
  @endforeach
  @foreach($files as $file)
  @if( $file->type != 0 )
   
       <tr>
      <th scope="row"><a class="link-secondary" target="_blank" href ="{{ route('openfile', $file->id)}}" >
      @if( $file->favarout == 1)
      <i class="bi bi-star">
        @endif  
         {{ $file->file_name }}</a></th>
      <td>{{ $file->updated_at->format('d.m.Y') }}</td>
      <td>{{ $file->file_size }}</td>
      <td>{{ $file->file_type }}</td>
      <td>  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
               <i   class=" bi bi-three-dots-vertical  link-secondary"></i></a>
          <div class="dropdown-menu dropleft">
          <a class="dropdown-item"target="_blank" href="{{ route('openfile', $file->id)}}">Open</a>
            @if( $file->favarout == 1)
          <a class="dropdown-item" href="{{ route('deletefavarout', $file->id)}}">remove from favarout</a>  
        @else
          <a class="dropdown-item" href="{{ route('makefavarout', $file->id)}}">Set a favarout</a> 
          @endif
          <a class="dropdown-item" href="{{ route('dwonloadfile', $file->id)}}">Dwonload</a> 
          <a class="dropdown-item" href="{{ route('delete', $file->id)}}">Delete</a>
  </div>
        </td>
        </tr>
@endif

 @endforeach
    
  </tbody>

</table>
</div>



</div>






@endsection