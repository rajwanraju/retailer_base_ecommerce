	 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="container">
    	<div class="panel panel-default col-md-8 col-md-offset-2" >
         <div class="panel-body">

    	<div class="row">
    			<h1 class="text-center text-danger">Add New Product</h1><br>

    			<h3 class="text-center text-success">{{Session::get('message')}}</h3>

    			<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">  

    				{!! csrf_field() !!}


    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i>
    						</span>
    						<input type="text" class="form-control" name="title" placeholder="Title" required="required">
    					</div>
    				</div> 

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-list" aria-hidden="true"></i>
    						</span>
    						<select class="form-control" name="categoryId">
    							<option>Select Category Name</option>
    							@foreach($categories as $category) 
    							<option value="{{$category->id}}">{{$category->categoryName}}</option>

    							@endforeach
    						</select>
    					</div>
    				</div>

					
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-doller" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" name="price" placeholder="price" required="required">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-doller" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" name="quentity" placeholder="Product quentity" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                          <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-doller" aria-hidden="true"></i>Cover Image</span>
                            <input id="file-1" type="file" name="cover_image" class="form-control" data-overwrite-initial="false" >
                         
                        </div>

                    </div>

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-text-height" aria-hidden="true"></i>
    						</span>
    						<textarea class="form-control" rows="6" name="description" placeholder="Description"></textarea>
    					</div>
    				</div>

    				<div class="form-group">

    					<div class="file-loading">

    						<input id="file-1" type="file" name="photos[]" multiple class="file form-control" data-overwrite-initial="false" >

    					</div>

    				</div>

                   <div class="form-group">
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-text-height" aria-hidden="true"></i>
                            </span>
                    <select name="status" id="" class="form-control">
                        <option >Select Product Status</option>
                        <option value="1">Published</option>
                        <option value="0">UnPublished</option>
                    </select>
                </div>
                </div>


    				<div class="form-group">
    					<button type="submit" class="btn btn-primary btn-block btn-lg">Upload</button>
    				</div>

    			</form>     

    		</div>

    	</div>
    	</div>
    	</div>
    	</div>

    </div>
       @endsection