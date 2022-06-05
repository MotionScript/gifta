@php
  $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();


 $site = App\Models\Backend\SiteSettings::find(1);
 $user  = (Auth()->guard('admin')->user()->user == 1);
 $wallet  = (Auth()->guard('admin')->user()->wallet == 1);
    $card  = (Auth()->guard('admin')->user()->card== 1);
    $trade  = (Auth()->guard('admin')->user()->trade == 1);
    $frontend  = (Auth()->guard('admin')->user()->frontend == 1);
    $page  = (Auth()->guard('admin')->user()->page == 1);
    $settings = (Auth()->guard('admin')->user()->settings == 1);


@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{ asset($site->wlogo) }}" alt="">

					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li >
          <a href="{{ route('admin_dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>


@if ($user == true)

<li class="treeview {{ ($route == 'user')?'active':'' }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>Users</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('site-users') }}"><i class="ti-more"></i>Site Users</a></li>
      <li><a href="{{ route('admin-users') }}"><i class="ti-more"></i>Admin Users</a></li>


    </ul>
  </li>

@else

@endif




@if ($wallet == true)

<li class="treeview {{ ($route == 'wallet')?'active':'' }}">
    <a href="#">
      <i class="fa fa-bank"></i> <span>Wallet</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('admin-wallet') }}"><i class="ti-more"></i>Manage Wallet</a></li>


    </ul>
  </li>

@else

@endif


@if ($card == true)

<li class="treeview {{ ($route == 'card')?'active':'' }}">
    <a href="#">
      <i class="fa fa-gift"></i> <span>Gift Cards Category</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('card-category') }}"><i class="ti-more"></i>Card Gategory</a></li>
      <li><a href="{{ route('sub-card-category') }}"><i class="ti-more"></i>Card Sub Category</a></li>
      <li><a href="{{ route('site-users') }}"><i class="ti-more"></i></a></li>
   </ul>
  </li>

@else

@endif



@if ($trade == true)

<li class="treeview {{ ($route == 'trade')?'active':'' }}">
    <a href="#">
      <i class="fa fa-gift"></i> <span>Trades</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('card-unpaid') }}"><i class="ti-more"></i>Unpaid Pending</a></li>
      <li><a href="{{ route('paid-card') }}"><i class="ti-more"></i>Paid Completed</a></li>
      
   </ul>
  </li>

@else

@endif


@if ($frontend == true)


<li class="treeview {{ ($route == 'frontend')?'active':'' }}">
    <a href="#">
      <i class="fa fa-home"></i> <span>Frontend</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('first-section') }}"><i class="ti-more"></i>First Section</a></li>
      <li><a href="{{ route('second-section') }}"><i class="ti-more"></i>Second Section</a></li>
      <li><a href="{{ route('third-section') }}"><i class="ti-more"></i>Third Section</a></li>
      <li><a href="{{ route('testimony') }}"><i class="ti-more"></i>testimony Section</a></li>
      <li><a href="{{ route('sub-card-category') }}"><i class="ti-more"></i>Fourth Section</a></li>
      <li><a href="{{ route('why-us') }}"><i class="ti-more"></i>Why Us</a></li>
        <li><a href="{{ route('faq') }}"><i class="ti-more"></i>FAQ's</a></li>

  </ul>
  </li>

@else

@endif


@if ($page == true)

<li class="treeview {{ ($route == 'page')?'active':'' }}">
    <a href="#">
      <i class="fa fa-gift"></i> <span>Pages</span>
      <span class="pull-right-money">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('admin-pages') }}"><i class="ti-more"></i>Manage Pages</a></li>

    </ul>
  </li>

@else

@endif



        {{-- <li class="treeview {{ ($route == 'blog')?'active':'' }}">
          <a href="#">
            <i class="fa fa-gift"></i> <span>Blog</span>
            <span class="pull-right-money">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Coming soon</a></li>
            <li><a href="#"><i class="ti-more"></i></a></li>
          </ul>
        </li> --}}

        @if ($settings == true)

        <li class="treeview {{ ($route == 'settings')?'active':'' }}">
            <a href="#">
              <i class="fa fa-gift"></i> <span>Settings</span>
              <span class="pull-right-money">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('site-settings') }}"><i class="ti-more"></i>Site Settings</a></li>
              <li><a href="{{ route('seo-setting') }}"><i class="ti-more"></i>SEO Settings</a></li>
              <li><a href="{{ route('currency') }}"><i class="ti-more"></i>Currency</a></li>
              <li><a href="{{ route('email-smtp') }}"><i class="ti-more"></i>Email SMPT</a></li>

            </ul>
          </li>

        @else

        @endif


		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
