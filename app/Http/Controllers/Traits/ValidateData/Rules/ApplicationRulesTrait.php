<?php 

namespace App\Http\Controllers\Traits\ValidateData\Rules;

// use Validator;
use Illuminate\Validation\Rule;

trait ApplicationRulesTrait{

    protected function GetApplicationRule_id(){
        return [ 'required', 'exists:application,id' ];
    }

    protected function GetApplicationRule_name(){
        return [ 'required', 'string', 'min:1', 'max:255' ];
    }

    protected function GetApplicationRule_categoryId(){
        return [ 'nullable', 'exists:category,id' ];
    }

    protected function GetApplicationRule_num(){
        return [ 'nullable', 'numeric', 'min:0', 'max:1000000' ];
    }

    protected function GetApplicationRule_managerNotes(){
        return [ 'nullable', 'string' ];
    }


    protected function GetSubApplicationRule_id(){
        return [ 'required', 'exists:sub_application,id' ];
    }

    protected function GetSubApplicationRule_air_notes(){
        return [ 'nullable', 'string', 'max:255' ];
    }

    protected function GetSubApplicationRule_duration_sec(){
        return [ 'required', 'numeric', 'min:0', 'max:86400' ];
    }

    protected function GetSubApplicationRule_name(){
        return [ 'required', 'string', 'max:255' ];
    }

    protected function GetSubApplicationRule_period_from(){
        return [ 'required', 'string' ];
    }

    protected function GetSubApplicationRule_period_to(){
        return [ 'required', 'string' ];
    }

    protected function GetSubApplicationRule_serial_num( $type ){
        if( $type === 'series' ){
            return [ 'required', 'numeric', 'min:1', 'max:1000000' ];
        }else if( $type === 'release' ){
            return [ 'nullable', 'numeric', 'min:1', 'max:1000000' ];
        };
    }

    protected function GetSubApplicationRule_type(){
        return [ 'required', 'string', Rule::in([ 'series', 'release' ]) ];
    }

}


?>
