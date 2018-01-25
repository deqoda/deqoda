<?php

class DUP_Logs
{
    protected static $logfile = Duplicator::DUP_LOG_FILENAME;

    public static function log($text, $noticeType = null)
    {
        \ProcessWire\wire('log')->save(self::$logfile, $text);
        if(!is_null($noticeType)) { // backend
            switch ($noticeType) {
                case 'message':
                    \ProcessWire\wire('session')->message($text);
                    break;

                case 'warning':
                    \ProcessWire\wire('session')->warning($text);
                    break;

                case 'error':
                    \ProcessWire\wire('session')->error($text);
                    break;

                default:
                    break;
            }
        }
    }
}


class DUP_LogSession extends DUP_Logs
{
    protected $file;
    protected $logs = array();

    public function __construct($name)
    {
        $this->file = $name;
    }

    public function add($text)
    {
        self::log($text);
        array_push($this->logs, \ProcessWire\wire('log')->getEntries(DUP_LOG_FILENAME, array('limit' => 1)));
    }

    public function reset()
    {
        $this->logs = array();
    }

    public function getlog()
    {
        //bd($this->logs);
    }

    public function save()
    {
        foreach ($this->logs as $log)
        {
            foreach ($log as $parts)
            {
                \ProcessWire\wire('log')->save($this->file, $parts['text']);
            }
        }
    }
}