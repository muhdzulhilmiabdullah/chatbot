@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row" id="create">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="{{url('/insert')}}">
				  	<fieldset>
				  		 {{ csrf_field() }}
				    <legend>Bioinformatics BotMan insert -> database</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach 
				    @endif
				    <div class="form-group">
				      <label for="topic" class="col-lg-2 control-label">Topic:</label>
				      <div class="col-lg-5">
				        <input type="text" name="topic" class="form-control" id="inputName" placeholder="Topics">
				      </div>			
				    </div>

				     <div class="form-group">
				      <label for="information" class="col-lg-2 control-label">Information:</label>
				      <div class="col-lg-5">
				        <textarea name="information" class="form-control" placeholder="Information"></textarea>
				      </div>
				     </div>

				     <div class="form-group">
				      <label for="link" class="col-lg-2 control-label">Link:</label>
				      <div class="col-lg-5">
				        <textarea name="link" class="form-control" placeholder="Add http or https"></textarea>
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