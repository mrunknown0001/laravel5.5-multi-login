@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h3>Login</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Login</strong>
			</div>
			<div class="panel-body">
				<form action="{{ route('post_login') }}" method="POST" autocomplete="off">
					<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
						<input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username" required oninvalid="this.setCustomValidity('Please Enter Username')" oninput="setCustomValidity('')" onmouseover="this.title='Please Enter Username'" />
					</div>
					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<input type="password" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Please Enter Password')" oninput="setCustomValidity('')" title="Please Enter Password" />
					</div>
					<div class="form-group">
						{{ csrf_field() }}
						<button class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>	</div>
</div>
@endsection