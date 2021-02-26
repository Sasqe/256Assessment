<?php
namespace App\Http\Controllers;
 /*Assessment
* V1
* Chris King
* 02/26/2021
* AssessmentController.php
*Controller for the data post module
*/ 
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\AssessmentService;



class AssessmentController extends Controller
{
    public function index(Request $request){
      return view('assessment');
        
    }
    public function doPost(Request $request){
        
        //Assign data to object
        $credentials = new UserModel(request()->get('firstname'), request()->get('lastname'),request()->get('username'), request()->get('password'));
        //return result of validation
        $auth = new AssessmentService();
       
        $valid = $auth->doAuth($credentials);
        
        if ($valid){
            //return view with true
             return redirect('assessment')->with('valid',$valid)
                             ->with('firstName', $credentials->getFirstname())
                             ->with('lastName', $credentials->getLastname())
                             ->with('userName', $credentials->getUsername())
                             ->with('passWord', $credentials->getPassword());
        }
        else {
            //return view with false
               
             return redirect('assessment')->with('valid',$valid)
             ->with('firstName', $credentials->getFirstname())
             ->with('lastName', $credentials->getLastname())
             ->with('userName', $credentials->getUsername())
             ->with('passWord', $credentials->getPassword());
        }
    }
  
    
 

    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//     protected $redirectTo = '/home';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }
}
