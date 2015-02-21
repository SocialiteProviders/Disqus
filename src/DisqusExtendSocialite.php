<?php
namespace SocialiteProviders\Disqus;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DisqusExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('disqus', __NAMESPACE__.'\Provider');
    }
}
