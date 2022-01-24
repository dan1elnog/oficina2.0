<?php

namespace App\Http\Controllers;

use App\Models\BudgetModel;
use Illuminate\Http\Request;
use App\Http\Requests\BudgetRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


class BudgetController extends Controller
{

    protected $objBudget; 
    public function __construct(){
        $this->objBudget = new BudgetModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $budgets =$this->objBudget->paginate(5)->sortBydesc('created_at');
        return view('index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budgets =$this->objBudget->all();
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BudgetRequest $request)
    {
        $store =$this->objBudget->create([
            'seller'      => $request->seller,
            'client'      => $request->client,
            'description' => $request->description,
            'value'       => $request->value
        ]);
        if($store){
            return redirect('budget');  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetModel  $budgetModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = $this->objBudget->find($id);
        return view('show', compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetModel  $budgetModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = $this->objBudget->find($id);
        return view('edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BudgetModel  $budgetModel
     * @return \Illuminate\Http\Response
     */
    public function update(BudgetRequest $request, $id)
    {
        $update = $this->objBudget->where(['id'=>$id])->update([
            'seller'      => $request->seller,
            'client'      => $request->client,
            'description' => $request->description,
            'value'       => $request->value
        ]);
        if($update){
            return redirect('budget');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetModel  $budgetModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budget =$this->objBudget->FindOrFail($id)->delete();
        return view('delete');
    }


}
