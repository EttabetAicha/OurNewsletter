@extends('layout')
@section('content')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">

          <div class="d-flex justify-content-between align-items-center mb-3" id="header2">
            <div>
              <button type="button" class="btn btn-primary btn-sm me-2">Add Email</button>
              <button type="button" class="btn btn-success btn-sm">Import</button>
              <button type="button" class="btn btn-secondary btn-sm">Export</button>
            </div>
            <div>
              <!-- You can add any additional controls or information here if needed -->
            </div>
          </div>
          
          <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Email</th>
                <th>Date Create</th>
                <th></th>
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
                      <p class="text-muted mb-0">Nabilo2000000000@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-muted mb-0">2024-02-22</p>
                </td>
                <td>
                  <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td></td>
                <td></td>
                <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded text-danger">Delete</button>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">Edit</button>
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