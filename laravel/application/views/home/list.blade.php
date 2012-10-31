@layout('main')

@section('nav-elem')
	
@endsection

@section('nav-elem-second')
	<li><a href="#global">Liste</a></li>
	<li><a href="#gridSystem">Parties</a></li>
	<li><a href="#fluidGridSystem">Fluid grid system</a></li>
	<li><a href="#layouts">Layouts</a></li>
	<li><a href="#responsive">Responsive design</a></li>
@endsection

@section('container')	
<div class="list cadre">
	{{ HTML::image('img/icone/list-party.png','',array('class' => 'img-cadre')) }}
	<h2 class="h2">List party</h2>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Product</th>
				<th>Payment Taken</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<tr class="success">
				<td>1</td>
				<td>TB - Monthly</td>
				<td>01/04/2012</td>
				<td>Approved</td>
			</tr>
			<tr class="error">
				<td>2</td>
				<td>TB - Monthly</td>
				<td>02/04/2012</td>
				<td>Declined</td>
			</tr>
			<tr class="warning">
				<td>3</td>
				<td>TB - Monthly</td>
				<td>03/04/2012</td>
				<td>Pending</td>
			</tr>
			<tr class="info">
				<td>4</td>
				<td>TB - Monthly</td>
				<td>04/04/2012</td>
				<td>Call in to confirm</td>
			</tr>
		</tbody>
	</table>
</div>
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
<div class="cadre">
	{{ HTML::image('img/icone/new-party.png','',array('class' => 'img-cadre')) }}
	<h2 class="h2">New party</h2>
	<div class="row-fluid show-grid">
		<div class="span6">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Where ?</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputUsername">When ?</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Username">
					</div>
				</div>			
				<div class="control-group">
					<label class="control-label" for="inputPassword">Places</label>
					<div class="controls">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword2">What</label>
					<div class="controls">
						<textarea type="text" id="inputPassword2" placeholder="Password2"></textarea>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-warning">Sign in</button>
					</div>
				</div>
			</form>
		</div>
		<div class="span3">
			<ul class="unstyled">
				<li>Lorem ipsum dolor sit amet</li>
				<li>Consectetur adipiscing elit</li>
				<li>Integer molestie lorem at massa</li>
				<li>Facilisis in pretium nisl aliquet</li>
				<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
				</li>
				<li>Faucibus porta lacus fringilla vel</li>
				<li>Aenean sit amet erat nunc</li>
				<li>Eget porttitor lorem</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="unstyled">
				<li>Lorem ipsum dolor sit amet</li>
				<li>Consectetur adipiscing elit</li>
				<li>Integer molestie lorem at massa</li>
				<li>Facilisis in pretium nisl aliquet</li>
				<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
				</li>
				<li>Faucibus porta lacus fringilla vel</li>
				<li>Aenean sit amet erat nunc</li>
				<li>Eget porttitor lorem</li>
			</ul>
		</div>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection