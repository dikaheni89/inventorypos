<?php

namespace App\Http\Requests;

use App\Models\CouponCode;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCouponCodeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = CouponCode::$rules;
        $rules['code'] = 'required|unique:coupon_codes,code,' . $this->route('coupon_code')->id;
        return $rules;
    }
}
