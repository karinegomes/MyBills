<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PeriodRequest extends FormRequest
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
        $month = $this->month;
        $year = $this->year;
        $period = $this->period;

        $ruleMonth = Rule::unique('periods')->where(function ($query) use ($year) {
            return $query->where('year', $year);
        });

        $ruleYear = Rule::unique('periods')->where(function ($query) use ($month) {
            return $query->where('month', $month);
        });

        if ($period) {
            $ruleMonth = $ruleMonth->ignore($period->id);
            $ruleYear = $ruleYear->ignore($period->id);
        }

        return [
            'month' => ['required', 'integer', $ruleMonth],
            'year'  => ['required', 'integer', $ruleYear],
        ];
    }
}
