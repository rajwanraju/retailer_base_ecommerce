 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
	<div class="container">
 <h3 style="text-align: center;">Categories</h3>
    
    <a class="btn btn-success" href="{{route('category.create')}}"> Create Category</a>
     
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

           @forelse($categories as $category)
            <tr>
                <td>{{$category->categoryName}}</td>
                <td>{{$category->categoryDescription}}</td>
                <td>{{$category->publicationStatus == 1 ? "Published" : "UnPublished"}}</td>
                <td>
                   <td>   <a class="btn btn-info btn-sm" href="{{route('category.edit',$category->id)}}">Edit</a>  </td>
                   <td> 
     
                     <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>
           
                     </td>
                </td>
            </tr>
            @empty
            <tr>
                <td>No Category</td>
            </tr>
            @endforelse

    </table>
</div>
</div>
        @endsection