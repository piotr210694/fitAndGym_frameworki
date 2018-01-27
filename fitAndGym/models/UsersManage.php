<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $passwordHash
 * @property string $email
 * @property string $authKey
 * @property string $accessToken
 */
class UsersManage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passwordHash', 'email'], 'required'],
            [['username'], 'string', 'max' => 15],
            [['passwordHash'], 'string', 'max' => 500],
            [['email', 'authKey', 'accessToken'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'passwordHash' => 'Password Hash',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
}
