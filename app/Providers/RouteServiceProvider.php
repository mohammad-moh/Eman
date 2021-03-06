<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('backend')
                ->namespace($this->namespace)
                ->group(base_path('routes/backend.php'));

            Route::middleware('frontend')
                ->namespace($this->namespace)
                ->group(base_path('routes/frontend.php'));
            
            Route::middleware('serching')
                ->namespace($this->namespace)
                ->group(base_path('routes/serching.php'));

            Route::middleware('post')
                ->namespace($this->namespace)
                ->group(base_path('routes/post.php'));

            Route::middleware('blog')
                ->namespace($this->namespace)
                ->group(base_path('routes/blog.php'));


            Route::middleware('flay')
              ->namespace($this->namespace)
              ->group(base_path('routes/flay.php'));

            Route::middleware('bard')
            ->namespace($this->namespace)
            ->group(base_path('routes/bard.php'));
           
            Route::middleware('imageshow')
              ->namespace($this->namespace)
              ->group(base_path('routes/imageshow.php'));

              Route::middleware('jef')
              ->namespace($this->namespace)
              ->group(base_path('routes/jef.php'));


        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
