<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<form class="form-horizontal" method="post" action="{{url('change-password')}}">
		{{ csrf_field() }}
		<fieldset>

			<!-- Form Name -->
			<legend>Change Password</legend>

			<!-- Password input-->
			<div class="form-group{{ $errors->has('password_current') ? ' has-error' : '' }}">
				<label class="col-md-4 control-label" for="piCurrPass">Current Password</label>
				<div class="col-md-4">
					<input id="password_current" name="password_current" type="password" placeholder="Current Password" class="form-control input-md" required="">
					@if ($errors->has('password_current'))
					<span class="help-block" style="color:red">
						<strong>{{ $errors->first('password_current')}}</strong>
					</span>
					@endif
				</div>

			</div>

			<!-- Password input-->
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label class="col-md-4 control-label" for="piNewPass">New Password</label>
				<div class="col-md-4">
					<input id="password" name="password" type="password" placeholder="New Password" class="form-control input-md" required="">
					@if ($errors->has('password'))
					<span class="help-block" style="color:red">
						<strong>{{ $errors->first('password')}}</strong>
					</span>
					@endif
				</div>
			</div>

			<!-- Password input-->
			<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				<label class="col-md-4 control-label" for="piNewPassRepeat">Confirm Password</label>
				<div class="col-md-4">
					<input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm New Passwrod" class="form-control input-md" required="">
					@if ($errors->has('password_confirmation'))
					<span class="help-block" style="color:red">
						<strong>{{ $errors->first('password_confirmation')}}</strong>
					</span>
					@endif
				</div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label class="col-md-4 control-label" for="bCancel"></label>
				<div class="col-md-8">
					<button  type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>

		</fieldset>
	</form>
</body>
</html>