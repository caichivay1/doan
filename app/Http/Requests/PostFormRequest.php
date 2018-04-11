<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
        return [
            'title' =>'required',
            'phone' =>'regex:/(0)[0-9]{6}/|max:11|required',
            'type' => 'required',
            'land_type' => 'required',
            'district' => 'required',
            'ward1' => 'required',
            'province1' => 'required',
            'address' =>'required',
            'price' =>'numeric|required',
            'description' =>'required',
            'acr' => 'required|numeric',

        ];
    }
     public function messages(){
        return [
            'title.required' => "Vui lòng điền tiêu đề",
            'type.required' => "Vui lòng điền loại giao dịch",
            'land_type.required' => "Vui lòng điền loại bất động sản",
            'province1.required' => "Vui lòng điền Tỉnh",
            'district.required' => "Vui lòng điền Quận/Huyện",
            'ward1.required' => "Vui lòng điền Phường/Xã",
            'acr.required' => "Vui lòng điền diện tích",
            'acr.numeric' => "Vui lòng điền đúng định dạng",
            'description.required' => "Vui lòng điền mô tả",
            'address.required' => "Vui lòng điền địa chỉ",
            'phone.regex' => "Vui lòng điền đúng định dạng",
            'phone.max' => "Vui lòng điền số điên thoại nhở hơn 11 số" ,
            'phone.required' => "Vui lòng điền số điên thoại" ,
            'price.numeric' => "Vui lòng nhập đúng định dạng",
            'price.required' => "Vui lòng nhập giá",
            ];
    }
}
