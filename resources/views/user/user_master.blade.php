@include('user.body.header')

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-check-box"></i>
			    </a>
			</li>

		  </ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->

		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>

				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>

	      <!-- User Account-->
          <li class="dropdown user user-menu">

			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				<b>{{ Auth::guard('web')->user()->name }}</b>
				<img src="{{ asset(Auth::guard('web')->user()->image) }}" alt="">
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="{{ route('user-profile') }}"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 <a class="dropdown-item" href=""><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <form method="POST" action="{{ route('logout') }}">
					@csrf

					<a href="{{ route('logout') }}"
							 onclick="event.preventDefault();
									this.closest('form').submit();">
						{{ __('Logout') }}
				 </a>
				</form>
			  </li>
			</ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  @include('user.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <section class="content">

		<!-- Main content -->



		@yield('content')



	  </section>
	  </div>
  </div>
  <!-- /.content-wrapper -->
  @include('user.body.footer')






<!-- ./wrapper -->



<script>
	$(window).ready(function() {
	$("form").on("keypress", function (event) {
		var keyPressed = event.keyCode || event.which;
		if (keyPressed === 13) {
			event.preventDefault();
			return false;
		}
	});
	});








	//delete
$(function(){
    $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");


Swal.fire({
    title: 'Are you sure?',
    text: "To Deleted This Data!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Yes, Delete!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Data Has Been Deleted Successfully.',
        'success'
      )
      window.location.href = link
    }
  });


  });

    });

</script>


@livewireScripts
<!-- sweet alert cdn -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Vendor JS -->
  <script src="{{ asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
  <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
  <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
  <!--TOASTR JS CDN-->
  <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
  <script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
  <!-- Sunny Admin App -->
  <script src="{{ asset('backend/js/template.js') }}"></script>
  <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>


<script src="{{ asset('backend/js/sweetalert.js') }}"></script>
  <!----CK EDITOR-->
  <script src="{{ asset('../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
  <script src="{{ asset('backend/js/pages/editor.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--INITIALIZE TOASTR-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/vendor_components/dropzone/dropzone.js') }}"></script>
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
	<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script>

@if(Session::has('message'))
  toastr.options =
{
	"closeButton" : true,
	"progressBar" : true,
}
  var type = "{{ Session::get('alert-type', 'info') }}"
	 switch(type){
	   case 'info':
		   toastr.info("{{ Session::get('message') }}");
		   break

		   case 'success':
		   toastr.success("{{ Session::get('message') }}");
		   break

		   case 'error':
		   toastr.error("{{ Session::get('message') }}");
		   break

		   case 'warning':
		   toastr.warning("{{ Session::get('message') }}");
		   break
	 }
  @endif







//gift card rate calculator
  calculateCard = function()
{
    var resources = document.getElementById('amount1').value;
    var minutes = document.getElementById('rate1').value;
    document.getElementById('preview').value = parseInt(resources)*parseInt(minutes);

   }


//bitcoin rate calculator
calculatebtc = function()
{
    var amount = document.getElementById('amount2').value;
    var rate = document.getElementById('rate2').value;
    document.getElementById('preview').value = parseInt(amount)*parseInt(rate);

   }



//usdt rate calculator
calculate = function()
{
    var amount = document.getElementById('amount3').value;
    var rate = document.getElementById('rate3').value;
    document.getElementById('preview').value = parseInt(amount)*parseInt(rate);

   }
//copy wallet
function myFunction() {
      var copyText = document.getElementById("wallet");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied wallet: " + copyText.value);
    }



   $(document).ready(function(){
    $('select[name="category_id"]').on('change', function(){
      var category_id = $(this).val();
      if(category_id){
        $.ajax({
          url: "{{ url('/category/subcategory/ajax') }}/"+category_id,
          type: "GET",
          dataType: "json",
          success: function(data){
            var d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){
                $('select[name="subcategory_id"]').append('<option></option>');
              $('select[name="subcategory_id"]').append('<option value="'+ value.rate +'">' + value.name + '</option>');

            });
          },
        });
      }else{
        alert('danger');
      }
    });
});

</script>
</body>
</html>
