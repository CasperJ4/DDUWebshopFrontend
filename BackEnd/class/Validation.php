<?php
class Validation
{
    private $_passed = true;
    private $_errors = [];
    private $_db = null;
    private $_optional = false;
    private $_user = null;

    public function check($source, $items = array())
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {

                $value = trim($source[$item]);
                $item = ($item);

                if ($rule === 'optional' && !empty($value)) {
                    $this->_optional = true;
                }

                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required.");
                }

                if ($rule === 'bind' && empty($value) && !empty($source[$rule_value])) {
                    $this->addError("{$item} is required.");
                } else if (!empty($value)) {
                    switch ($rule) {
                        case 'min':

                            if (strlen($value) < $rule_value) {
                                $this->addError("{$item} must be minimum of {$rule_value} character.");
                            }
                            break;

                        case 'max':

                            if (strlen($value) > $rule_value) {
                                $this->addError("{$item} must be maximum of {$rule_value} character.");
                            }
                            break;

                        case 'match':

                            if ($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                            break;

                        case 'email':

                            if (filter_var($value, FILTER_VALIDATE_EMAIL) !==  $rule_value) {
                                $this->addError("{$item} must valid email format.");
                            }
                            break;

                        case 'alnum':

                            if (ctype_alnum($value) !==  $rule_value) {
                                $this->addError("{$item} must alphanumeric.");
                            }
                            break;

                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if ($check->count()) {
                                $this->addError("{$item} already exists.");
                            }
                            break;

                        case 'verify':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if (($this->_user->data()->password)) {
                                $this->addError("Wrong Current Password!.");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }

        return $this;
    }
    private function addError($error)
    {
        $this->_passed = false;
        $this->_errors[] = $error;
    }

    public function errors()
    {
        return $this->_errors;
    }

    public function passed()
    {
        return $this->_passed;
    }
}
