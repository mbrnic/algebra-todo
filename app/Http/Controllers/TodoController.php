<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // Show all records
    }

    public function create()
    {
        // Show the form to create a new record
    }

    public function store(Request $request)
    {
        // Save the new record
    }

    public function show($id)
    {
        // Show a single record
    }

    public function edit($id)
    {
        // Show the form to edit a record
    }

    public function update(Request $request, $id)
    {
        // Update the record
    }

    public function destroy($id)
    {
        // Delete the record
    }

}
