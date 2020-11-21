<?php

namespace App\Http\Controllers;

use App\Events\videoviewer;
use App\Http\Requests\OfferRequest;
use resources\lang;
use App\Models\Offer;
use App\Models\video;
use App\Traits\offerTrait;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class CrudController extends Controller
{
    use offerTrait;
    public function __construct()
    {
    }

    // tow ways:
    //First by Create Requsest (php artisan make:request OfferRequest) ,then all rules and messages are placed in it
    public function Createget()
    {

        return view('Offers/create');
    }


    public function Createpost(OfferRequest $req)
    {
        $file_name = $this->saveitem($req->image, 'images/offers');

        Offer::create([
            'name' => $req->name,
            'price' => $req->price,
            'details' => $req->details,
            'image' => $file_name,

        ]);


        return redirect()->back()->with(['succ' => "تم اضافة العرض بنجاح"]);
    }


    public function getAllOffers()
    {

        $offers = offer::select('id', 'name', 'price', 'details', 'image')->get(); //return full tables means group of array
        return view("Offers/index", compact('offers'));
    }

    //
    public function editOffer($offer_id)
    {


        $offer = Offer::find($offer_id);
        if (!$offer) {
            return redirect()->back();
        }
        $offer =  offer::select('id', 'name', 'price', 'details',"image")->find($offer_id);

        return view("Offers/edit", compact('offer'));
    }

    public function updateOffer(OfferRequest $req, $offer_id)
    {

        $offer = Offer::find($offer_id);
        if (!$offer) {
            return redirect()->back();
        }
        $file_name = $this->saveitem($req->image, 'images/offers');
        $offer->update($req->all()); // all update all
        $offer->update(["image" =>$file_name]);
        return redirect()->back()->with(['succ' => __('Messages.succ')]);
        // $offer-> update(["name"=>$req->name]);//only name upgrade

        //save phpto in folder
        // $file=$req->image ->getclientOriginalExtension();
        // $file_name=time().$file;
        // $path='images/offers';
        // $req ->image->move($path,$file_name);
        // return 'okay';


    }
    public function deleteOffer($offer_id)
    {
        //offer::where('table feild' ,'oprator like = or > or <',$offer_id)
        $offer = Offer::find($offer_id);
        if (!$offer) {
            return redirect()->back()->with(['error'=>__('Messages.error')]);
        }
        $offer->delete();
        return redirect()->route('index')->with(['succ'=>__('Messages.succ')]);
    }


    public function youtube()
    {

        $video = video::first();

        event(new videoviewer($video));
        return view('video', compact('video'));
    }




    //second we make all validation and rules herem:





    // public function getOffers()
    // {

    //     // return Offer::select('name')->get();
    //     return Offer::get();
    // }
    // public function store()
    // {
    //     $create =
    //         [
    //             'name' => 'khalidTaher',
    //             'price' => '1000',
    //             'details' => 'lorem'
    //         ];

    //     return Offer::create($create);
    // }

    // public function create(OfferRequest $req)
    // {


    //     //check if method is post or get

    //     if ($req->isMethod('get')) {
    //         // if method is get :
    //         return view('Offers/create');
    //     }
    //     if ($req->isMethod('post')) {
    //         // if method is post :
    //         //validate data before insert to DB

    //        // $validator = FacadesValidator::make($req->all(), $this->getRules(), $this->getMessages());

    //         // if ($validator->fails()) {
    //         //     //return dd($validator->errors());
    //         //     return redirect()->back()->withErrors($validator)->withInput($req->all());
    //         //     //or
    //         //     //return view('Offers.create')->withErrors($validator)->withInput($req->all());

    //         // }
    //         // else {
    //              //insert to database
    //             Offer::create([
    //                 'name' => $req->name,
    //                 'price' => $req->price,
    //                 'details' => $req->details

    //             ]);

    //             return redirect()->back()->with(['succ'=>"تم اضافة العرض بنجاح"]);
    //       //  }
    //     }
    // }
    // public function getRules()
    // {

    //     return  $rules = [

    //         'name' => 'required|max:100|unique:offers,name',
    //         'price' => 'required|numeric',
    //         'details' => 'required'
    //     ];
    // }
    // public function getMessages()
    // {
    //     return $messages = [
    //                            //اما نكتب تران او 2 اندر سكول وكله واحد
    //         'name.required' =>__('Messages.offerNameRequired'),
    //         'name.unique' => trans('Messages.offerNameUnique'),
    //         'price.required' => __('Messages.PriceRequired'),
    //         'price.numeric' => trans('Messages.PriceNumeric'),
    //         'details.required' => __('Messages.DetailsRequired')
    //     ];
    // }
}
