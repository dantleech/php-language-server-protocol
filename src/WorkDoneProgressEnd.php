<?php

namespace LanguageServerProtocol;

class WorkDoneProgressEnd
{
    public $kind = 'end';

    /**
     * Optional, more detailed associated progress message. Contains
     * complementary information to the `title`.
     *
     * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
     * If unset, the previous progress message (if any) is still valid.
     *
     * @var string|null
     */
    public $message;

    public function __construct(
        ?string $message = null
    ) {
        $this->message = $message;
    }
}
