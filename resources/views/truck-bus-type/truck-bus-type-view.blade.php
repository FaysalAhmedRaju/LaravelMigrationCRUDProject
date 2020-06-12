
@extends('layouts.master')
@section('title', 'Truck Bus Entry')
@section('style')
    {{--<style src="{{url('css/jquery-ui-timepicker-addon.css')}}"></style>--}}
@endsection
{{--@section('script')--}}
    {{--<script src="{{url('js/jquery-ui-timepicker-addon.js')}}"></script>--}}
    {{--{!! Html::script('js/customizedAngular/truck-bus-type.js') !!}--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>--}}
{{--@endsection--}}

@section('script')

    <script src="{{url('js/customizedAngular/truck-bus-type.js')}}"></script>

@endsection
{{--<script src="{{url('js/truck.js')}}"></script>--}}

@section('content')

    <div class="col-md-12 ng-cloak" ng-app="truckBusApp" ng-controller="truckBusController">

        <div class="col-md-6 col-md-offset-2" style="background-color: #f8f9f9; border-radius:20px;">
            <h4 class="text-center ok">Vehicle Type Entry Form</h4>
            <br>
            <div class="alert alert-success" id="savingSuccess" ng-hide="!savingSuccess">@{{ savingSuccess }}</div>
            <div class="alert alert-danger" id="savingError" ng-hide="!savingError">@{{ savingError }}</div>
            <div class="alert alert-success" id="savingSuccessCombo" ng-hide="!savingSuccessCombo" ng-show="savigSuccessCombo">@{{ savingSuccess_combo }}</div>
            <div class="alert alert-danger" id="savingErrorCombo" ng-hide="!savingErrorCombo" ng-show="ErrorCombo">@{{ savingError_combo }}</div>


            <div class="col-md-12">
                <form name="ExTruckEntryExitForm" id="ExTruckEntryExitForm" novalidate>
                    <table>
                        <tr>
                            <th style="padding-left: 15px;">Type&nbsp;:</th>
                            <td>
                                <input type="text" class="form-control" name="type" id="type" ng-model="type" placeholder="Enter Type.">
                            </td>

                            <th style="padding-left: 15px;">Name:</th>
                            <td>
                                <input type="text" class="form-control" name="type_name" id="type_name" ng-model="type_name" placeholder="Enter Type Name." >

                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center">
                                <button type="button" class="btn btn-primary center-block" ng-click="Save()" ng-if="!updateBtn">Save</button>
                                <button type="button"   class="btn btn-primary center-block" ng-click="update()" ng-if="updateBtn">Update</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
            </div>
        </div>
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered text-center">

                <thead>
                <tr>

                    <th>Vehicle Type</th>
                    <th>Type Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <tr  ng-repeat="exTruck in allExTrucks ">


                    <td>@{{ exTruck.type }}</td>
                    <td>@{{ exTruck.name }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" ng-click="edit(exTruck)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-target="#deleteManifestConfirm" data-toggle="modal" ng-click="delete(exTruck)">Delete</button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="10" class="text-center">

                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        {{--------------------------Delete Model----------------------------}}
        <div class="modal fade" id="deleteManifestConfirm" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title text-center">Are you sure to delete Vehicle Type Name: <b>@{{ type_name_i }}?</b></h4>
                        <a href="" class="btn btn-primary center-block pull-right" ng-click="deleteTruck()">Yes</a>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    </div>
                    <div class="modal-footer">
                        <span ng-show="deleteFailMsg">Something wrong!</span>
                        <div id="deleteSuccess" class="alert alert-success text-center" ng-show="deleteSuccessMsg">
                            Successfully deleted!
                        </div>
                        <button type="button" class="btn btn-warning center-block" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
       // console.log('javascript ok')
//        $('#exit_datetime').datetimepicker({
//            showButtonPanel: true,
//            dateFormat: 'yy-mm-dd',
//            timeFormat: 'HH:mm:ss'
//        });
//        $( function() {
//            $( "#entry_datetime" ).datepicker(
//                {
//                    dateFormat: 'yy-mm-dd',
//                }
//            );
//        } );
    </script>

@endsection