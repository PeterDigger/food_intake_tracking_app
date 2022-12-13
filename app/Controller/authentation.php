<!-- This file responsible for checking user's login information -->

<?php

class userAuthentation
{
    private $data;
    private $errors = [];
    private static $fields = ['username', 'email'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        foreach(self::$fields as $fields)
        {
            if(!array_key_exists($fields, $this->data))
            {
                trigger_error("$fields is not present in data");
                return;
            }
        }
        $this->validUsername();
        $this->validEmail();
        return $this->errors;
    }

    private function validUsername()
    {
        $val = trim($this->data['username']);
        if(empty($val))
        {
            $this->addError('username', 'username cannot be empty.');
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val))
            {
                $this->addError('username', 'username must be in 6-12 Char & aplhanumeric.');
            }
        }
    }

    private function validEmail()
    {
        $val = trim($this->data['email']);
        if(empty($val))
        {
            $this->addError('email', 'email cannot be empty.');
        }else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL))
            {
                $this->addError('email', 'email must be invalid email.');
            }
        }
    }

    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}

?>