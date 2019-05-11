 @extends('admin.master')
@section('content')
<div class="right_col" role="main">

  <h3 style="text-align:center; ">Edit Categories</h3>

    <form action="{{route('category.update',$category->id)}}" method="post" role="form">
        {{ method_field('PATCH') }}
		{{csrf_field()}}
        <input type="hidden" name="categoryId" value="{{$category->id}}">

    	<div class="form-group">
    		<label for="name"> Category</label>
    		<input type="text" class="form-control" name="name" id="" placeholder="Name of Category" value="{{$category->categoryName}}">
    	</div>
        <div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$category->categoryDescription}}">
    	</div> 

         <div class="form-group">
        <select name="status" id="" class="form-control">
        <option value="1" <?php echo $category->publicationStatus == 1 ? "selected": "" ?>>Published</option>
        <option value="0" <?php echo $category->publicationStatus == 0 ? "selected": "" ?>>UnPublished</option>
        </select>
    </div>




    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>

	   @endsection