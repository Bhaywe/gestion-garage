<?php

namespace Effix\Meta;

class User
{
    public function __construct()
    {
        add_action('admin_head', [$this, 'custom_admin_css']);
        add_action('manage_users_columns', [$this, 'add_custom_column_user']);
        add_action('manage_users_custom_column', [$this, 'update_column_user_subscription_expiration_date'], 10, 3);
    }

    /**
     * [add_custom_column_user description]
     *
     * @param   [type]  $column_headers  [$column_headers description]
     *
     * @return  [type]                   [return description]
     */
    function add_custom_column_user($column_headers)
    {
        $column_headers['_expiration_date_subscription'] = 'Expiration abonnement';
        return $column_headers;
    }

    /**
     * [custom_admin_css description]
     *
     * @return  [type]  [return description]
     */
    function custom_admin_css()
    {
        echo '<style>
        .column-_expiration_date_subscription {width: 15%; padding-left: 80px!important;}
        ._expiration_date_subscription {padding-left: 95px!important;}
        </style>';
    }

    /**
     * [update_column_user_subscription_expiration_date description]
     *
     * @param   [type]  $value        [$value description]
     * @param   [type]  $column_name  [$column_name description]
     * @param   [type]  $user_id      [$user_id description]
     *
     * @return  [type]                [return description]
     */
    function update_column_user_subscription_expiration_date($value, $column_name, $user_id)
    {
        switch ($column_name) {
            case '_expiration_date_subscription':
                return get_the_author_meta('_expiration_date_subscription', $user_id);
                break;
            default:
        }
        return $value;
    }
}
