<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Traits\DataFormController;
use App\Http\Traits\SendEmail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegisterUsersController extends Controller
{
    use DataFormController;
    use SendEmail;

    public function sendVerify(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ], [
            'email.required' => 'ادخل حسابك',
            'email.email' => 'ادخل حساب صحيح',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Login failed', [$validator->errors()->first()], []);
        }
        
        $user = User::where("email", $request->email)->first();

        if ($user) {
            $pass = rand(100000, 999999);
            $user->password = Hash::make($pass);
            $user->password_exp = Carbon::now()->addDays(2);
            $user->save();
            if ($user) {
                $receiver_mail = $request->email;
                $msg_title = "🔑 " . $pass . " تفضّل رمز التحقق";
                $msg_content = 
                    '<div id=":mi" class="ii gt" jslog="20277; u014N:xr6bB; 1:WyIjdGhyZWFkLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd; 4:WyIjbXNnLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd">
                        <div id=":mh" class="a3s aiL ">
                            <div class="adM">
                            </div>
                            <div style="margin:0;padding:0">
                                <div class="adM">
                                </div>
                                <div dir="rt" style="padding:30px 10px;background-color:#dbdbdb;color:#000000;box-sizing:border-box;direction:rtl">
                                    <div class="adM">
                                    </div>
                                    <div style="width:584px;max-width:100%;background-color:#fff;margin:auto;padding:0.5rem 0.5rem 2rem;box-sizing:border-box">
                                        <div class="adM">
                                        </div>
                                        <div style="background-color:#f7f7f7;text-align:center;padding:1.2rem 1rem;margin-bottom:2rem">
                                            <div class="adM">
                                            </div><img alt="thmanyah" style="width:190px;height:86.92px;max-width:100%;object-fit: contain;" class="CToWUd" data-bit="iit" src="https://umspodcast.com/assets/img/logo-trans.png">
                                            <div>
                                            </div>
                                        </div>
                                        <div style="padding:0 2rem;">
                                            <div style="padding:1rem 1.5rem;background-color:#f7f7f7;border-radius:8px">
                                                <h1 style="font-size:20px;margin-bottom:32px">
                                                    الدخول إلى حسابك في ثمانية
                                                </h1>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px">
                                                    حيّاك الله،
                                                </p>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px;margin-bottom:32px">
                                                    أدخل الرمز لتتمكن من الدخول:
                                                </p>
                                                <p style="text-align:center;color:#000;background-color:#fdfcfa;padding:8px 16px;font-size:24px;font-style:normal;font-weight:700;line-height:36px;margin-bottom:32px;margin-top:20px">
                                                    ' . $pass .'</p>
                                                <div style="margin:0 0 32px 0">
                                                    <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px">
                                                        أو اضغط هذا الرابط:
                                                    </p>
                                                    <a href="https://umspodcast.com/login?email=' . $request->email .'&password=' . $pass .'" style="background-color:#030386;color:#fff;display:block;text-decoration:none;text-align:center;padding:10px;border-radius:8px;margin-bottom:32px;margin-top:12px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://account.thmanyah.com/__/auth/action?apiKey%3DAIzaSyAKur55wB0VWPTyW2ncDFCUcfo7cLX7Uho%26mode%3DsignIn%26oobCode%3DsF4qit8hegWsy8iZE0z-SDbcyZNuWZJRxBSpAHOmrawAAAGMfGrHaQ%26continueUrl%3Dhttps://thmanyah.com/valid/url/kotbekareem74@gmail.com?%26lang%3Den&amp;source=gmail&amp;ust=1702980833840000&amp;usg=AOvVaw0DW20Taf1Cv7F62gTO37NY" jslog="32272; 1:WyIjdGhyZWFkLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd; 4:WyIjbXNnLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd">
                                                        دخّلني الموقع
                                                        <img src="https://ci3.googleusercontent.com/meips/ADKq_NYhfmh4QajXsXlOLKdgwjW1QYKHl60ON5E22R8AkmL1asX99hYJl68-N52i_Ec5CGRBNfqRvVB1izHs42AUFM321j98Mcg7ucNuoQIs93OvHeU=s0-d-e1-ft#https://cdn.webapp.kaitdev.com/public/assets/icons/email.png" alt="Link" style="width:17px;height:16px;vertical-align:middle" class="CToWUd" data-bit="iit">
                                                    </a>
                                                </div>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin-bottom:40px">
                                                    تنتهي صلاحية الرمز بعد 48 ساعة.
                                                </p>
                                                <p style="font-size:14px;font-style:normal;font-weight:400;line-height:27px;color:#4d4d4d">
                                                    تجاهل الرسالة فضلًا إن لم يكن أنت من يحاول الدخول.
                                                </p>
                                            </div>
                                            <div style="padding:1rem;background-color:#f7f7f7;border-radius:8px;margin-top:20px;text-align:center">
                                                <img alt="thmanyah" style="width:100px;height:76.92px;max-width:100%;object-fit: contain;" class="CToWUd" data-bit="iit" src="https://umspodcast.com/assets/img/logo-trans.png">
                                                <p style="color:#b2b2b2;font-size:0.9rem;margin:0.1rem">جميع الحقوق محفوظة United Podcast 2023 ©
                                                </p>
                                                <div class="yj6qo"></div>
                                                <div class="adL">
                                                </div>
                                            </div>
                                            <div class="adL">
                                            </div>
                                        </div>
                                        <div class="adL">
                                        </div>
                                    </div>
                                    <div class="adL">
                                    </div>
                                </div>
                                <div class="adL">
    
    
                                </div>
                            </div>
                        </div>
                    </div>';
                $this->sendEmail($receiver_mail, $msg_title, $msg_content);
            }
        } else {
            $pass = rand(100000, 999999);
            $createUser = User::create([
                "email" => $request->email,
                "password" => Hash::make($pass),
                "password_exp" => Carbon::now()->addDays(2),
            ]);
            if ($createUser) {
                $receiver_mail = $request->email;
                $msg_title = "🔑 " . $pass . " تفضّل رمز التحقق";
                $msg_content = 
                    '<div id=":mi" class="ii gt" jslog="20277; u014N:xr6bB; 1:WyIjdGhyZWFkLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd; 4:WyIjbXNnLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd">
                        <div id=":mh" class="a3s aiL ">
                            <div class="adM">
                            </div>
                            <div style="margin:0;padding:0">
                                <div class="adM">
                                </div>
                                <div dir="rt" style="padding:30px 10px;background-color:#dbdbdb;color:#000000;box-sizing:border-box;direction:rtl">
                                    <div class="adM">
                                    </div>
                                    <div style="width:584px;max-width:100%;background-color:#fff;margin:auto;padding:0.5rem 0.5rem 2rem;box-sizing:border-box">
                                        <div class="adM">
                                        </div>
                                        <div style="background-color:#f7f7f7;text-align:center;padding:1.2rem 1rem;margin-bottom:2rem">
                                            <div class="adM">
                                            </div><img alt="thmanyah" style="width:190px;height:86.92px;max-width:100%;object-fit: contain;" class="CToWUd" data-bit="iit" src="https://umspodcast.com/assets/img/logo-trans.png">
                                            <div>
                                            </div>
                                        </div>
                                        <div style="padding:0 2rem;">
                                            <div style="padding:1rem 1.5rem;background-color:#f7f7f7;border-radius:8px">
                                                <h1 style="font-size:20px;margin-bottom:32px">
                                                    الدخول إلى حسابك في ثمانية
                                                </h1>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px">
                                                    حيّاك الله،
                                                </p>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px;margin-bottom:32px">
                                                    أدخل الرمز لتتمكن من الدخول:
                                                </p>
                                                <p style="text-align:center;color:#000;background-color:#fdfcfa;padding:8px 16px;font-size:24px;font-style:normal;font-weight:700;line-height:36px;margin-bottom:32px;margin-top:20px">
                                                    ' . $pass .'</p>
                                                <div style="margin:0 0 32px 0">
                                                    <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin:0px">
                                                        أو اضغط هذا الرابط:
                                                    </p>
                                                    <a href="https://umspodcast.com/login?email=' . $request->email .'&password=' . $pass .'" style="background-color:#030386;color:#fff;display:block;text-decoration:none;text-align:center;padding:10px;border-radius:8px;margin-bottom:32px;margin-top:12px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://account.thmanyah.com/__/auth/action?apiKey%3DAIzaSyAKur55wB0VWPTyW2ncDFCUcfo7cLX7Uho%26mode%3DsignIn%26oobCode%3DsF4qit8hegWsy8iZE0z-SDbcyZNuWZJRxBSpAHOmrawAAAGMfGrHaQ%26continueUrl%3Dhttps://thmanyah.com/valid/url/kotbekareem74@gmail.com?%26lang%3Den&amp;source=gmail&amp;ust=1702980833840000&amp;usg=AOvVaw0DW20Taf1Cv7F62gTO37NY" jslog="32272; 1:WyIjdGhyZWFkLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd; 4:WyIjbXNnLWY6MTc4NTYxNDIyMjgzODcxNjk5OSJd">
                                                        دخّلني الموقع
                                                        <img src="https://ci3.googleusercontent.com/meips/ADKq_NYhfmh4QajXsXlOLKdgwjW1QYKHl60ON5E22R8AkmL1asX99hYJl68-N52i_Ec5CGRBNfqRvVB1izHs42AUFM321j98Mcg7ucNuoQIs93OvHeU=s0-d-e1-ft#https://cdn.webapp.kaitdev.com/public/assets/icons/email.png" alt="Link" style="width:17px;height:16px;vertical-align:middle" class="CToWUd" data-bit="iit">
                                                    </a>
                                                </div>
                                                <p style="font-size:16px;font-style:normal;font-weight:400;line-height:27px;margin-bottom:40px">
                                                    تنتهي صلاحية الرمز بعد 48 ساعة.
                                                </p>
                                                <p style="font-size:14px;font-style:normal;font-weight:400;line-height:27px;color:#4d4d4d">
                                                    تجاهل الرسالة فضلًا إن لم يكن أنت من يحاول الدخول.
                                                </p>
                                            </div>
                                            <div style="padding:1rem;background-color:#f7f7f7;border-radius:8px;margin-top:20px;text-align:center">
                                                <img alt="thmanyah" style="width:100px;height:76.92px;max-width:100%;object-fit: contain;" class="CToWUd" data-bit="iit" src="https://umspodcast.com/assets/img/logo-trans.png">
                                                <p style="color:#b2b2b2;font-size:0.9rem;margin:0.1rem">جميع الحقوق محفوظة United Podcast 2023 ©
                                                </p>
                                                <div class="yj6qo"></div>
                                                <div class="adL">
                                                </div>
                                            </div>
                                            <div class="adL">
                                            </div>
                                        </div>
                                        <div class="adL">
                                        </div>
                                    </div>
                                    <div class="adL">
                                    </div>
                                </div>
                                <div class="adL">


                                </div>
                            </div>
                        </div>
                    </div>';
                $this->sendEmail($receiver_mail, $msg_title, $msg_content);
            }
        }
        return $this->jsondata(true, 'تم ارسال ايميل لك للدخول', [], []);
    }

    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'please enter your email',
            'password.required' => 'ادخل الرمز او انقر ع الرابط في الايميل',
            'password.min' => 'الرمز من 6 ارقام',
        ]);

        if ($request->request) {
            if ($validator->fails()) {
                return $this->jsondata(false, 'Login failed', [$validator->errors()->first()], []);
            }
        }

        if ($validator->fails()) {
            return redirect()->route('site.home');
        }

        $user = User::where("email", $request->email)->first();
        if ($request->request) {    
            if (!$user || $user->password_exp < Carbon::now()) {
                return $this->jsondata(false, 'Login failed', ["انتهاء صلاحية الرمز."], []);
            }
        }

        if (!$user || $user->password_exp < Carbon::now())
            return redirect()->route('site.home');

        
        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            $user->password = Hash::make("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
            $user->save();
            return redirect()->route('site.home');
        }

        if ($request->request) {    
            return $this->jsondata(false, 'Login failed', ["الرمز غير صحيح."], []);
        }


        return redirect()->route('site.home');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

}
