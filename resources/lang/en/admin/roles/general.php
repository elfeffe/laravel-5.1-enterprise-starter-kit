<?php

return [

    'status'              => [
        'created'              => 'Role successfully created',
        'updated'              => 'Role successfully updated',
        'deleted'              => 'Role successfully deleted',
    ],

    'error'               => [
        'cant-delete-this-role' => 'This role cannot be deleted',
        'cant-edit-this-role'   => 'This role cannot be edited',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Admin | Roles',
            'description'       => 'List of roles',
            'table-title'       => 'Role list',
        ],
        'show'              => [
            'title'             => 'Admin | Role | Show',
            'description'       => 'Displaying role',
            'section-title'     => 'Role details'
        ],
        'create'            => [
            'title'            => 'Admin | Role | Create',
            'description'      => 'Creating a new role',
            'section-title'    => 'New role'
        ],
        'edit'              => [
            'title'            => 'Admin | Role | Edit',
            'description'      => 'Editing role',
            'section-title'    => 'Edit role'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'name'                      =>  'Name',
        'display_name'              =>  'Display name',
        'description'               =>  'Description',
        'permissions'               =>  'Permissions',
        'users'                     =>  'Users',
        'created'                   =>  'Created',
        'updated'                   =>  'Updated',
        'actions'                   =>  'Actions',
    ],

    'button'               => [
        'create'    =>  'Create new role',
    ],

];