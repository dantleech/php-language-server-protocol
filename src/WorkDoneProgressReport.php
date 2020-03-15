<?php

namespace LanguageServerProtocol;

class WorkDoneProgressReport extends WorkDoneProgressEnd
{
    public $kind = 'report';

    /**
     * Controls if a cancel button should show to allow the user to cancel the
     * long running operation. Clients that don't support cancellation are allowed
     * to ignore the setting.
     *
     * @var boolean|null
     */
    public $cancellable;

    /**
     * Optional progress percentage to display (value 100 is considered 100%).
     * If not provided infinite progress is assumed and clients are allowed
     * to ignore the `percentage` value in subsequent in report notifications.
     *
     * The value should be steadily rising. Clients are free to ignore values
     * that are not following this rule.
     *
     * @var int|null
     */
    public $percentage;

    public function __construct(
        ?bool $cancellable = null,
        ?string $message = null,
        ?int $percentage = null
    ) {
        $this->cancellable = $cancellable;
        $this->message = $message;
        $this->percentage = $percentage;
    }
}
