@extends('layouts.adminLayout')

@section('content')

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Post Control Section <a class="btn btn-success" style="float: right" href="javascript:void(0)" id="createPost"> Create Post</a></div>


	                <div class="card-body">
	                   <table class="table table-bordered">
	                   	  <thead class="thead-dark">
	                   	    <tr>
	                   	      <th scope="col">Id</th>
	                   	      <th scope="col">Title</th>
	                   	      <th scope="col">Brief</th>
	                   	      <th scope="col">Body</th>
	                   	      <th scope="col">Photo</th>
	                   	      <th scope="col">Vedio</th>
	                   	      <th>Action</th>
	                   	    </tr>
	                   	  </thead>
	                   	  <tbody>
	                   	  	@foreach($post as $row)
	                   	    <tr>
	                   	      <th scope="row">{{$row->id}}</th>
	                   	      <td>{{$row->title}}</td>
	                   	      <td>{{$row->brief}}</td>
	                   	      <td>{{$row->body}}</td>
	                   	      <td>{{$row->photo}}</td>
	                   	      <td>{{$row->vedio}}</td>
	                   	      <td><a href="" class="fas fa-fw fa-trash-alt"></td>
	                   	    </tr>
	                   	    @endforeach
	                   	  </tbody>
	                   	</table>
	                </div>
	                
                	<div class="modal fade" id="ajaxModel" aria-hidden="true">
                	    <div class="modal-dialog">
                	        <div class="modal-content">
                	            <div class="modal-header">
                	                <h4 class="modal-title" id="modelHeading"></h4>
                	            </div>
                	            <div class="modal-body">
                	                <form id="postForm" name="postForm" action="{{url('/admin/createPost')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                	                @csrf
                	                    <input type="hidden" name="employee_id" id="post_id">
                	                    <div class="form-group">
                	                        <label for="name" class="col-sm-2 control-label">Title</label>
                	                        <div class="col-md-12">
                	                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="" maxlength="50" required="">
                	                        </div>
                	                    </div>

                	                    <div class="form-group">
                	                        <label class="col-sm-2 control-label">Brief</label>
                	                        <div class="col-md-12">
                	                            <input type="brief" id="email" name="brief" required="" placeholder="Enter Brief" class="form-control" required="">
                	                        </div>
                	                    </div>

                	                    <div class="form-group">
                	                        <label class="col-sm-2 control-label">Body</label>
                	                        <div class="col-md-12">
                	                            <input type="text" class="form-control" id="body" name="body" placeholder="Enter Body" value="" maxlength="50" required="">
                	                        </div>
                	                    </div>
                	                    
                	                    <div class="form-group">
                	                    	<label class="col-sm-2 control-label"><b>Input</b></label>
                	                        <input class="col-sm-2 control-label" type="radio" name="radio" value="photo"/>Photo
                	                        <input class="col-sm-2 control-label" type="radio" name="radio" value="vedio"/>Vedio
                	                            
                	                            <input type="file" style="display:none;" class="form-control col-md-12" id="photo" name="photo" placeholder="Enter Photo/Vedio" value="" maxlength="50" >

                	                            <input type="text" style="display:none;" class="form-control col-md-12" id="vedio" name="vedio" placeholder="Enter Youtube Embed URL" value="" maxlength="50" >

                	                    </div>

                	                    <div class="col-sm-offset-2 col-sm-10">
                	                        <button type="submit" class="btn btn-primary" id="saveBtn" value="submit">Save Post
                	                        </button>
                	                    </div>
                	                </form>
                	            </div>
                	        </div>
                	    </div>
                	</div>
	                
	            </div>
	        </div>
	    </div>
	</div>

	

@endsection