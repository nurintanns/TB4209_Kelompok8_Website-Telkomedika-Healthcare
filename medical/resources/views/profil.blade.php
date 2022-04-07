@extends('layouts.master')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-center">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class=""></div>
									<div class="profile-main">
										<img src="{{ auth()->user()->getFoto() }}" class="" style="width: 320px;"alt="Avatar">
										
									</div>
								
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama  <span>{{ auth()->user()->name }}</span></li>
											<li>Email <span>{{ auth()->user()->email }}</span></li>
											<li>No Telpon <span>{{ auth()->user()->no_telpon }}</span></li>
											<li>Keahlian <span>{{ auth()->user()->keahlian }}</span></li>
											<li>Role <span><a href="">{{ auth()->user()->role }}</a></span></li>
										</ul>
									</div>
								
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

@stop

