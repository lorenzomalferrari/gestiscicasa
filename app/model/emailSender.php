<?php declare(strict_types=1);
    class EmailSender
    {
        private $to;
        private $subject;
        private $message;
        private $headers;

        public function __construct($to, $subject, $message, $headers = '')
        {
            $this->to = $to;
            $this->subject = $subject;
            $this->message = $message;
            $this->headers = $headers;
        }

        public function send()
        {
            return mail($this->to, $this->subject, $this->message, $this->headers);
        }
    }
?>
