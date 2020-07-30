<?php
function get_client_ip()
{
    // Nothing to do without any reliable information
    if (!isset($_SERVER['REMOTE_ADDR'])) {
        return NULL;
    }

    // Header that is used by the trusted proxy to refer to the original IP
    $proxy_header = "HTTP_X_FORWARDED_FOR";

    // List of all the proxies that are known to handle 'proxy_header' in known, safe manner
    $trusted_proxies = array("2001:db8::1", "192.168.50.1");

    if (in_array($_SERVER['REMOTE_ADDR'], $trusted_proxies)) //checks if the $_SERVER['REMOTE_ADDR] value is present in $_SERVER array or not
        {
        // Get IP of the client behind trusted proxy
        if (array_key_exists($proxy_header, $_SERVER)) //checks if the "HTTP_X_FORWARDED_FOR" key exists in $_SERVER array or not.
           {

            // Header can contain multiple IP-s of proxies that are passed through.Only the IP added by the last proxy (last IP in the list) can be trusted.
            $client_ip = trim(end(explode(",", $_SERVER[$proxy_header])));//"," is the separator here.
            //The explode() function breaks a string into an array.Note: The "separator" parameter cannot be an empty string
            // Validate just in case
            if (filter_var($client_ip, FILTER_VALIDATE_IP)) // The filter_var() function filters a variable with the specified filter.
             {
                return $client_ip;
            }else
             {
                // Validation failed - beat the guy who configured the proxy or
                // the guy who created the trusted proxy list?
                // TODO: some error handling to notify about the need of punishment
            }
        }
    }

    // In all other cases, REMOTE_ADDR is the ONLY IP we can trust.
    return $_SERVER['REMOTE_ADDR'];
}

print get_client_ip();
?>