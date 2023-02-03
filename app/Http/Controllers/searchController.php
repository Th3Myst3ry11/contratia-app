<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){

        if($request->ajax()){
    
            $data=ProfileModel::where('id','like','%'.$request->search.'%')
            ->orwhere('firstname','like','%'.$request->search.'%')
            ->orwhere('lastname','like','%'.$request->search.'%')->get();
    
    
            $output='';
        if(count($data)>0){
    
             $output ='
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                </tr>
                </thead>
                <tbody>';
    
                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row" style="color:white;">'.$row->id.'</th>
                        <td><a href="/show/'.$row->id.'" style="color:white;">'.$row->firstname.'</td>
                        <td style="color:white;">'.$row->lastname.'</td>
                        </tr>
                        ';
                    }
    
    
    
             $output .= '
                 </tbody>
                </table>';
    
    
    
        }
        else{
    
            $output .='No results';
    
        }

        return $output;
    
        }
    
}
}
