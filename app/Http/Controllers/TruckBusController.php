<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class TruckBusController extends Controller
{
    public  function truckBusView()
    {
        return view('truck-bus-type.truck-bus-type-view');
    }
    public  function reportView()
    {
        return view('truck-bus-type.report-view');
    }

    public function truckBusSaveData(Request $r)
    {
       // dd($r);
        $Checktype = DB::table('types')
            ->where('name', $r->type_name)
            ->get();

       // dd($Checktype); exit();

      //  $Checktype = DB::SELECT('SELECT * FROM types WHERE types.name =?',[$r->type_name]);

//        $file = fopen("Truckentry.txt","w");
//        echo fwrite($file,"Hello".$Checktype);
//        fclose($file);
//        return ;

        if ($Checktype == '[]') {

            $currentTime = date('Y-m-d H:i:s');
            $postbusTruckType = DB::table('types')
                ->insert([
                    'types.name' => $r->type_name,
                    'types.type' => $r->type,
                    'types.created_at' => $currentTime,
                    'types.updated_at' => $currentTime

                ]);

            if ($postbusTruckType == true) {
                return "Inserted";
            }

        } else {
            return "Duplicate";
        }
    }

    public function getAllVehicleTypeData()
    {

       // $getAllExTruck = DB::SELECT('SELECT * FROM types',[/*$r->type_name*/]);
        $getAllExTruck = DB::table('types')
            ->select(
                'types.*'
            )
            ->get();
        return json_encode($getAllExTruck);
    }

    public function updateTruckBusTypeData(Request $r)
    {

        $currentTime = date('Y-m-d H:i:s');
        $postExTruckUpdate = DB::table('types')
            ->where('id', $r->id)
            ->update([
                'type' => $r->type,
                'name' => $r->type_name,
                'created_at' => $currentTime,
                'updated_at' => $currentTime

            ]);
        if ($postExTruckUpdate == true) {
            return "Updated";
        }
    }


    public function deleteVehicleTypeData($id)
    {

//         $file = fopen("Truckentry.txt","w");
//        echo fwrite($file,"Hello raju:".$id);
//        fclose($file);
//        return;

        DB::table('types')->where('id', $id)->delete();

        return 'success';
    }

    public function getTodaysTruckEntryReport()
    {


        $today = date('Y-m-d');
        //   dd($today);
        $todayWithTime = date('Y-m-d h:i:s a');

        $mainData = DB::select("SELECT TYPES.type,types.name,types.created_at,types.updated_at
 FROM TYPES WHERE DATE(types.created_at)=?", [$today]);

         // dd($mainData);
        if ($mainData == []) {

            return view('truck-bus-type.error');
        }

        $pdf = PDF::loadView('truck-bus-type.todays-truck-entry-report', [
            'mainData' => $mainData,
            'todayWithTime' => $todayWithTime
        ])->setPaper([0, 0, 808, 620.63], 'landscape');
        return $pdf->stream('todaysTruckEntryReport.pdf');

    }

}
