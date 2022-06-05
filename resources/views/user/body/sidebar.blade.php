@php
  $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

    
    $site = App\Models\Backend\SiteSettings::find(1);

@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset($site->dlogo) }}" alt="">
						  
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li >
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="header nav-small-cap"></li>
		  
        <li class="treeview {{ ($route == 'trade')?'active':'' }}">
          <a href="#">
            <i class="fa fa-money"></i> <span>Start Trade</span>
            <span class="pull-right-money">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('trade-gift-card') }}"><i class="ti-more"></i>Trade Gift Card</a></li>
           @if($site->bitcoin == 1)
           @else
           <li><a href="{{ route('trade-btc') }}"><i class="ti-more"></i>Trade Bitcoin</a></li>
           @endif
           
            @if ($site->usdt == 1)
            @else
            <li><a href="{{ route('trade-usdt') }}"><i class="ti-more"></i>Trade Usdt</a></li>
              
            @endif
           
            
          </ul>
        </li>
		
     
        <li class="header nav-small-cap"></li> 
  
        <li>
          <a href="{{route('user-bank')}}">
            <i class="ti-wallet text-muted mr-2"></i>
			<span>Bank</span>
          </a>
        </li>
    
        <li class="header nav-small-cap"></li>

        <li>
          <a href="{{route('user-transactions')}}">
            <i class="fa fa-dollar "></i>
			<span>Transactions</span>
          </a>
        </li>
		 
        <li class="header nav-small-cap"></li>
       
        <li>
          <a href="{{ route('user-profile') }}">
            <i class="ti-settings"></i>
			<span>Settings</span>
          </a>
        </li>


        <li class="header nav-small-cap"></li>
		  
		<li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                this.closest('form').submit();">
          {{ __('Logout') }}
       </a>
      </form>
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