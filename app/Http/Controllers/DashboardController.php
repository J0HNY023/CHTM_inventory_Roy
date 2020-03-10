<?php

namespace App\Http\Controllers;
use App\User;
use App\Equipment;
use App\EquipmentCategory;
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
    public function index()
    {
    	$user = User::first();
    	$equipments = Equipment::all();
    	return view('dashboard.index' , compact('user','equipments'));
    }

    public function showEquipments(){
    	$user = User::first();
      $equipments = Equipment::all();
    	$equipment = Equipment::first();

      // $ec = EquipmentCategory::all();
      // dd($equipments);

    	return view('equipment.index', compact('user','equipments','equipment'));
    }

    public function createEquipments(){
    	$user = User::first();
    	$equipments = Equipment::all();
      $equipment_categories = EquipmentCategory::all();
    	return view('equipment.create',compact('user','equipments','equipment_categories'));
    }

    public function storeEquipments(){
    		// dd( request()->date_bought);
    	Equipment::create([
    		 'serial_number' => request()->serial_number,
            'brand' =>  request()->brand,
            'date_bought' =>  request()->date_bought,
            'equipment_category_id' =>  request()->equipment_category_id

    	]);


    	// dd(request()->brand);
    	return redirect('/dashboard/equipment');
    }

    public function deleteEquipments($id){
    	
    	$equipment = Equipment::find($id);

    	$equipment->delete();

    	return redirect('/dashboard/equipment');
   }

   public function editEquipments($id){
   		$user = User::first();
    	$equipments = Equipment::find($id);
      $equipment_categories = EquipmentCategory::all();

		return view('equipment.edit',compact('user','equipments','id','equipment_categories'));

   }

   public function updateEquipments(){

   	Equipment::where('id', request()->id)->update([
   			'serial_number' => request()->serial_number,
            'brand' =>  request()->brand,
            'date_bought' =>  request()->date_bought,
            'equipment_category_id' =>  request()->equipment_category_id
   	]);

   	// dd(request()->id);

   	return redirect('/dashboard/equipment');
   }
     
}
