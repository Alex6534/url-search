<?php

class match_search
{

    protected $file;
    public $search_term;
    public $content;
    public $pattern;


    public function __construct()
    {
        $this->file = $file = "uws.vcl";

        $this->search_term = $search_term = $_POST['search'];

        $this->content = $content = file_get_contents('uws.vcl');

        $this->pattern = $pattern = preg_quote($search_term, '/');

        $this->pattern = $pattern = "/^.*$pattern.*\$/m";

        if(file_exists($file))
        {
            str_replace('req.url ~ "(?i)', '', $file) && str_replace('" ||', '', $file);
        }

        else
        {
            print("File not found");
        }



        if(preg_match_all($pattern, $content, $matches))
        {

            print json_encode(array('urls' => $matches[0]));
        }

        else
        {
            return ("No matches found");
        }
    }

};

$match_search = new match_search;

$match_search->search_term;