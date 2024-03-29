<?php

class User
{
    private $_db,
        $_data,
        $_sessionName,
        $_cookieName,
        $_isLoggedIn;

    public function __construct($user = null)
    {
        $this->_db = Database::getInstance();

        $this->_sessionName = Config::get('session/session_name');

        $this->_cookieName  = Config::get('remember/cookie_name');

        if (!$user) {
            if (Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);

                if ($this->find($user)) {
                    $this->_isLoggedIn = true;
                }
            }
        } else {
            $this->find($user);
        }
    }
    public function isAdmin()
    {
        if ($this->isLoggedIn()) {
            return $this->data()->is_admin == 1; // Assuming 'is_admin' is the column name
        }
        return false;
    }

    public function update($fields = array(), $id = null)
    {
        if (!$id && $this->isLoggedIn()) {
            $id = $this->data()->uid;
        }

        if (!$this->_db->update('wsusers', $id, $fields)) {
            throw new Exception('Unable to update the user.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('wsusers', $fields)) {
            throw new Exception("Unable to create the user.");
        }
    }

    public function find($user = null)
    {
        if ($user) {
            $field  = (is_numeric($user)) ? 'uid' : 'username';

            $data = $this->_db->get('wsusers', array($field, '=', $user));

            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
    }

    public function login($username = null, $password = null, $remember = false)
    {
        if (!$username && !$password && $this->exists()) {
            Session::put($this->_sessionName, $this->data()->uid);
        } else {
            $user = $this->find($username);

            if ($user) {
                Session::put($this->_sessionName, $this->data()->uid);

                if ($remember) {
                    $hashCheck  = $this->_db->get('wsusers_session', array('uid', '=', $this->data()->uid));

                    if (!$hashCheck->count()) {
                        $this->_db->insert('wsusers_session', array(
                            'uid'   => $this->data()->uid,
                        ));
                    } else {
                        $hash = $hashCheck->first()->hash;
                    }
                }

                return true;
            }
        }

        return false;
    }

    public function hasPermission($key)
    {
        $group = $this->_db->get('groups', array('group_id', '=', $this->data()->groups));

        if ($group->count()) {
            $permissions = json_decode($group->first()->permissions, true);

            if ($permissions[$key] == true) {
                return true;
            }
        }

        return false;
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout()
    {
        $this->_db->delete('wsusers_session', array('user_id', '=', $this->data()->uid));

        Session::delete($this->_sessionName);
    }

    public function data()
    {
        return $this->_data;
    }

    public function isLoggedIn()
    {
        return $this->_isLoggedIn;
    }

    public function deleteMe()
    {
        if ($this->isLoggedIn()) {
            $id = $this->data()->uid;
        }

        if (!$this->_db->delete('wsusers', array('uid', '=', $id))) {
            throw new Exception('Unable to update the user.');
        }
    }
}
