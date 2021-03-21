<?php

namespace Effix\Subscription;

class Update
{
    public function __construct()
    {
        add_action('init', [$this, 'update_subscription_effix']);
    }

    /**
     * [update_subscription_effix description]
     *
     * @return  [type]  [return description]
     */
    public function update_subscription_effix()
    {
        $users = get_users();

        foreach ($users as $user) {

            $user_id = $user->ID; // user id
            $user_meta_data = get_userdata($user_id); //donné de l'utilisateur
            $user_email = $user_meta_data->user_email; // email utilisateur
            $link_site = get_site_url(); // url du site

            // user id from array
            $user_meta_data = get_userdata($user->ID);

            $user_role = $user_meta_data->roles;

            $contain_role_subscriber = in_array('subscriber', $user_role);

            // Obtenir la date d'expiration de l'abonné
            $expiration_date = get_user_meta($user->ID, '_expiration_date_subscription', true);
            $expirationTime = strtotime($expiration_date);
            $current_time = current_time('timestamp');

            if ($contain_role_subscriber === true && $current_time >= $expirationTime) {
                wp_update_user(array('ID' => $user_id, 'role' => 'customer'));
                delete_user_meta($user_id, '_expiration_date_subscription');

                $to = $user_email;
                $subject = 'Renouvellement de votre abonnement Effix';
                $body = 'Votre abonnement Effix expirera le ' . $expiration_date . ' Il vous sera possible de vous réabonner lorsque l\'expiration de celui-ci sera atteinte. Pour tout autre information veuillez nous contacter sur' . '<a href="' . $link_site . '"> Effix </a>';
                $headers = array('Content-Type: text/html; charset=UTF-8');
                wp_mail($to, $subject, $body, $headers);
            }
        }
    }
}
