<?php

namespace App\Http\Controllers;

use Besofty\Web\Attendance\Model\User;
use Illuminate\Http\Request;

class PublicAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->userValidation(
            $request->all(),
            [
                'first_name' => 'required|max:30',
                'last_name' => 'required|max:30',
                'email_address' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|min:6|same:password'
            ]
        );

        if ($validation->fails()) {

            \Session::flash('error', 'Sorry, Something went wrong');
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors(
                    $validation->messages()
                );
        }

        $user = new User();
        $isCreated = $user->createUser($request);
        if ($isCreated) {
            \Session::flash('success', 'User has been created successfully');

            return redirect('/admin/users/' . $isCreated->uuid->__toString());
        } else {
            \Session::flash('warning', 'Sorry, No changes found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param array $data
     * @param array $rules
     * @return \Illuminate\Validation\Validator
     */
    private function userValidation(array $data, array $rules)
    {
        $messages = [
            'first_name.required' => 'First name is required',
            'first_name.max' => 'First name cannot be more than 30 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name cannot be more than 30 characters',
            'email_address.required' => 'Email is required',
            'email_address.email' => 'Invalid email adderss',
            'email_address.unique' => 'This email address already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'password_confirmation.required' => 'Confirm password is required',
            'password_confirmation.same' => 'Confirm password and password does not match',
            'password_confirmation.min' => 'Password must be at least 6 characters',
        ];

        return \Validator::make($data, $rules, $messages);
    }
}
