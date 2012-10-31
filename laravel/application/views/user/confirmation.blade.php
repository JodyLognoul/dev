@layout('main')

@section('nav-elem')
	<li><a href="{{ URL::to('/') }}">Home</a></li>
	<li><a href="{{ URL::to('party') }}">Party</a></li>
	<li class="active"><a href="{{ URL::to('user') }}">Account</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">|</a></li>
	<li><a href="{{ URL::to('logout') }}">Logout</a></li>
@endsection

@section('nav-elem-second')
<ul id="second-nav" class="cadre span2">
	<li><a href="#global"><i class="icon-user"></i> Profile</a></li>
	<li><a href="#global"><i class="icon-list"></i> Mes parties</a></li>
	<li><a href="{{ URL::to('logout') }}"><i class="icon-circle-arrow-right"></i> Logout</a></li>
</ul>
@endsection

@section('container')	
	<div class="cadre">
		{{ HTML::image('img/icone/profile.png','',array('class' => 'img-cadre')) }}
		<h2 class="h2">Profile</h2>
		<p>Thanks you for your registration :)</p>
		<a href="{{ URL::to_route('party'); }}">Liste des parties</a>
</div>
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection