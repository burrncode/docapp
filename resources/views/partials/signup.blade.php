<div class="modal fade" id="signUp">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="text-center">
				<div class="modal-body">
					<h3>Join Doctify Today</h3>
					<div class="row">
						<a href="{{ url('register/patient') }}" class="btn btn-primary btn-lg sapcer-5">patient</a>
						<a href="{{ url('register/specilist') }}"  class="btn btn-primary btn-lg sapcer-5">specilist</a>
					</div>
				</div>
				<div class="row">
					Already a member? <a href="{{ route('login') }}">Login</a>
				</div>
			</div>
			<br/>
			<br/>
		</div>
	</div>
</div>