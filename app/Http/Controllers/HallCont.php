<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\owner;
use App\Hall;
use App\Customer;
use App\Clientbooking;
use Image;
// use Carbon\Carbon;

class HallCont extends Controller
{
    //
    public function registerhall()
    {
        return view ('registerhall');
    }


    public function adddata (Request $request)
    {
        
        if($file = $request->file('file1')){
            $name = $file->getClientOriginalName();
            if($file->move('Storage',$name)){
                $Assignment = new owner();
                $Assignment->ownername = $request->oname;
                $Assignment->fathername = $request->fname;
                $Assignment->cnic = $request->ocnic;
                $Assignment->phone = $request->ophone;;
                $Assignment->email = $request->oemail;;
                $Assignment->password = $request->opassword;;
                $Assignment->image = $name;
                $Assignment->Save();
                return view('login');
            }
            
        }
        else
        {
            echo "error";
        }
    
        //  return redirect()->back()->with('success', 'Image store in database successfully');
    }
    public function authaccount (Request $request)
    {
        if($request->user == "0")
        {
            $data = owner::where('email',$request->username)->where('password',$request->password)->first();
            if($data!=null)
            {
                $fetch = $data->Hall;
                $booking = $data->Clientbooking;
                return view ('ownerportal', compact('data','fetch','booking'));
             
            }
            else
            {
                echo "Invalid Username";
            }
        }
        elseif($request->user == "1")
        {
            $data = Customer::where('email',$request->username)->where('password',$request->password)->first();
            if($data!=null)
            {
                $fetch = $data->Clientbooking;
                return view ('clientportal', compact('data','fetch'));
             
            }
            else
            {
                echo "Invalid Username";
            }
        }
        else
        {
            echo "Invalid Username and Password and type";
        }
        
    
    }

    public function addhall (Request $request, $id)
    {
        
        if($file = $request->file('file1')){
            $name = $file->getClientOriginalName();
            if($file->move('Storage',$name)){

                if($file2 = $request->file('file2')){
                    $name2 = $file2->getClientOriginalName();
                    if($file2->move('Storage',$name2)){

                        if($file3 = $request->file('file3')){
                            $name3 = $file3->getClientOriginalName();
                            if($file3->move('Storage',$name3)){

                                if($file4 = $request->file('file4')){
                                    $name4 = $file4->getClientOriginalName();
                                    if($file4->move('Storage',$name4)){

                                        if($file5 = $request->file('file5')){
                                            $name5 = $file5->getClientOriginalName();
                                            if($file5->move('Storage',$name5)){

                                                $hall = new Hall();
                                                $hall->OID = $id;
                                                $hall->Hallname = $request->hname;
                                                $hall->Halladdress = $request->haddress;
                                                $hall->Halltype = $request->htype;
                                                $hall->Dish1 = $request->d1;
                                                $hall->Dish2 = $request->d2;
                                                $hall->Dish3 = $request->d3;
                                                $hall->Dish4 = $request->d4;
                                                $hall->Dish5 = $request->d5;
                                                $hall->Dish6 = $request->d6;
                                                $hall->Hallcapacity = $request->hcapacity;
                                                $hall->Hallparking = $request->hparking;;
                                                $hall->Snap1 = $name;
                                                $hall->Snap2 = $name2;
                                                $hall->Snap3 = $name3;
                                                $hall->Snap4 = $name4;;
                                                $hall->Snap5 = $name5;;
                                                $hall->HallAmount = $request->HR;
                                                $hall->FoodAmount = $request->FA;
                                                $hall->amount = $request->TA;
                                                $hall->Save();
                                                echo '<script type="text/javascript">', 'history.go(-1);', '</script>';
    
                                   
                                            }
                                            
                                        }
                           
                                    }
                                    
                                }
                   
                            }
                            
                        }
           
                    }
                    
                }
   
            }
            
        }
        else
        {
            echo "error";
        }
    
        //  return redirect()->back()->with('success', 'Image store in database successfully');
    }

    public function ownerprofile ($id)
    {
        
        $data = owner::where('id',$id)->first();
        if($data!=null)
        {
            
            return view ('ownerprofile', compact('data'));
         
        }
        else
        {
            echo "Invalid Username";
        }
    
    }

    

    public function marriagehalllist ($type)
    {
        
        $data = Hall::where('Halltype',$type)->get();
        if($data!=null)
        {
            
            return view ('Hallinfo', compact('data'));
         
        }
        else
        {
            echo "Not Found";
        }
    
    }

    public function Hallinfo ($OID,$id)
    {
        
        $owner = owner::where('id',$OID)->first();
        if($owner!=null)
        {
            $hall = Hall::where('id',$id)->first();
             return view ('Hallinfo', compact('owner','hall'));
        }
        else{
            
        }
    
    }

    public function MoreHallinfo ($OID,$id,$cid)
    {
        
        $owner = owner::where('id',$OID)->first();
        if($owner!=null)
        {
            $hall = Hall::where('id',$id)->first();
             return view ('MoreHallinfo', compact('owner','hall','cid'));
        }
        else{
            
        }
    
    }

    public function Booking ($id)
    {
        
        $book = hall::where('id',$id)->first();
        if($book!=null)
        {
             return view ('Booking', compact('book'));
        }
        else{
            
        }
    
    }


    // =======================  +++++++++++++++++++++++++   ============================  
    public function addclientdata (Request $request, $OID)
    {
        $book = Clientbooking::where('bookingdate', $request->date)->first();
        if($book!=null)
        {
            return view ('Error');
        }
        else
        {
            $client = new Customer();
            $total = Customer::count();
            $client->customername = $request->cname;
            $client->fathername = $request->cfname;
            $client->cnic = $request->ccnic;
            $client->phoneno = $request->cphone;
            $client->email = $request->cemail;
            $client->password = $request->cpassword;
            $client->Save();

            $clientbooking = new Clientbooking();
            $clientbooking->cid = $total+1;
            $clientbooking->OID = $OID;
            $clientbooking->hallname = $request->hname;
            $clientbooking->halladdress = $request->haddress;
            $clientbooking->halltype = $request->htype;
            $clientbooking->hallcapacity = $request->hcapacity;
            $clientbooking->hallparking = $request->hparking;
            $clientbooking->dish1 = $request->dish1;
            $clientbooking->dish2 = $request->dish2;
            $clientbooking->dish3 = $request->dish3;
            $clientbooking->dish4 = $request->dish4;
            $clientbooking->dish5 = $request->dish5;
            $clientbooking->dish6 = $request->dish6;
            $clientbooking->amount = $request->FBP;;
            $clientbooking->status = '0';
            $clientbooking->booking = '0';
            $clientbooking->rating = '0';
            $clientbooking->bookingdate = $request->date;;
            $clientbooking->rating = 'n/a';
            $clientbooking->feedback = 'n/a';
            $clientbooking->save();
            return view('login');
        }
          
    }
    
    public function easypaisa (Request $request, $cbid)
    {
        // $date = Carbon::now(); 
        // $easypaisa = "https://api.telenor.com.pk/transferMA/v1.1/mm/transactions";  // here is the api addresss
        // $client = new Client();
        // $res = $client->post($easypaisa, [          //here am passing api parameter
        //     'json' => [
        //         'amount' =>$request->amount,
        //         'currency'=> 'PKR',
        //         'type' => 'transfer',    // 
        //         'subType' => 'MA',
        //         'requestDate' => date('Y-m-d H:i:s'),  // this is parameter what user enter
        //         'debitParty' =>  [['key'=> "msisdn", 'value'=>$request->mobileno ,]],
        //         'creditParty' => [['key'=> "msisdn", 'value'=> "03125628654",]],
        //         'senderKyc' => [['Name'=>$request->username,]],
        //         'recipientKyc' => [['Name'=> "shameer",]],
        //         ]]);

        // $data_body = $res->getBody();
        $payement = Clientbooking::where('cbid', $cbid)->update(array('Status'=>'1'));
        echo '<script type="text/javascript">', 'history.go(-1);', '</script>';
    
    }        

    public function back(){
        echo '<script type="text/javascript">'
               , 'history.go(-2);'
               ,'window = window.location.reload();'
			   , '</script>';
    }
    public function accept($cbid){
        $accept = Clientbooking::where('cbid', $cbid)->update(array('booking'=>'1'));
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
    }
    public function reject($cbid){
        $reject = Clientbooking::where('cbid', $cbid)->update(array('booking'=>'2'));
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
    }

    public function clientprofile ($cid,$cbid)
    {
        
        $cp = customer::where('cid',$cid)->first();
        if($cp!=null)
        {
            $cb = Clientbooking::where('cbid',$cbid)->first();
            return view ('clientprofile', compact('cp','cb'));
         
        }
        else
        {
            echo "Invalid Username";
        }
    
    }
    public function morebookinglist ($cid)
    {
        
        $hall = Hall::all();
        if($hall!=null)
        {
            
            return view ('morebooking', compact('hall','cid'));
         
        }
        else
        {
            echo "Not Found";
        }
    
    }

    public function MoreBookinghall ($id,$cid)
    {
        
        $book = hall::where('id',$id)->first();
        if($book!=null)
        {
             return view ('hallbooking', compact('book', 'cid'));
        }
        else{
            
        }
    
    }

    public function moreaddclientdata (Request $request, $OID, $cid)
    {
        $book = Clientbooking::where('bookingdate', $request->date)->first();
        if($book!=null)
        {
            return view ('Error');
        }
        else
        {
            $clientbooking = new Clientbooking();
            $clientbooking->cid = $cid;
            $clientbooking->OID = $OID;
            $clientbooking->hallname = $request->hname;
            $clientbooking->halladdress = $request->haddress;
            $clientbooking->halltype = $request->htype;
            $clientbooking->hallcapacity = $request->hcapacity;
            $clientbooking->hallparking = $request->hparking;
            $clientbooking->dish1 = $request->dish1;
            $clientbooking->dish2 = $request->dish2;
            $clientbooking->dish3 = $request->dish3;
            $clientbooking->dish4 = $request->dish4;
            $clientbooking->dish5 = $request->dish5;
            $clientbooking->dish6 = $request->dish6;
            $clientbooking->amount = $request->FBP;;
            $clientbooking->status = '0';
            $clientbooking->booking = '0';
            $clientbooking->bookingdate = $request->date;;
            $clientbooking->rating = 'n/a';
            $clientbooking->feedback = 'n/a';
            $clientbooking->save();
            echo '<script type="text/javascript">', 'history.go(-4);', '</script>'; 
        }

            
    }

    public function updateonwer(Request $req, $id)
    {
        $upt = new owner();
        $upt = owner::where('id',$id)->first();
        if($upt!=null)
        {
             $upt->ownername = $req->oname;
             $upt->fathername = $req->fname;
             $upt->cnic = $req->ocnic;
             $upt->phone = $req->ophone;
             $upt->email = $req->oemail;
             $upt->password = $req->opassword;
             $upt->save();
             echo '<script type="text/javascript">', 'history.go(-1);', '</script>'; 
        }
        else
        {
            echo "Error";
        }

    }

    public function delbooking ($cbid)
    {
        
        $book = Clientbooking::where('cbid',$cbid);
        $book->delete();
        echo '<script type="text/javascript">', 'history.go(-1);', '</script>'; 
    
    }

    public function rating(Request $req, $cbid){
        $rating = Clientbooking::where('cbid', $cbid)->update(array('rating'=>$req->star, 'feedback'=>$req->feedback ));
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
        
    }

    
}
