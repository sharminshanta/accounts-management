<?php

namespace App\Http\Controllers;

use Besofty\Web\Accounts\Models\UserModel;
use Besofty\Web\Accounts\Models\UsersRoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $postdata = $request->all();

        //Setting the validation rules
        $validationRules = [
            'first_name' => 'required|max:15',
            'last_name' => 'required|max:15',
            'email_address' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password'
        ];

        //Checking the validation rules
        $validation = $this->userValidation($postdata, $validationRules);

        /**
         * If the validation rules fail then validation message will stored in log file
         * then a message will stored in session
         * and redirect to same page with errors message
         */
        if ($validation->fails()) {
            Log::error('From Validation Error Occurs', ['validation-error' => $validation->messages()]);
            \Session::flash('error', 'Sorry, Something went wrong');
            return redirect()->back()
                ->withInput($postdata)
                ->withErrors(
                    $validation->messages()
                );
        }

        try {
            $userModel = new UserModel();
            $isCreated = $userModel->createUser($request);
            if ($isCreated == true) {
                Log::error('UserModel has been created successfully', ['postdata' => $postdata]);
                \Session::flash('success', 'UserModel has been created successfully');

                return redirect('/');
            } else {
                \Session::flash('warning', 'Sorry, No changes found');
            }
        } catch (\Exception $exception) {
            Log::error('ERROR', [$exception->getTraceAsString()]);
            Log::debug('DEBUG', [$exception->getTraceAsString()]);
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
            'first_name.max' => 'First name cannot be more than 15 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name cannot be more than 15 characters',
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
