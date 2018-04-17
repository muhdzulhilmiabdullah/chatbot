@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row" id="create">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="{{ url('/insertkeyword')}}">
					{{csrf_field()}}
				  	<fieldset>
				    <legend>Create Keyword</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach 
				    @endif
				    <div class="form-group">
				      <label for="keyword_text" class="col-lg-2 control-label">Keyword</label>
				      <div class="col-lg-10">
				        <input type="text" name="keyword_text" class="form-control" id="inputName" placeholder="Keyword">
				      </div>			
				    </div>

				     <div class="form-group">
				      <label for="response_text" class="col-lg-2 control-label">Response</label>
				      <div class="col-lg-10">
				        <textarea name="response_text" class="form-control" placeholder="Response Keyword"></textarea>
				      </div>
				     </div>

				    <div class="form-group">
				      <div class="col-lg-8 col-lg-offset-2">
				        
				        <button type="submit" class="btn btn-success">Submit</button>
				        <a href="{{url('/keywordhome')}}" class="btn btn-warning" role="button"></i> Back</a>
				        

				      </div>
				    </div>
  					
  					</fieldset>
				</form>
			</div>
		</div>
@endsection