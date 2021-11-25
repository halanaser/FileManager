<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="_token" content="{{csrf_token()}}" />
  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" 
  rel="stylesheet">
  <!-- Favicons -->
  <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
  
  <!-- Template Main CSS File -->
  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

  <style>
  .uploadButton {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 10px;
  width: 100%;
  font-style: normal;
  font-size: 14px;
}

.uploadButton .uploadButton-input {
  opacity: 0;
  position: absolute;
  overflow: hidden;
  z-index: -1;
  pointer-events: none;
}

.uploadButton .uploadButton-button {
	display: flex;
	align-items: center;
	justify-content: center;
	box-sizing: border-box;
	height: 44px;
	padding: 10px 18px;
	cursor: pointer;
	border-radius: 4px;
	color: #66676b;
	background-color: transparent;
	border: 1px solid #66676b;
	flex-direction: row;
	transition: 0.3s;
	margin: 0;
	outline: none;
	box-shadow: 0 3px 10px rgba(102,103,107,0.1);
}

.uploadButton .uploadButton-button:hover {
	background-color: #66676b;
	box-shadow: 0 4px 12px rgba(102,103,107,0.15);
	color: #fff;
}

.uploadButton .uploadButton-file-name {
	flex-grow: 1;
	display: flex;
	align-items: center;
	flex: 1;
	box-sizing: border-box;
	padding: 0 10px;
	padding-left: 18px;
	min-height: 42px;
	top: 1px;
	position: relative;
	color: #888;
	background-color: transparent;
	overflow: hidden;
	line-height: 22px;

}

</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('login') }}" class="logo d-flex align-items-center">
        <img src="{{asset('admin/assets/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">Reveal</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        
       <li class="nav-item dropdown">
       <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data" id ="sub-form" class="hidden">
                @csrf
                @method('put')
            <div class="uploadButton margin-top-30">
                                <input class="uploadButton-input" type="file" name="attachments[]" accept="*" id="upload" multiple>
                                <label class="uploadButton-button ripple-effect" for="upload">Upload Files</i> </label>
                                <a class="  nav-link nav-icon " role="button" aria-pressed="true" href="{{ route('upload') }}" 
                                  multiple onclick="event.preventDefault();
                                  document.getElementById('sub-form').submit(); " >
                                   <i class="bi bi-cloud-arrow-up "></i> 
                                </a>
              
                            </div>

        </form>
     </i>

<!-- End upload Icon -->
        
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-columns-gap"></i>
          </a>
       </i><!-- End show2 Icon -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('admin/assets/img/profile-img.png')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }} </h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           


            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
              <form id="submit-form" action="{{ route('logout')}}" method="POST" class="hidden"> @csrf</form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a  class="nav-link  collapsed " href="#NewModalCenter"  data-target="#NewModalCenter" data-toggle="modal" >
          <i class="bi bi-plus"></i>
          <span>New Folder</span>
        </a>
     </i>
     
    
      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>My Files</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clock"></i><span>Recent</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        
        @foreach($recents as $recent)
        @if( $recent->type == 0 )
   
            <a href="{{ route('openfolder', $recent->id)}}">
              <i class="bi bi-circle"></i><span>{{ $recent->folder_name }}</span>
            </a>
          </i>
         
          @endif
          @endforeach
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-star"></i><span>Favorite</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        @foreach($files as $file)
        @if( $file->favarout==1 ) 
        @if($file->type == 0 )
        <a href="{{ route('openfolder', $file->id)}}">
               <i class="bi bi-circle "></i><span>{{ $file->folder_name }}</span>
            </a>
          </li>
          @else
          <a href="{{ asset('uploads/' . $file->file_path )}}" >
              <i class="bi bi-circle"></i><span>{{ $file->file_name }}</span>
            </a>
          </li>
          @endif
        @endif
          @endforeach
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav"  href="{{ route('trashes') }}" > 
          <i class="bi bi-trash"></i><span>Trash</span>
        </a> 
      </li><!-- End Tables Nav -->

    

     

    <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('logout') }}" onclick="event.preventDefault(); 
							document.getElementById('submit-form').submit();">
          <i class="bi bi-box-arrow-left"></i>
          <span>logout</span>
        </a>
        <form id="submit-form" action="{{ route('logout')}}" method="POST" class="hidden"> @csrf</form>
      </i>
    </li><!-- End Profile Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div >
      <h1>My Files</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">My Files</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <form  action="{{ url('/home/create')}}" method="post" id="form" >
         @csrf
    <div class="modal fade" id="NewModalCenter" tabindex="-1" role="dialog" aria-labelledby="NewModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewModalCenterTitle">New Folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
      <label for="basic-url">Folder Name</label>
      <div class="input-group mb-3">
       <input type="text" class="form-control" id="folder-name" name="folder_name" aria-describedby="basic-addon3">
   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  >Create</button>
      </div>
      
    </div>
  </div>
</div>
</form>
    <section class="section dashboard">
     @yield('content')




</section>

</main><!-- End #main -->

<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>

</body>
</html>
 