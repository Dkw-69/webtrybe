<?php

class EmailSend{
    // Sends an HTML email. You can use basic HTML tags. You have to insert
    // new lines using <br /> or paragraphs. Uses the UTF-8 encoding.
    public function send($to, $from, $subject, $message)
    {
        $header = "From: " . $from;
        $header .= "\nMIME-Version: 1.0\n";
        $header .= "Content-Type: text/html; charset=\"utf-8\"\n";
        return mb_send_mail($to, $subject, $message, $header);
    }

}