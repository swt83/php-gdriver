<?php

namespace Travis;

class GDriver
{
    /**
     * Return a converted link to a direct file download from GDrive.
     *
     * @param   string  $url
     * @return  string
     */
    public static function convert($url)
    {
        // if not google...
        if (!stripos($url, 'drive.google.com'))
        {
            // throw error
            throw new \Exception('Invalid GDrive link provided.');
        }

        // parse url
        $parts = parse_url($url);
        parse_str($parts['query'], $args);

        // get id
        $id = isset($args['id']) ? $args['id'] : null;

        // catch error...
        if (!$id) throw new \Exception('Invalid GDrive link provided.');

        // reformat
        return 'https://drive.google.com/uc?export=download&id='.$id;
    }
}
