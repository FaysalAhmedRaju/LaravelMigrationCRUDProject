
@extends('layouts.master')
@section('title', 'Report View')
@section('style')
    {{--<style src="{{url('css/jquery-ui-timepicker-addon.css')}}"></style>--}}
@endsection
{{--@section('script')--}}
{{--<script src="{{url('js/jquery-ui-timepicker-addon.js')}}"></script>--}}
{{--{!! Html::script('js/customizedAngular/truck-bus-type.js') !!}--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>--}}
{{--@endsection--}}

@section('script')

    {{--<script src="{{url('js/customizedAngular/truck-bus-type.js')}}"></script>--}}

@endsection
{{--<script src="{{url('js/truck.js')}}"></script>--}}

@section('content')

    <div class="col-md-12 ng-cloak" ng-app="" ng-controller="">
        <div class="col-md-6" style="" >
            <br>



        </div>
        <div class="col-md-6" style="" >
            <a href="{{ route('export-truck-get-todays-truck-entry-report') }}" target="_blank">
                <button type="button" class="btn btn-primary">
                    <span class="fa fa-search"></span>Today's Entry Report
                </button>
            </a>


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