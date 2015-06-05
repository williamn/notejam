<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('email', 'An email is required')
            ->notEmpty('password', 'A password is required')
            ->add('email', [
                'unique' => ['rule' => 'validateUnique', 'provider' => 'table']
            ])
            ->add('confirm_password', 'custom', [
                'rule' => function ($value, $context) {
                    return $context['data']['password'] == $value;
                }
            ])
            ;
    }
}
