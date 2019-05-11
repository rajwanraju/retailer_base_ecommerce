 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
<h3>Create Category</h3>

    <form action="{{route('category.store')}}" method="post" role="form">
        {{csrf_field()}}

    	<div class="form-group">
    		<label for="name">Category</label>
    		<input type="text" class="form-control" name="name" id="" placeholder="Name of Category">
    	</div>
      
        <div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" id="" placeholder="Description">
    	</div>
 <div class="form-group">
		<select name="status" id="" class="form-control">
		<option >Select Category Status</option>
        <option value="1">Published</option>
		<option value="0">UnPublished</option>
		</select>
    </div>

    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>


   @endsection