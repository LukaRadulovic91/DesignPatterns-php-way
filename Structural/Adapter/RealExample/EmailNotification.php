<?php

namespace paterni\Structural\Adapter\RealExample;

/**
 * Here's an example of the existing class that follows the Target interface.
 *
 * The truth is that many real apps may not have this interface clearly defined.
 * If you're in that boat, your best bet would be to extend the Adapter from one
 * of your application's existing classes. If that's awkward (for instance,
 * SlackNotification doesn't feel like a subclass of EmailNotification), then
 * extracting an interface should be your first step.
 */
class EmailNotification implements Notification
{
    /**
     * @var string
     */
    private $adminEmail;

    /**
     * EmailNotification constructor.
     *
     * @param string $adminEmail
     */
    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    /**
     * @param string $title
     * @param string $message
     *
     * @return void
     */
    public function send(string $title, string $message): void
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}