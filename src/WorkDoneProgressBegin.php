<?php

namespace LanguageServerProtocol;

class WorkDoneProgressBegin extends WorkDoneProgressReport
{
    public $kind = 'begin';

    /**
     * Mandatory title of the progress operation. Used to briefly inform about
     * the kind of operation being performed.
     *
     * Examples: "Indexing" or "Linking dependencies".
     *
     * @var string
     */
    protected $title;

    public function __construct(
        string $title,
        ?bool $cancellable = null,
        ?string $message = null,
        ?int $percentage = null
    ) {
        $this->title = $title;
        $this->cancellable = $cancellable;
        $this->message = $message;
        $this->percentage = $percentage;
    }
}
