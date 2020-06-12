// var myApp = angular.module('myModule',[]);
// var myController = function ($scope) {
//     $scope.message = "testing Angular";
//
// };
// myApp.controller('myCtrl',myController());
angular.module('truckBusApp', [])
    .controller('truckBusController', function($scope, $http){
        $scope.Blank = function() {
            // $scope.vehicle_type = null;
            $scope.type_name = null;
            $scope.type = null;

        }

        $scope.Save = function() {

            var data = {
                type : $scope.type,
                type_name : $scope.type_name
            }
            $http.post("/truck-bus/api/save-data",data)
                .then(function(response) {

                    console.log(response.data)
                    if(response.data == 'Duplicate') {

                        $scope.savingError = 'Sorry! Duplicate Can Not Entry.';
                        $("#savingError").show().delay(5000).slideUp(2000);
                        $scope.GetAllExportTruck();
                        $scope.Blank();

                    }else {

                        $scope.savingSuccess = 'Truck Successfully Inserted';
                        $("#savingSuccess").show().delay(5000).slideUp(2000);
                        $scope.GetAllExportTruck();
                        $scope.Blank();

                    }



                }).catch(function(r) {
                console.log(r)
            })
        }


        $scope.update = function () {
            var data = {
                id:$scope.d_id,
                type : $scope.type,
                type_name : $scope.type_name
            }
            $http.post("/truck/api/update-truck-bus-type-data",data)
                .then(function(response) {
                    $scope.savingSuccess = 'Truck Successfully Updated';
                    $("#savingSuccess").show().delay(5000).slideUp(2000);
                    $scope.Blank();
                    $scope.updateBtn = false;
                    $scope.GetAllExportTruck();
                }).catch(function(r) {
                console.log(r)
                if (r.status == 401) {
                    $.growl.error({message: r.data});
                } else {
                    $.growl.error({message: "It has Some Error!"});
                }
                $scope.savingError = 'Something Went Wrong';
                $("#savingError").show().delay(5000).slideUp(2000);
                $scope.updateBtn = false;
            })


        }


        $scope.edit = function (i) {  //ok
            console.log(i);
            $scope.updateBtn = true;
            $scope.d_id = i.id;
            $scope.type = i.type;
            $scope.type_name = i.name;
        }

        $scope.delete = function (i) {

            console.log(i);

            $scope.de_driver_name = i.type;
            $scope.type_name_i = i.name;
            $scope.de_id = i.id;

        }

        $scope.deleteTruck = function () {
            // console.log($scope.de_id)
            $http.get("/truck/api/delete-vehicle-type-data/" + $scope.de_id)
                .then(function (data) {

                    $scope.deleteSuccessMsg = true;
                    $("#deleteSuccess").show().fadeTo(1000, 500).slideUp(1500, function () {
                        $("#deleteSuccess").slideUp(2000);
                    });

                    $scope.GetAllExportTruck();

                    setTimeout(function () {
                        $("#deleteManifestConfirm").modal('hide')

                    }, 1500)


                }).catch(function (r) {
                console.log(r)
                if (r.status == 401) {
                    $.growl.error({message: r.data});
                } else {
                    $.growl.error({message: "It has Some Error!"});
                }
                console.log('error')

            }).finally(function () {


            })
        }



        $scope.GetAllExportTruck = function() {
            $http.get('/truck-bus/api/all-vehicle-type-data/')
                .then(function(data) {
                    $scope.allExTrucks = data.data;
                    console.log($scope.allExTrucks )
                }).catch(function(r){
                console.log(r)
                if (r.status == 401) {
                    $.growl.error({message: r.data});
                } else {
                    $.growl.error({message: "It has Some Error!"});
                }
            })
        }
        $scope.GetAllExportTruck();

    });