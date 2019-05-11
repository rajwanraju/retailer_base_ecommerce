 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
	<div class="container">
 <h3 style="text-align: center;">Roles</h3>
    
    <a class="btn btn-success" href="{{route('role.create')}}"> Create Role</a>
     
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

           @forelse($roles as $role)
            <tr>
                <td>{{$role->name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td>
                   <td>   <a class="btn btn-info btn-sm" href="{{route('role.edit',$role->id)}}">Edit</a>  </td>
                   <td> 
     
                     <form action="{{route('role.destroy',$role->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>
           
                     </td>
                </td>
            </tr>
            @empty
            <tr>
                <td>No roles</td>
            </tr>
            @endforelse

    </table>
</div>
</div>
        @endsection