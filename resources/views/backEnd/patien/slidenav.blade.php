<!-- Sidebar -->
<div class="left-menu bg-white border-right" id="sidebar-wrapper">
    <a id="menuin-toggle"><i class="fa fa-bars fa-2x text-blue float-right mr-2 d-xl-none" aria-hidden="true"></i></a>
    <div class="sidebar-heading mt-5"><img src="{{url('imgs/logo4.png')}}" width="120" height=""></div>
    <div class="list-group list-group-flush mt-5">
        <a href="{{route('patien-profile',$patient->id)}}" class="list-group-item list-group-item-action h5"><i class="fa fa-home mr-2" aria-hidden="true"></i> Home</a>
        <a href="{{route('edit.profile',$patient->id)}}" class="list-group-item list-group-item-action h5"><i class="fas fa-user-edit mr-2"></i> Edit Profile</a>
        <a href="{{route('get_old_pescription',$patient->id)}}" class="list-group-item list-group-item-action h5"><i class="fas fa-file-prescription mr-2"></i>Old Pescrption</a>
        <div class="dropdown">
            <a href="#" class="list-group-item list-group-item-action h5 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users mr-2"></i> Future <i class="fas fa-asterisk size-f float-right text-red"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="#" class="list-group-item list-group-item-action h5"><i class="fas fa-users mr-2"></i> Club <i class="fas fa-asterisk size-f float-right text-red"></i></a>
            <a href="#" class="list-group-item list-group-item-action h5"><i class="fas fa-user-shield mr-2"></i> Insurance <i class="fas fa-asterisk float-right size-f text-red"></i></a>
            <a href="#" class="list-group-item list-group-item-action h5"><i class="fas fa-comments mr-2"></i> Online <i class="fas fa-asterisk float-right size-f text-red"></i></a>
            <a href="#" class="list-group-item list-group-item-action h5"><i class="fas fa-comments mr-2"></i> QR Code <i class="fas fa-asterisk float-right size-f text-red"></i></a>
        <a href="#" class="list-group-item list-group-item-action h5"><i class="fas fa-comments mr-2"></i> Share <i class="fas fa-asterisk float-right size-f text-red"></i></a>
          </div>
        </div>
        
        <a href="{{route('patien.logout')}}" class="list-group-item list-group-item-action h5 mb-5"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
        <a href="About.html" class="list-group-item list-group-item-action h5 mt-5">About</a>
        <a href="ContactUs.html" class="list-group-item list-group-item-action h5">Contact Us</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->
