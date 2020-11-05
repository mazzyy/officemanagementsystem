<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\user;
use App\Employes;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=user::all();
        
        return view('/welcome')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view("createListing");
    }

    /**
     *  //using this to show 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //useing this as store not to show 
    public function show(Request $request)
    {
        $listing =new Listing();

        $listing->name=$request->input('name');
        $listing->website=$request->input('website');
        // $listing->email=$request->input('email');
        $listing->phone=$request->input('phone');
        $listing->address=$request->input('address');
        $listing->bio=$request->input('bio');
        $listing->user_id=auth()->user()->id;
        $listing->save();

      return redirect('/home')->with('success','listing has been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listings=Listing::find($id);
        
       return view('/edit')->with('listings',$listings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
     return 123;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //another update function


    public function update1(Request $request,$id){

           
      $listing=Listing::find($id);
      $listing->name=$request->input('name');
      $listing->website=$request->input('website');
      // $listing->email=$request->input('email');
      $listing->phone=$request->input('phone');
      $listing->address=$request->input('address');
      $listing->bio=$request->input('bio');
      $listing->user_id=auth()->user()->id;
      $listing->save();

      


        return redirect('/home')->with('success','list has been edit suvvessfully');
    }

    //another destroy function
    public function destroy1($id){

       $listings=Listing::find($id);
       $listings->delete();
        return redirect('/home')->with('success','destroyed successfully');
    }

    public function show1($id){
     
        $user=User::find($id);
        $listings=$user->listings;
      


        return view("show")->with('listings',$listings);
    }

  public function fulldata($id){

//   $employess=Listing::find($id);
 $listings=Listing::find($id);

        
 return view('/fulldata')->with('listings',$listings)->with('employes',$listings->employes);
  
  }

  //employedetials show
  public function employesdetails($id){

    $employes=Employes::find($id);

   
   return view('employesdetails')->with('employes',$employes);
  }

  //storeemplye employes new object
  public function storeemploye(Request $request,$id){
    $employes =new Employes();
    $employes->name=$request->input('name');
    $employes->occupation=$request->input('occupation');
    $employes->number=$request->input('number');
    $employes->bio=$request->input('bio');
    $listing=Listing::find($id);
    $employes->listing_id=$listing->id;
    $employes->save();

return redirect('Listings',)->with('sucess','employe has been created');
  }
  //create employes


  public function createemployes($id)
    {
        //


        return view("createemployes")->with('id',$id);
    }

  

}
