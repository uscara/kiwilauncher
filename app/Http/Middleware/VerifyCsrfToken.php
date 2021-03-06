<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	protected $routes = array(
		'admin/statistic-graph',
		"gallery/*"
	);

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	public function handle($request, Closure $next)
	{
		if ($this->excludedRoutes($request)) return $next($request);
		
		return parent::handle($request, $next);
	}


	protected function excludedRoutes($request)  
	{
	    foreach ($this->routes as $route) {
	    	if ($request->is($route)) return true;
	    }

        return false;
	}

}
