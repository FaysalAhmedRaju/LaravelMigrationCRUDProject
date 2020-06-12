@extends('layouts.master')


@section('content')

    <div class="col-md-12" >
        <h3>All Post Information</h3>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Modify</th>
            </tr>
            </thead>
            <tbody>
            @foreach($postAllData as $data)
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                        <button class="btn btn-info" data-toggle="modal" data-myid="{{$data->id}}" data-mytitle="{{$data->title}}" data-mydescription="{{$data->description}}"
                                data-target="#edit">Edit</button>
                        /
                        <button class="btn btn-danger"
                                data-toggle="modal" data-myid="{{$data->id}}"
                                data-target="#delete">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Add Info
        </button>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
                    </div>
                    <form  action="{{route('update-post-info')}}" method="post">
                        {{--{{method_field('patch')}}--}}
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input type="hidden" name="account_id" id="account_id" value="">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="description"> Description</label>
                                <textarea name="description" id="description" cols="20" rows="5"
                                          class="form-control"></textarea>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Post</h4>
                    </div>
                    <form  action="{{route('save-post-info')}}" method="post">

                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="description"> Description</label>
                                <textarea name="description" id="description" cols="20" rows="5"
                                          class="form-control"></textarea>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <form  action="{{route('delete-post-info')}}" method="post">

                        {{csrf_field()}}
                        <div class="modal-body">
                            <p class="text-center">
                                Are you sure you want to delete this?
                            </p>
                            <input type="hidden" name="account_id" id="account_id" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                            <button type="submit" class="btn btn-warning">Yes, Delete</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>




    </div>

@endsection