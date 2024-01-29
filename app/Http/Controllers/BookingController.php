<?php

namespace App\Http\Controllers;



use App\Models\Eventbooking;
use Illuminate\Http\Request;

class BookingController extends Controller
// {
//     //
//     function getData(Request $req)
//     {
//         $req->validate(
//             [
//                 'fname'=>'required'
//             ]
//         );
//         return $req->input();
//     }
// }

{


    public function home() {
        return view('home');
    }
    public function index() {
        return view('home');
    }

    public function bookingdata(Request $request) {
        $request -> validate(
            [
                "fname" => 'required',
                "phone" => 'required',
                "guests" => 'required',
                "datefrom" => 'required',
                "lname" => 'required',
                "email" => 'required',
                "dateto" => 'required',
                "type" => 'required'
            ]
        );
        $user = new Eventbooking;

        $user->fname = $request->fname;
        $user->phone = $request->phone;
        $user->datefrom = $request->datefrom;
        $user->guests = $request->guests;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->dateto = $request->dateto;
        $user->type = $request->type;
        
        $vr = $user->save();
// exit();
        if($vr){
            return view('data');
        }
        echo "<pre>";
            print_r($request -> all());
            $fname = $request -> input("fname");
            $phone = $request -> input("phone");
            $datefrom = $request -> input("datefrom");
            $guests = $request -> input("guests");
            $lname = $request -> input("lname");
            $email = $request -> input("email");
            $dateto = $request -> input("dateto");
            $type = $request -> input("type");

            echo "<br>";

            echo "First name: " . $fname . "<br>";
            echo "Phone number: " . $phone . "<br>";
            echo "Event's Date From: " . $datefrom . "<br>";
            echo "No.of guests: " . $guests . "<br>";
            echo "Last name: " . $lname . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Event's Date To: " . $dateto . "<br>";
            echo "Event Type: " . $type . "<br>";

        echo "</pre>";

    }

    public function bookingshow(){
        $show = Eventbooking::all();
        $data = compact('show');
        return view('booking')->with('data');
    }
}
