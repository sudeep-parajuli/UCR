<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRentalReturn;
use App\Models\userbookinglist;
use App\Models\Device;
use App\Models\CartItem;
use App\Models\User;
use App\Models\ManagerRentalReturn;
use App\Models\RentalHistory;


class productController extends Controller
{
        

	public function managerpage() {
    	$returnlist = Device::all();
    	
    	return view("managerpage", compact("returnlist"));
      
    }

		

	public function userrental() {
    	$userrental = userbookinglist::all();
    	
    	return view("userprofile", compact("userrental"));
    
    }
    
    public function store(Request $request){
    	$new_booking = new userbookinglist();
    	$new_booking->user_id = $request->input("user_cart_id");
    	$new_booking->device= $request->input("devicename");
    	$new_booking->model= $request->input("devicemodel");
       	$new_booking->number_of_hour_booked= $request->input("number_of_hour_booked");
    	$new_booking->quantity= $request->input("devicenumber");
    	$new_booking->amount_paid = $request->input("device_price_new");
    	$new_booking->status= "Active";
    
    	$new_booking->save();
    	return redirect()->back()->with('status','Device Added Successfully');
    	

    }

	public function deleteuserdevice($id) {
    	$deletedevice = userbookinglist::find($id);
    	$deletedevice->delete();
    	return redirect("/productlist");
    }

	public function getvalue(Request $request){
    	$modelvalue = $request->input("devicemodel");
    	return view("shoppingcart");
    }

	public function adddevice() {
    	return view("addproduct");
    
    }

	public function alldevice() {
    	$userdevice = Device::all();
    	
    	
    	return view("devicelist", compact("userdevice"));
    
    }

	public function devicedetail($id) {
    	$devicedetail = Device::find($id);
    	// $devicebrand = Device::find($brand);
    	return view("devicedetail", compact("devicedetail"));

    }

	public function device_entry(Request $request) {
    	$device = new Device();
    	$device->user_id = auth()->user()->id;
    	$device->brand = $request->input("computerbrand");
    	$device->model = $request->input("computermodel");
    	$device->operating_system = $request->input("operatingsystem");
    	$device->RAM = $request->input("ram");
    	$device->hdmiport_available = $request->input("hdmi");
    	$device->number_of_usb_port = $request->input("usbport");
    	$device->hourly_cost = $request->input("price");
    	$device->display_size = $request->input("displaysize");
    	$device->availability = $request->input("availability");
    
    	$device->save();
    	return redirect()->back()->with('status','Device Added Successfully');
    	
    	
    }
	//getting item from cart_item database
	public function cartitem() {
    	$cartitem = CartItem::all();
    	$total_cart_price = CartItem::where("u_id", "=", auth()->user()->id)->sum("price");
    	$cartcount = CartItem::where("u_id", "=", auth()->user()->id);
   
    	// $cartcount = CartItem::where("id", "=", auth()->user()->id);
    	  	
    	return view("shoppingcart", compact("cartitem", "total_cart_price", "cartcount"));
    }

	
		
	

	//inserting the data into cart_item database
	public function item_cart(Request $request) {
    	$item_cart = new CartItem();
    	$item_cart->u_id = $request->input("cart_user_id");
    	$item_cart->brand = $request->input("cart-brand");
    	$item_cart->model = $request->input("cart-model");
    	$item_cart->price = $request->input("cart-price");
    	$item_cart->availability = $request->input("cart-availability");
    	$item_cart->save();
    	

    	
    	return redirect()->back()->with('status','Device Added Successfully');
    	
    }

	//deleting the device from the cart
	public function destroy_cart($id) {
    	$deletedevice = CartItem::find($id);
    	$deletedevice->delete();
    	return redirect("/cartlist");
    }


	public function edit_device($id) {
    	$editdevice = Device::find($id);
    	return view("editdevice", compact("editdevice"));
    
    }

  //editing the device detail  
 	public function update_device(Request $request, $id) {
    	$device = Device::find($id);
    	$device->brand = $request->input("computerbrandedit");
    	$device->model = $request->input("computermodeledit");
    	$device->operating_system = $request->input("operatingsystemedit");
    	$device->RAM = $request->input("ramedit");
    	$device->hdmiport_available = $request->input("hdmiedit");
    	$device->number_of_usb_port = $request->input("usbportedit");
    	$device->hourly_cost = $request->input("priceedit");
    	$device->display_size = $request->input("displaysizeedit");
    	$device->availability = $request->input("availabilityedit");
    
    	$device->update();
    
    	return redirect("/product")->with('message','Device Updated Successfully');
	
          
}
//deleting the device detail
	public function destroy($id) {
    	$deletedevice = Device::find($id);
    	$deletedevice->delete();
    	return redirect("/product");
    }

	//sending data to return product from user page to manger return page
	public function userrentalreturn() {
    	$user_rental_return = userbookinglist::all();
    	return view("managerRentalReturn", compact("user_rental_return"));
    
    }
    
    public function user_rental_store(Request $request){
    	$new_booking = new ManagerRentalReturn();
    	$new_booking->booking_id = $request->input("user_booking_id");
    	$new_booking->user_id = $request->input("user_user_id");
    	$new_booking->device_brand = $request->input("user_device");
    	$new_booking->model= $request->input("user_model");
       	$new_booking->number_of_hour_booked= $request->input("user_number_of_hour_booked");
    	$new_booking->quantity= $request->input("user_quantity");
    	$new_booking->amount_paid = $request->input("user_amount_paid");
    	$new_booking->status= "Active";
    
    	$new_booking->save();
    	return redirect()->back()->with('status','Device Added Successfully');
    	

    }

	//delete manager rental return item after relesing the 
		public function returnManagerRental($id) {
    	$deletedevice = ManagerRentalReturn::find($id);
    	$deletedevice->delete();
    	return redirect("/returnlist");
    }
	//sending data from manager rental return page to user history table

	public function userrentalhistory() {
    	
    	$userRentalHistory = ManagerRentalReturn::all();
    	return view("userBookingHistory", compact("userRentalHistory"));
    
    }

	public function userRentalHistory_store(Request $request) {
    	$userHistory = new ManagerRentalReturn;
    	$userHistory->booking_id = $request->input("manager_booking_id");
    	$userHistory->user_id = $request->input("manager_user_id");
   		$userHistory->device = $request->input("manager_user_device");
    	$userHistory->model = $request->input("manager_user_model");
	    $userHistory->number_of_hour_booked = $request->input("manager_user_number_of_hour_booked");
    	$userHistory->quantity = $request->input("manager_user_quantity");
    	$userHistory->amount_paid = $request->input("manager_user_amount_paid");
    	$userHistory->status = $request->input("manager_user_status");
    	
    	$userHistory->save();
    	return redirect()->back()->with('status','Device Added Successfully');
    }

	public function managerDashboard() {
    	$totalStudent = User::where("user_type", "=", 0);
    	$totalStaff = User::where("user_type", "=", 1);
    	$totalUCRStaff = User::where("user_type", "=", 2);
    	$totalDevice = Device::all();
    	return view("managerdashboard", compact("totalStudent", "totalStaff", "totalUCRStaff", "totalDevice"));
    }

	public function contactus() {
    	return view("contact");
    }

}