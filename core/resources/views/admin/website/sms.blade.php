@extends('admin.layout.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>SMS API Settings</h2>
		<hr/>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet sms-portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-bookmark"></i>Short Code</div>

				</div>
				<div class="portlet-body">
					<div class="table-scrollable">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th> # </th>
									<th> CODE </th>
									<th> DESCRIPTION </th>
								</tr>
							</thead>
							<tbody>


								<tr>
									<td> 1 </td>
									<td> <pre>&#123;&#123;message&#125;&#125;</pre> </td>
									<td> Details Text From Script</td>
								</tr>

								<tr>
									<td> 2 </td>
									<td> <pre>&#123;&#123;name&#125;&#125;</pre> </td>
									<td> Users Name. Will Pull From Database and Use in EMAIL text</td>
								</tr>



							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<div class="col-md-12">
		<div class="portlet sms-portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-envelope font-blue-sharp"></i>
					<span class="caption-subject font-blue-sharp bold uppercase">SMS Api</span>
				</div>
			</div>
			<div class="portlet-body form">
				<form role="form" method="POST" action="{{route('sms.update')}}" >
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label>SMS API</label>
							<input type="text" name="smsapi" class="form-control" value="{{$temp->smsapi}}">
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn green btn-block btn-lg">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<div class="row">

	</div>
	
	@endsection