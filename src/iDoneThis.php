<?php
/**
 * @file
 * A class for sending iDoneThis emails.
 */

class iDoneThis {

    protected $sender;
    protected $team;

    /**
     * @param string  sender  Your email address.
     * @param string  team  The team name as displayed in the subject line of the digest emails.
     */
    function __construct($sender, $team = 'Personal')
    {
        $this->sender = $sender;
        $this->team = $team;
    }

    /**
     * @param string  message  The body of the email.  One task per line.
     * @return bool TRUE if the mail was successfully accepted for delivery.
     */
    function send($message)
    {
        $headers = 'From: ' . $this->sender . "\r\n";

        if ($this->team == 'Personal') {
            $to = 'today@idonethis.com';
        }
        else {
            $to = str_replace(' ', '-', strtolower($this->team) . '@team.idonethis.com';
        }

        $subject = 'Re: '. $this->team . ' digest for ' . date("F j");

        return mail($to, $subject, $message, $headers);
    }

}
