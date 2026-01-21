<?php
/**
 * router.php - Simple URL Router
 * ZGames Mobile WebApp
 *
 * Usage:
 * - Include this file at the top of index.php (entry point)
 * - Define routes using get() or post() functions
 * - Routes support dynamic parameters: /game/{id}
 *
 * Example .htaccess for Apache:
 * RewriteEngine On
 * RewriteCond %{REQUEST_FILENAME} !-f
 * RewriteCond %{REQUEST_FILENAME} !-d
 * RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
 */

// ============================================
// Router Class
// ============================================
class Router {
    private static $routes = array();
    private static $notFoundCallback = null;

    /**
     * Add a GET route
     */
    public static function get($route, $callback) {
        self::addRoute('GET', $route, $callback);
    }

    /**
     * Add a POST route
     */
    public static function post($route, $callback) {
        self::addRoute('POST', $route, $callback);
    }

    /**
     * Add route to collection
     */
    private static function addRoute($method, $route, $callback) {
        self::$routes[] = array(
            'method'   => $method,
            'route'    => $route,
            'callback' => $callback
        );
    }

    /**
     * Set 404 handler
     */
    public static function notFound($callback) {
        self::$notFoundCallback = $callback;
    }

    /**
     * Run the router
     */
    public static function run() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = $_SERVER['REQUEST_URI'];

        // Remove query string from URI
        $uri = parse_url($requestUri, PHP_URL_PATH);

        // Remove base path if needed
        $basePath = dirname($_SERVER['SCRIPT_NAME']);
        if ($basePath !== '/' && $basePath !== '\\') {
            $uri = substr($uri, strlen($basePath));
        }

        // Ensure URI starts with /
        if (empty($uri) || $uri[0] !== '/') {
            $uri = '/' . $uri;
        }

        // Find matching route
        foreach (self::$routes as $route) {
            if ($route['method'] !== $requestMethod) {
                continue;
            }

            $pattern = self::routeToPattern($route['route']);

            if (preg_match($pattern, $uri, $matches)) {
                // Extract named parameters
                array_shift($matches); // Remove full match

                // Get parameter names from route
                preg_match_all('/\{(\w+)\}/', $route['route'], $paramNames);

                if (!empty($paramNames[1])) {
                    foreach ($paramNames[1] as $index => $name) {
                        if (isset($matches[$index])) {
                            $_GET[$name] = $matches[$index];
                        }
                    }
                }

                // Execute callback
                $callback = $route['callback'];

                if (is_string($callback)) {
                    // Include file
                    include(__DIR__ . $callback);
                } elseif (is_callable($callback)) {
                    call_user_func($callback, $matches);
                }

                return;
            }
        }

        // No route found
        if (self::$notFoundCallback) {
            call_user_func(self::$notFoundCallback);
        } else {
            http_response_code(404);
            include(__DIR__ . '/404.php');
        }
    }

    /**
     * Convert route pattern to regex
     */
    private static function routeToPattern($route) {
        // Escape special regex characters
        $pattern = preg_quote($route, '/');

        // Replace {param} with regex capture group
        $pattern = preg_replace('/\\\{(\w+)\\\}/', '([^\/]+)', $pattern);

        return '/^' . $pattern . '\/?$/';
    }
}

// ============================================
// Helper Functions (Simple Routing)
// ============================================

/**
 * Define a GET route
 * @param string $route URL pattern (e.g., '/game/{id}')
 * @param string $path_to_include Path to PHP file
 */
function get($route, $path_to_include) {
    // Get request URI
    $requestUri = $_SERVER['REQUEST_URI'];
    $uri = parse_url($requestUri, PHP_URL_PATH);

    // Remove base path
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    if ($basePath !== '/' && $basePath !== '\\') {
        $uri = substr($uri, strlen($basePath));
    }

    if (empty($uri)) {
        $uri = '/';
    }

    // Convert route pattern to regex
    $pattern = preg_quote($route, '/');
    $pattern = preg_replace('/\\\{(\w+)\\\}/', '(?P<$1>[^\/]+)', $pattern);
    $pattern = '/^' . $pattern . '\/?$/';

    // Match route
    if (preg_match($pattern, $uri, $matches)) {
        // Store dynamic parameters in $_GET
        foreach ($matches as $key => $value) {
            if (is_string($key)) {
                $_GET[$key] = $value;
            }
        }

        // Include the file
        include(__DIR__ . $path_to_include);
        exit;
    }
}

/**
 * Define a POST route
 */
function post($route, $path_to_include) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }
    get($route, $path_to_include);
}

/**
 * Redirect to another URL
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

// ============================================
// Sample Route Definitions
// ============================================
/*
// Home
get('/', '/home.php');

// Games
get('/games', '/games.php');
get('/game/{id}', '/game-detail.php');

// Categories
get('/category/{slug}', '/category.php');

// Static Pages
get('/about', '/about.php');
get('/contact', '/contact.php');

// API endpoints
post('/api/contact', '/api/contact.php');

// 404 fallback
Router::notFound(function() {
    include(__DIR__ . '/404.php');
});

// Run router
Router::run();
*/
