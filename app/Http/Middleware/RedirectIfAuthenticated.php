<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

use Auth;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->check())
		{
            switch(Auth::user()->role_id)
            {
                case 1:
                    return new RedirectResponse(url('/my'));
                    break;
				case 2:
                    return new RedirectResponse(url('/my'));
                    break;
				case 3:
                    return new RedirectResponse(url('/my'));
                    break;
				case 4:
                    return new RedirectResponse(url('/my'));
                    break;
				case 5:
                    return new RedirectResponse(url('/my'));
                    break;
				case 6:
                    return new RedirectResponse(url('/career/introduction'));
                    break;
                case 7:
                    return new RedirectResponse(url('/my'));
                    break;
				case 8:
                    return new RedirectResponse(url('/'));
                    break;
				case 9:
                    return new RedirectResponse(url('/'));
                    break;
				case 10:
                    return new RedirectResponse(url('/my'));
                    break;
                default:
                    return new RedirectResponse(url('/'));
                    break;
            }
		}

		return $next($request);
	}

}
