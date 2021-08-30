<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest()->get();
        // dd($users);
        return view('admin.user.user', compact('users'));
    }

    public function index_kickers()
    {
        $users = $this->userService->paginate_kickers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function index_punters()
    {
        $users = $this->userService->paginate_punters(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function index_long_snappers()
    {
        $users = $this->userService->paginate_long_snappers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function store(Request $request)
    {
        // dd('yes');
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:4',
            'email' => 'required|unique:users,email',

        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password);
        $user->type = $request->type;
        $user->user_status =$request->status;
        $user->save();

        return redirect()->back();
    }

    public function show($id)
    {
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
        }
        return $this->userService->find($id);

        // return view('admin.user.profile');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $id = $request->hidden;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->type = $request->type;
        $user->user_status = $request->user_status;
        $user->save();
        // dd($user) ;
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->userService->delete($id);

        if($request->user_type == 'rider'){
            return $this->getRiders($request);
        }

        return redirect()->back();
    }

    public function search_users(Request $request)
    {
        $query = $request['query'];

        $users = $this->userService->search_users($query);

        return view('admin.user.user', compact('users'));
    }

    public function profile_builder(Request $request, $id)
    {
        $user = ($this->userService->find($id))['user'];

        $req = Arr::except($request->all(),['image']);
        if(!(isset($req['password']))){
            $req = Arr::except($req, ['password']);
        }

        // image
        if($request->image){
            if($user->image){
                Storage::disk('public_users')->delete($user->image);
            }
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_users')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        // rating
        if(isset($req['rating'])){
            $req['rating'] = $req['rating'] / 2;
        }

        $this->userService->update($req, $id);

        return redirect()->back();
    }
}
