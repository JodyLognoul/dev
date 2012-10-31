@layout('main')

@section('nav-elem')	
<li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
<li><a href="{{ URL::to('party') }}">Party</a></li>
<li><a href="{{ URL::to('user') }}">Account</a></li>
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
	<li><a href="#global">Liste</a></li>
	<li><a href="#gridSystem">Parties</a></li>
	<li><a href="#fluidGridSystem">Fluid grid system</a></li>
	<li><a href="#layouts">Layouts</a></li>
	<li><a href="#responsive">Responsive design</a></li>
</ul>
@endsection

@section('container')	
@if( $msg ) 
	<div class="alert fade in alert-success">
		<button data-dismiss="alert" class="close" type="button">×</button>
		{{ $msg }}
	</div>
@endif
<div class="list cadre">
	<h3>Homepage !</h3>
</div>

@endsection

@section('script')
<script type="text/javascript">
	$(".alert").alert();
</script>
@endsection