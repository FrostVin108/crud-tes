<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Termwind\Components\Dd;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index():view
    {
        $account = Account::get(); 
    
        return view('index', compact('account'));
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $account = Account::findOrFail($id);

        //delete post
        $account->delete();

        //redirect to index
        return redirect()->route('account.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function create(): View
     {
        return view('create');
     }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'user_name'     => 'required',
            'user_email'     => 'required',
            'user_password'   => 'required',
        ]);
        
        Account::create([
            'user_name'     => $request->user_name,
            'user_email'     => $request->user_email,
            'user_password'   => $request->user_password,
        ]);
        
        return redirect()->route('account.index');
    }

    public function edit(string $id): View
    {
        //get post by ID
        $account = Account::findOrFail($id);

        //render view with post
        return view('edit', compact('account'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'user_name'     => 'required',
            'user_email'     => 'required',
            'user_password'   => 'required',
        ]);

        //get post by ID
        $account = Account::findOrFail($id);

        $account->update([
            'user_name'     => $request->user_name,
            'user_email,'   => $request->user_email,
            'user_password'   => $request->user_password,
        ]);
         //redirect to index
         return redirect()->route('account.index')->with(['success' => 'Data Berhasil Diubah!']);
        }

        public function view(string $id): View
        {
            //get post by ID
            $account = Account::findOrFail($id);
    
            //render view with post
            return view('show', compact('account'));
        }
}
