@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row" id="create">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="{{url('/insert')}}">
					{{csrf_field()}}
				  	<fieldset>
				    <legend>Add Topic and Information</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach 
				    @endif
				    <div class="form-group">
				      <label for="who" class="col-lg-2 control-label">Who?</label>
				      <div class="col-lg-5">
				        <input type="text" name="who" class="form-control" id="inputName" placeholder="Who">
				      </div>			
				    </div>

				     <div class="form-group">
				      <label for="description" class="col-lg-2 control-label">Description</label>
				      <div class="col-lg-5">
				        <textarea name="description" class="form-control" placeholder="Information"></textarea>
				      </div>
				     </div>

				    <div class="form-group">
				      <div class="col-lg-8 col-lg-offset-2">
				        
				        <button type="submit" class="btn btn-success">Submit</button>
				        <a href="{{url('/')}}" class="btn btn-warning" role="button"></i> Back</a>
				        

				      </div>
				    </div>
  					
  					</fieldset>
				</form>
			</div>
		</div>
@endsection