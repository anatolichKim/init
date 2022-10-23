<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\AdminUserEditRequest;
use App\Models\Users\User;
use App\Models\Users\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::with('roles')
            ->orderBy('id')
            ->paginate(10);
        $title = __('admin/user/data/core.index');
        return view('admin.user.data.index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = UserRole::get(['id', 'title']);
        $userLastId = User::orderBy('id', 'desc')->first()->id;
        $title = __('admin/blog/courses/core.create');
        return view('admin.user.data.create', compact('roles', 'userLastId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminUserCreateRequest $request)
    {
       $data = $request->validated();
       $data['password'] = Hash::make($data['password']);

        if(!isset($data['remember_me'])) {
            $data['remember_token'] = null;
        } else {
            $data['remember_token'] = Str::random(64);
            $data = Arr::except($data, ['remember_me']);
        }

        if(!isset($data['email_verification'])) {
            $data['email_verified_at'] = null;
        } else {
            $data['email_verified_at'] = Carbon::now();
            $data = Arr::except($data, ['email_verification']);
        }

        $item = new User($data);
        $result = $item->fill($data)->save();

        if ($result) {
            return redirect()->route('admin.user.data.index')
                ->with(['success' => __('validation.msg.success_add')]);
        } else {
            return back()->withErrors(['error'=>__('validation.msg.error')])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::with('roles')
            ->find($id);
        $title = __('admin/user/data/core.show');
        return view('admin.user.data.show', compact('title', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = UserRole::get(['id', 'title']);
        $title = __('admin/user/data/core.edit');
        return view('admin.user.data.edit', compact('title', 'user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminUserEditRequest $request, $id)
    {

        $data = $request -> validated();
        $user = User::find($id);

        if(!isset($data['remember_me'])) {
            $data['remember_token'] = null;
        } else {
            $data['remember_token'] = Str::random(64);
            $data = Arr::except($data, ['remember_me']);
        }

        if(!isset($data['email_verification'])) {
            $data['email_verified_at'] = null;
        } else {
            $data['email_verified_at'] = $user['email_verified_at'];
            $data = Arr::except($data, ['email_verification']);
        }

        $result = $user->fill($data)->save();

        if($result) {
            return redirect()
                ->route('admin.user.data.index')
                ->with(['success' => __('validation.msg.success_edit')]);
        } else {
            return back()
                ->withErrors(['error'=>__('validation.msg.error')])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $result = $user->delete();

        if($result) {
            return redirect()
                ->route('admin.user.data.index')
                ->with(['success'=>__('validation.msg.success_delete')]);
        } else {
            return redirect()
                ->route('admin.user.data.index')
                ->with(['error'=>__('validation.msg.error')]);
        }
    }
}
