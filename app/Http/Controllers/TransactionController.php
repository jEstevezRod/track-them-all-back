<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $transactions = Transaction::query()
            ->select([
                DB::raw("EXTRACT(year from issued_at) as year"),
                DB::raw("EXTRACT(month from issued_at) as month"),
                "*"
            ])
            ->when($request->account_id, function ($query, $accountId) {
                $query->where('account_id', $accountId);
            })
            ->get()
            ->groupBy(['year', 'month'])
            ->sortKeysDesc()
            ->map(function ($months) {
                return $months->sortKeysDesc();
            });

        $transactions->each(function (Collection $monthGroup, $year) use ($transactions) {
            $monthGroup->each(function (Collection $transactionsGroup, $month) use ($year, $transactions) {
                $monthName = date("F", mktime(0, 0, 0, $month, 1));
                $transactions[$year][$monthName] = $transactionsGroup->sortBy('issued_at')->values();
                unset($transactions[$year][$month]);
                $transactionsGroup->each(function (Transaction $transaction) {
                    $transaction->load(['category', 'account']);
                });
            });
        });


        return response()->json($transactions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(
            Transaction::create($request->all())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Transaction $transaction
     * @return Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
