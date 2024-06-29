<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckMethod;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class DefaultController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        // return [
        //     new Middleware(CheckMethod::class, except: ['increment']),
        // ];
        return [
            new Middleware(CheckMethod::class),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $number)
    {
        return $this->increment($number);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function increment(string $number)
    {
        return $number += 1;
    }
}
