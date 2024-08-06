<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    const PATH_VIEW = 'admin.users.';
    const PATH_UPLOAD = 'users';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'avata' => 'file',
            'type' => 'required',
        ]);


        $dataUser = $request->except('avata');



        try {
            if ($request->hasFile('avata')) {
                $dataUser['avata'] = Storage::put(self::PATH_UPLOAD, $request->file('avata'));
            }

            User::create($dataUser);
            return redirect()
                ->route('admin.users.index')
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            \DB::rollBack();
            if (Storage::exists($dataUser['avata'])) {
                Storage::delete($dataUser['avata']);
            }
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'avata' => 'file',
            'type' => 'required',
        ]);

        $dataUser = $request->except('avata');
        if ($request->password == null) {
            $dataUser = $request->except(['avata', 'password']);
        }



        try {
            if ($request->hasFile('avata')) {
                $dataUser['avata'] = Storage::put(self::PATH_UPLOAD, $request->file('avata'));
                if (!empty($user->avata) && Storage::exists($user->avata)) {
                    Storage::delete($user->avata);
                }
            }

            $user->update($dataUser);

            return back()
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            \DB::rollBack();
            if (Storage::exists($dataUser['avata'])) {
                Storage::delete($dataUser['avata']);
            }
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()
            ->with('success', 'Thao tác thành công!');
    }
}
