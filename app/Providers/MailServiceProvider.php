<?php

namespace App\Providers;

use App\EmailDomain\Email\MailerService\MailerService;
use App\EmailDomain\Email\MailerService\MailerServiceInterface;
use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->registerMailService();
    }

    private function registerMailService(): void
    {
        $this->app->singleton(MailerServiceInterface::class, MailerService::class);
    }
}
