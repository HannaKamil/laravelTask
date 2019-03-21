@extends('include.adminMaster')
@section('content')

  <div id="wrapper">



    <div id="content-wrapper">

    <form action="/settings" method="post">
      {{csrf_field()}}


      <span>Site Name:</span><br>
      <input name="form_site_name"  type="text" placeholder="Site Name" size="70" required><br><br>


      <span>Site Email address:</span><br>
      <input name="form_site_email" type="email" placeholder="Site Email address" size="70" required><br><br>

      <span>Site Key words:</span><br>
      <textarea name="form_site_keys" placeholder="Site Key words" cols="100" required></textarea><br><br>

      <span>Site Description:</span><br>
      <textarea name="form_site_desc" placeholder="Site Description" cols="100" required></textarea><br><br>

      <span>Maintenance:</span><br>
      <select required name="maint">
        <option value="" selected disabled hidden>Maintenance</option>
        <option value="enable">Enabled</option>
        <option value="disable">Disabled</option>
      </select>
      <br>
      <span>Maintenance Message:</span><br>
      <textarea  name="f_maintenance_msg" placeholder="Maintenance Message" cols="100"></textarea><br><br>

      <input type="submit" value="Save">
    </form>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login">Logout</a>
        </div>
      </div>
    </div>
  </div>

@endsection

