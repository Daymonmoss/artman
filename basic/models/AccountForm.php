<?php
namespace app\models;

use yii\base\Model;
use yii\db\Query;

/**
 * This is the model class for table "user".
 *
 * @property integer id
 * @property integer $online_status
 * @property string $username
 * @property string $surname
 * @property string $email
 *
 * @property User $user
 */

class AccountForm extends Model
{
    public $username;
    public $surname;
    public $email;
    public $online_status;
    private $model;

    public static function tableName()
    {
        return '{{%user}}';
    }

    const ONLINE = 'Online';
    const OFFLINE = 'Offline';

    public function setUser($myidentity)
    {
        [$this->model] = User::find()->where(['id' => $myidentity->id])->all();
        $this->username = $myidentity->username;
        $this->surname = $myidentity->surname;
        $this->email = $myidentity->email;
        $this->online_status = $myidentity->online_status;
    }

    public function rules()
    {
        //$query = new Query();
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
          //  ['email', 'unique', 'targetClass' => User::class, 'filter' => $this->email === $query->select('email')->from('user')->all()],
            ['email', 'unique', 'targetClass' => '\app\models\AccountForm', 'message' => 'This email address has already been taken.'],
            [['username', 'surname', 'online_status'], 'string', 'max' => 255],
            ['online_status', 'in', 'range' => [self::ONLINE, self::OFFLINE]],
        ];
    }

    public function save()
    {
/*
        if (!$this->validate()) {
            return null;
        }

*/
     //   $this->model->id = $this->id;
        $this->model->username = $this->username;
        $this->model->surname = $this->surname;
        $this->model->email = $this->email;
        $this->model->online_status = $this->online_status;

        return $this->model->save();
    }
}
