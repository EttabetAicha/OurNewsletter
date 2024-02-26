@extends('layout')
@section('content')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">

          <div class="d-flex justify-content-between align-items-center mb-3" id="header2">
            <div>
              <button type="button" class="btn btn-primary btn-sm me-2">Add</button>
         
            </div>
            <div>
              <!-- You can add any additional controls or information here if needed -->
            </div>
          </div>
          
          <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th></th>
                <th></th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <p class="text-muted mb-0">News 1</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-muted mb-0">Khribiqa zribiqa Khribiqa zribiqa Khribiqa zribiqa...</p>
                </td>
                <td>
                  Sport
                </td>
                <td></td>
                <td></td>
                <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded text-danger">Delete</button>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">Edit</button>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">Send To All</button>
                </td>
              </tr>
            </tbody>
          </table>
          

          
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>