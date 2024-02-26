<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateValidationRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class UserController extends Controller
{
    public function importExport()
    {
        return view('import-export');
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function import(Request $request)
    {
        Excel::Import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function export(Request $request)
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
