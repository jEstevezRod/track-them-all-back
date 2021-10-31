<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(
            Account::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return response()->json(Account::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return JsonResponse
     */
    public function show(Account $account)
    {
        return response()->json($account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return JsonResponse
     */
    public function update(Request $request, Account $account)
    {
        return response()->json(
            $account->update($request->all())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return JsonResponse
     */
    public function destroy(Account $account)
    {
        return response()->json($account->delete());
    }
}
