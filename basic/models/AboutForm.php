<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property integer id
 * @property integer $online_status
 *
 * @property User $users
 */

class AboutForm extends Model
{
    public $users;
    public $online_status;
    private $model;

    public static function tableName()
    {
        return '{{%user}}';
    }

    const ONLINE = 'Online';
    const OFFLINE = 'Offline';

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id']);
    }

    public function setUser($users)
    {
        [$this->model] = User::find()->where(['id' => $users->id])->all();
        $this->username = $users->username;
        $this->surname = $users->surname;
        $this->email = $users->email;
        $this->online_status = $users->online_status;
    }

    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['username', 'surname', 'online_status'], 'string'],
            ['online_status', 'in', 'range' => [self::ONLINE, self::OFFLINE]],
        ];
    }

    public function save()
    {
        $this->model->online_status = $this->online_status;
        return $this->model->save();
    }
}