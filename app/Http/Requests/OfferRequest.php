<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'name' => 'required|max:100|unique:offers,name',
                'price' => 'required|numeric',
                'details' => 'required',
            ];
    }

    public function messages() //messages in FormRequest
    {
        return  [
            //اما نكتب تران او 2 اندر سكول وكله واحد
            'name.required' => __('Messages.offerNameRequired'),
            'name.unique' => trans('Messages.offerNameUnique'),
            'price.required' => __('Messages.PriceRequired'),
            'price.numeric' => trans('Messages.PriceNumeric'),
            'details.required' => __('Messages.DetailsRequired'),
        ];
    }
}
