<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Order;
use App\Models\Seance;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Abonnement;
use App\Models\UserSeance;
use Illuminate\Http\Request;
use App\Models\UsersAbonnement;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request){
        $payment = Payment::create($request->all());
       
        $abonnement = Abonnement::find($request->abonnement_id);
        
        $userAbonnement = new UsersAbonnement();
        if($abonnement->type == "AN"){
            $monthsNumber = "+12 months";

        } else {
            $monthsNumber = "+".substr($abonnement->type, 0, 1)." months";
        }
        $userAbonnement->startDate = date('Y-m-d');
        $userAbonnement->endDate = date('Y-m-d', strtotime($monthsNumber, strtotime(date('Y-m-d'))));
        $userAbonnement->user_id = Auth::id();
        $userAbonnement->abonnement_id = $abonnement->id;

        $userAbonnement->save();

        return redirect()->route('abonnements.index')->with('success',"Vous avez participé a l'abonnement $abonnement->label avec succée");

    }
}
