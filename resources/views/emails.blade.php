<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

  <style>
    #header2{
      width: 100%;
      
    }
    #header2 button{
        padding: 10px  20px;
        
    }

  </style>
</head>

   


<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/dashboard" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Services</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/emails" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Emails</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">News Letters</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/category" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Categories</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/logout" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li> --}}
      
            
           
          </ul>
      
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>  
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">

          <div class="d-flex justify-content-between align-items-center mb-3" id="header2">
            <div>
              <button type="button" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#AddEmail">Add Email</button>
              <button type="button" class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ImportMail">Import</button>
              @if($count > 0)
                <a href="/Export"><button  class="btn btn-secondary btn-sm me-2">Export</button></a>
              <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#DeleteAllEmail">Delete All</button>

              @endif
              
            </div>
            <div>
              <!-- You can add any additional controls or information here if needed -->
            </div>
          </div>


          @if(session('msg'))
              <div class="alert alert-success" style="color: black">{{ session('msg') }}</div>
          @endif
          @if(session('delmsg'))
              <div class="alert alert-danger" style="color: black">{{ session('delmsg') }}</div>
          @endif
          
          <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            @if($count > 0)

              <tr>
                <th>Email</th>
                <th>Date Create</th>
                <th>Time Create</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Actions</th>
              </tr>
              @endif
            </thead>
            <tbody>
              @forelse ($getEmails as $mail)                  
            
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <p class="text-muted mb-0">{{$mail->email}}</p>
                    </div>
                  </div>
                </td> 
                <td>
                  <p class="text-muted mb-0">{{$mail->created_at->format('d/m/Y')}}</p>
                </td>
                <td>
                  <p class="text-muted mb-0">{{$mail->created_at->format('H:i')}}</p>
                </td>
                <td>
                  <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td></td>
                <td></td>
                <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded text-danger" data-bs-toggle="modal" data-bs-target="#DeleteEmail{{$mail->id}}" data-mail-id="{{ $mail->id }}">Delete</button>
                  <button type="button" class="btn btn-link btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#EditEmail{{$mail->id}}" >Edit</button>
                </td>

                <div class="modal fade" id="DeleteEmail{{$mail->id}}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Mail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <form action="/AddEmail" method="post">
                          @csrf
                         <div class="mb-3">
                            <h3 class="text-danger" style="text-align: center">Are You Sure</h3>
                            <p style="text-align: center">Delete : {{$mail->email}}</p>
                        </div>                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/deleteEmail/{{$mail->id}}" type="submit" class="btn btn-danger">Delete</a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>



                <div class="modal fade" id="EditEmail{{$mail->id}}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Mail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <form action="/EditEmail" method="post">
                          @csrf
                          <div class="mb-3">

                            <input type="hidden" value="{{$mail->id}}" name="id">
                            <label for="exampleTextInput" class="form-label">Mail</label>
                            <input type="text" class="form-control" name="email" id="exampleTextInput" value="{{$mail->email}}">
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
              
                    </form>
                    </div>
                  </div>
                </div>
                

              </tr>

              @empty

         
          <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 100%; padding:3em ; opacity:0.4">
            <img src="https://static.vecteezy.com/system/resources/previews/021/745/881/original/sad-face-icon-sad-emotion-face-symbol-icon-unhappy-icon-vector.jpg" alt="" style="width: 20%;" srcset="">
            <h3 style="margin-top: 2em">Mail List is empty</h3>
        </div>
        
            
              @endforelse 
            </tbody>
          </table>
            <div style="padding: 20px ; " >{{ $getEmails->links('pagination::bootstrap-5') }}</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

  <!-- Button trigger modal -->
  <div class="modal fade" id="AddEmail" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add Mail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form action="/AddEmail" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleTextInput" class="form-label">Mail</label>
              <input type="text" class="form-control" name="email" id="exampleTextInput" placeholder="Email...">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

      </form>
      </div>
    </div>
  </div>



  <div class="modal fade" id="ImportMail" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add Mails</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form action="/import" method="post" enctype="multipart/form-data" accept=".xlsx">
            @csrf
            <div class="mb-3">
                <label for="exampleTextInput" class="form-label">Mails</label>
                <input type="file" class="form-control" name="file" id="exampleTextInput" placeholder="Excel..." required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>

      </form>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="DeleteAllEmail" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add Mails</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form action="/import" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3" style="text-align: center">
              <img src="https://www.shutterstock.com/image-vector/vector-attention-sign-exclamation-mark-600nw-1725119242.jpg" alt="" 
              style="width: 50%"
              srcset="">
              <h1 class="text-danger">Are you sure all email data will be deleted?</h1>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/deleteAll" type="submit" class="btn btn-danger">Delete ALL</a>
        </div>

      </form>
      </div>
    </div>
  </div>
  





</body>

</html>