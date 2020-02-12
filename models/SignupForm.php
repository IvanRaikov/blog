<?php
namespace app\models;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model{
    public $username;
    public $email;
    public $password;
    
    public function rules(){
        return[
        [['username','email','password'],'required'],
        [['email'],'email'],
        [['username'],'string', 'min'=>6],
        [['email'],'unique','targetClass'=>'app\models\User','targetAttribute'=>'email'],
        [['password'],'string','min'=>6]
        ];
    }
    public function signUp(){
        if($this->validate()){
        $user = new User();
        $user->name = $this->username;
        $user->email = $this->email;
        $user->password = md5($this->password);
        return $user->save();
        }
    }
}
