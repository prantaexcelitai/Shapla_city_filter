<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $details= Building::all();

        // dd($details);
      return  view('Building_details.index',compact('details'));
    }
    public function filter(Request $request)
    {
        // dd($request->all());
        $c=" ";
        $search= Building::where('Customer_name','LIKE','%'.$request->sea.'%')->get();
// dd($search);
        foreach($search as $item)
        {

            $c.=
            '<tr>
            <td> '.$item->Customer_country.' </td>
            <td> '.$item->Customer_name.' </td>
            <td> '.$item->Customers_id.' </td>
            <td> '.$item->Flate_no.' </td>
            <td> '.$item->Flate_no.' </td>
            <td> '.$item->Floor_no.' </td>
            <td> '.$item->Flate_direction.' </td>
            <td> '.$item->Size.' </td>
            <td> '.$item->Sell_status.' </td>

            </tr>';
        }
        //  dd($c);
        return response($c);
    }
    public function attendance()
    {

        $as = Building::all();
        return view('attendance.index',compact('as'));

    }

}
