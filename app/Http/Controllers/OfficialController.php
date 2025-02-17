<?php

namespace App\Http\Controllers;

use App\Action\Officials\FetchAllOfficials;
use App\Action\Officials\ShowOfficialById;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(FetchAllOfficials $action)
    {
        $officials = $action->execute();
        $message = $officials ? false : true;
        return view('admin.official', compact('officials', 'message'));
    }
    public function show($id, ShowOfficialById $action)
    {
        $official = $action->execute($id);
        $message  = $official ? false : true;
        return view('admin.single_officlal', compact('message', 'official'));
    }
    public function store() {}
    public function update($id) {}
    public function destroy($id) {}
}
