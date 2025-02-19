<?php

namespace App\Http\Controllers;

use App\Action\Officials\CreateOfficial;
use App\Action\Officials\DeleteOfficial;
use App\Action\Officials\FetchAllOfficials;
use App\Action\Officials\ShowOfficialById;
use App\Action\Officials\UpdateOfficial;
use App\Http\Requests\CreateOfficialRequest;
use App\Http\Requests\UpdateOfficialRequest;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(FetchAllOfficials $action)
    {
        $officials = $action->execute();
        $message = $officials ? false : true;
        return view('admin.officials.index', compact('officials', 'message'));
    }
    // public function show($id, ShowOfficialById $action)
    // {
    //     $official = $action->execute($id);
    //     $message  = $official ? false : true;
    //     return view('admin.officials.show', compact('message', 'official'));
    // }

    public function create()
    {
        return view('admin.officials.create');
    }
    public function store(CreateOfficialRequest $request, CreateOfficial $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('officials.index')->with('success', 'Official created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create official!');
    }

    public function edit($id, ShowOfficialById $action)
    {
        $official = $action->execute($id);
        return view('admin.officials.edit', compact('official'));
    }
    public function update($id, UpdateOfficialRequest $request, UpdateOfficial $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('officials.index')->with('success', 'Official updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update official!');
    }

    public function destroy($id, DeleteOfficial $action)
    {
        if (!$action->execute($id)) {
            return redirect()->back()->with('error', 'Failed to delete official!');
        }
        return redirect()->route('officials.index')->with('success', 'Official deleted successfully!');
    }
}
