<?php
namespace TinyURL\Repository;
use Illuminate\Support\ServiceProvider;

class TinyURLRepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('TinyURL\Repository\Link\DbLinkRepository'
            , function(){
                return new \TinyURL\Repository\Link\DbLinkRepository(new \Link);
            });

        $this->app->bind('TinyURL\Repository\Link\LinkRepositoryInterface'
                        ,'TinyURL\Repository\Link\ShortLinkRepository');

    }
      
}
?>
