<?php
class GSM_API {
    public function __construct() {
        add_action('rest_api_init', array($this, 'register_api_routes'));
    }

    public function register_api_routes() {
        register_rest_route('gsm/v1', '/servers', array(
            'methods' => 'GET',
            'callback' => array($this, 'get_servers'),
        ));

        register_rest_route('gsm/v1', '/servers/(?P<id>\d+)', array(
            'methods' => 'GET',
            'callback' => array($this, 'get_server'),
        ));
    }

    public function get_servers() {
        $servers = gsm_get_servers();

        if (!empty($servers)) {
            return new WP_REST_Response($servers, 200);
        } else {
            return new WP_Error('no_servers', 'No servers found.', array('status' => 404));
        }
    }

    public function get_server($request) {
        $server_id = $request['id'];
        $server = gsm_get_server($server_id);

        if ($server) {
            return new WP_REST_Response($server, 200);
        } else {
            return new WP_Error('server_not_found', 'Server not found.', array('status' => 404));
        }
    }
}

$gsm_api = new GSM_API();
