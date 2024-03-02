<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery{
    protected $safeParms = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    public function transform(Request $request){
        $eloQuery = [];
        // dd($request); ['type' => ['eq' => 'I]]
        foreach($this->safeParms as $parm => $operators) {
            $query = $request->query($parm); // $parm = 'type'
            if (!isset($query)){
                continue;
            }
            // echo $query; // ['eq' => 'I']
            $column = $this->columnMap[$parm] ?? $parm;
            // echo $column; // type
            foreach($operators as $operator){
                // echo $operator; // eq
                if(isset($query[$operator])) {
                    // echo $query[$operator]; I
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}