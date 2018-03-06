<?php

namespace app\models;
use app\models\Users;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id_user;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

  
    public static function findIdentity($id_user)
    {
       $TableUsers = Users::find()->where(["id_user"=> $id_user])->one();
       if (!count($TableUsers)) {
           return null;
       }
       return new static ($TableUsers);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      $TableUsers = Users::find()->where(["accessToken"=> $accessToken])->one();
       if (!count($TableUsers)) {
           return null;
       }
       return new static ($TableUsers);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $TableUsers = Users::find()->where(["username"=> $username])->one();
       if (!count($TableUsers)) {
           return null;
       }
       return new static ($TableUsers);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id_user;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
