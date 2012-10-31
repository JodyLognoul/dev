@layout('main')

@section('nav-elem')
	<li><a href="{{ URL::to('/') }}">Home</a></li>
	<li><a href="{{ URL::to('party') }}">Party</a></li>
	<li class="active"><a href="{{ URL::to('user') }}">Account</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">|</a></li>
	@if(Auth::check())
		<li><a href="{{ URL::to('logout') }}">Logout</a></li>
	@else
		<li><a href="{{ URL::to('user') }}">Sign in</a></li>
	@endif
@endsection

@section('nav-elem-second')
<ul id="second-nav" class="cadre span2">
	@if(Auth::check())
		<li><a href="#global"><i class="icon-user"></i> Profile</a></li>
		<li><a href="#global"><i class="icon-list"></i> Mes parties</a></li>
		<li><a href="{{ URL::to('logout') }}"><i class="icon-circle-arrow-right"></i> Logout</a></li>
	@else
		<li><a href="{{ URL::to('user') }}#signin">Sign in</a></li>
		<li><a href="{{ URL::to('user') }}#login">Login</a></li>
	@endif
</ul>
@endsection

@section('container')	
	@if( $msg ) 
		<div class="alert fade in alert-error" style="margin-top:20px;">
			<button data-dismiss="alert" class="close" type="button">×</button>
			{{ $msg }}
		</div>
	@endif
	@if( ! Auth::check())
		<div class="cadre">		
			{{ HTML::image('img/icone/register.png','',array('class' => 'img-cadre')) }}
				<div id="signin">
					<h2 class="h2">Sign up</h2>
					{{ Form::open(URL::to_route('create_user'), 'POST', array('class' => 'form-horizontal','id'=>'form-login'), false); }}
						<div class="control-group">
							<label class="control-label" for="inputUsername">Username</label> 
							<div class="controls">
								{{ Form::input('text', 'inputUsername', '', array('placeholder' => 'Username'));}} <span class="input-msg">Please enter a funy username</span>
							</div>
						</div>							
						<div class="control-group">
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
								{{ Form::input('text', 'inputEmail', '', array('placeholder' => 'Email','id' => 'inputEmail')); }} <span id="input-msg-email"class="input-msg">Please enter a funy email address</span>							
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
								{{ Form::password('inputPassword', array('id' => 'inputPassword','placeholder' => 'Password'));}} <span class="input-msg">Please enter a funy password</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword2">Password2</label>
							<div class="controls">
								{{ Form::password('inputPassword2', array('id' => 'inputPassword2','placeholder' => 'Password2'));}} <span class="input-msg">Please enter a funy password 2</span>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">							
								{{ Form::submit('Submit', array('class' => 'btn btn-info'));}}
							</div>
						</div>
					{{ Form::close(); }}
				</div>
				<div id="login">		
					<h2 class="h2">Login</h2>
					{{ Form::open(URL::to('login'), 'POST', array('class' => 'form-horizontal','id'=>'form-login'), false); }}
					<div class="control-group">
						{{ Form::label('inputEmail', 'Email', array('class'=>'control-label'));}}
						<div class="controls">
							{{ Form::input('email', 'inputEmail', '', array('placeholder' => 'Email'));}}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('inputPassword', 'Password', array('class'=>'control-label'));}}

						<div class="controls" for="inputPassword">
							{{ Form::password('inputPassword', array('id' => 'inputPassword','placeholder' => 'Password'));}}
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox" for="rememberMe">
								{{ Form::checkbox('rememberMe', '', false, array() ); }}Remember me
							</label>
							{{ Form::submit('Sign in', array('class' => 'btn btn-info'));}}
						</div>
					</div>
					{{ Form::close(); }}
			</div>
		</div>
	@else
		<div class="cadre">
			{{ HTML::image('img/icone/profile.png','',array('class' => 'img-cadre')) }}
			<h2 class="h2">Profile</h2>
			<div class="row-fluid show-grid">
				<div class="span3">
					<address>
						<strong>Twitter, Inc.</strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
						<abbr title="Phone">P:</abbr> (123) 456-7890
					</address>

					<address>
						<strong>Full Name</strong><br>
						<a href="mailto:#">first.last@gmail.com</a>
					</address>
				</div>
				<div class="span9">
					<p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
					<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
					<p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
					<p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
					<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				</div>
			</div>
		</div>
	@endif
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection