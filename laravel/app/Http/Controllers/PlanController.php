<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePlanRequest;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('admin..plans.index', ['plans' => $plans]);
    }

    public function edit(Plan $plan)
    {
        return view('admin..plans.edit', ['plan' => $plan]);
    }

    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $data = $request->validated();
        $plan->update([
            ...$data,
            'is_discounted' => $data['is_discounted'] ?? false,
        ]);
        $plans = Plan::all();

        return view('admin..plans.index', ['plans' => $plans]);
    }
}
