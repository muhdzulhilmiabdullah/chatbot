@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row" id="create">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="{{ url('/insertquestion')}}">
					{{csrf_field()}}
				  	<fieldset>
				    <legend>Create Question</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach 
				    @endif
				    <div class="form-group">
				      <label for="question_name" class="col-lg-2 control-label">Question</label>
				      <div class="col-lg-10">
				        <input type="text" name="name" class="form-control" id="inputName" placeholder="Question">
				      </div>			
				    </div>

				     <div class="form-group">
				      <label for="answer" class="col-lg-2 control-label">Answer</label>
				      <div class="col-lg-10">
				        <textarea name="email" class="form-control" placeholder="Answer"></textarea>
				      </div>
				     </div>
				      
				      <div class="form-group">
				      <label for="answer_keyword" class="col-lg-2 control-label">Answer Keyword</label>
				      <div class="col-lg-10">
				        <textarea name="address" class="form-control" placeholder="Answer Keyword"></textarea>
				      </div>
				     </div>
  
				    <div class="form-group">
				      <div class="col-lg-8 col-lg-offset-2">
				        
				        <button type="submit" class="btn btn-success">Submit</button>
				        <a href="{{url('/questionhome')}}" class="btn btn-warning" role="button"></i> Back</a>
				        

				      </div>
				    </div>
  					
  					</fieldset>
				</form>
			</div>
		</div>
@endsection