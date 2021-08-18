<?php

namespace App\Repositories;

use App\Exceptions\User\AllUserException;
use App\Exceptions\User\CreateUserException;
use App\Exceptions\User\UpdateUserException;
use App\Exceptions\User\DeleteUserException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;
// use JWTAuth;
// use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

abstract class UserRepository implements RepositoryInterface
{
    private $model;
    
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    public function create(array $data)
    {
        // dd($data);
        try {
            // password hashing
            if($data['password'])
            {
                $data['password'] = Hash::make($data['password']);
                $data['isKicker'] = (isset($data['isKicker'])) ? 1 : 0;
                $data['isPunter'] = (isset($data['isPunter'])) ? 1 : 0;
                $data['isLongSnapper'] = (isset($data['isLongSnapper'])) ? 1 : 0;
            }

            $user = $this->model->create($data);
            // dd($user);

            // $token = JWTAuth::fromUser($user);
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        }
        catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
    
    public function delete($id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Could`nt find user',
                ]);
            }

            $user = ($this->find($id))['user'];
            $user->save();

            $this->model->destroy($id);
            return response()->json([
                'success' => true,
                'message' => 'Deleted successfully',
                'deletedUser' => $temp,
            ]);
        }
        catch (\Exception $exception) {
            throw new DeleteUserException($exception->getMessage());
        }
    }
    
    public function update(array $data, $id)
    {
        try {
            // dd($data);
            // password hashing
            if(isset($data['password']))
            {
                $data['password'] = Hash::make($data['password']);

            }
            
            if(!$temp = $this->model->find($id))
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Could`nt find user',
                ]);
            }

            $temp->update($data);
            $temp->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Updated successfully!',
                'updated_user' => $temp,
            ]);
        }
        catch (\Exception $exception) {
            throw new UpdateUserException($exception->getMessage());
        }
    }
    
    public function find($id)
    {
        try {
            // return $this->model::findOrFail($id);
            $user = $this->model::find($id);
            if(!$user)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find user',
                ];
            }
            return [
                'success' => true,
                'user' => $user,
            ];
        }
        catch (\Exception $exception) {

        }
    }
    
    public function all()
    {
        try {
            return $this->model::all();
        }
        catch (\Exception $exception) {
            throw new AllUserException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model->orderBy('type', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllUserException($exception->getMessage());
        }
    }

    public function paginate_kickers($pagination)
    {
        try {
            return $this->model->where('isKicker', 1)->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllUserException($exception->getMessage());
        }
    }

    public function paginate_punters($pagination)
    {
        try {
            return $this->model->where('isPunter', 1)->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllUserException($exception->getMessage());
        }
    }

    public function paginate_long_snappers($pagination)
    {
        try {
            return $this->model->where('isLongSnapper', 1)->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllUserException($exception->getMessage());
        }
    }

    public function search_users($query)
    {
        // dd($query);
        $users = User::where('created_at', '!=', NULL)->where('type', '!=', 'Admin')->where('type', '!=', 'User');

        if(isset($query['isKicker'])){
            $users->where('isKicker', 1);
        }

        if(isset($query['isPunter'])){
            $users->where('isPunter', 1);
        }

        if(isset($query['isLongSnapper'])){
            $users->where('isLongSnapper', 1);
        }

        if(isset($query['grad_year'])){
            $users->where('grad_year', $query['grad_year']);
        }

        if(isset($query['state'])){
            $users->where('state', $query['state']);
        }
        
        if(isset($query['height'])){
            $users->where('height', $query['height']);
        }

        if(isset($query['weight'])){
            $users->where('weight', $query['weight']);
        }

        if(isset($query['gpa'])){
            $users->where('gpa', $query['gpa']);
        }

        if(isset($query['act'])){
            $users->where('act', $query['act']);
        }

        if(isset($query['sat'])){
            $users->where('sat', $query['sat']);
        }

        if(isset($query['ncaa_id'])){
            $users->where('ncaa_id', $query['ncaa_id']);
        }

        if(isset($query['other_sports'])){
            $users->where('other_sports', $query['other_sports']);
        }

        $result = $users->get();
        
        return $result;
    }
}