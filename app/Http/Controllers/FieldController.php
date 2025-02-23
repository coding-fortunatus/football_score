<?php

namespace App\Http\Controllers;

use App\Action\Fields\CreateField;
use App\Action\Fields\DeleteField;
use App\Action\Fields\FetchAllField;
use App\Action\Fields\GetFieldById;
use App\Action\Fields\UpdateField;
use App\Http\Requests\CreateFieldRequest;
use App\Http\Requests\UpdateFieldRequest;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(FetchAllField $action)
    {
        $fields = $action->execute();
        $message = $fields ? false : true;
        return view('admin.fields.index', compact('fields', 'message'));
    }
    public function create()
    {
        return view('admin.fields.create');
    }
    public function store(CreateField $action, CreateFieldRequest $request)
    {
        if ($action->execute($request)) {
            return redirect()->route('fields.index')->with('success', 'Field created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create field!');
    }
    public function show($id, GetFieldById $action) {}
    public function edit($id, GetFieldById $action)
    {
        $field = $action->execute($id);
        return view('admin.fields.edit', compact('field'));
    }
    public function update($id, UpdateFieldRequest $request, UpdateField $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('fields.index')->with('success', 'Field updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update field!');
    }
    public function destroy($id, DeleteField $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('fields.index')->with('success', 'Field deleted successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete field!');
    }
}
