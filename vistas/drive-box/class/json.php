<?php


function getIconApp ($ext)
{

if(file_exists(JSON_DIR.'/archive.json')) {
        $archive = json_decode(file_get_contents(JSON_DIR.'/archive.json'), true);
    } else {
        throw new Exception('archive.json no encontrado');
    }

if(file_exists(JSON_DIR.'/apple.json')) {
        $apple = json_decode(file_get_contents(JSON_DIR.'/apple.json'), true);
    } else {
        throw new Exception('applet.json no encontrado');
    }

if(file_exists(JSON_DIR.'/audio.json')) {
        $audio = json_decode(file_get_contents(JSON_DIR.'/audio.json'), true);
    } else {
        throw new Exception('audio.json no encontrado');
    }

if(file_exists(JSON_DIR.'/calendar.json')) {
        $calendar = json_decode(file_get_contents(JSON_DIR.'/calendar.json'), true);
    } else {
        throw new Exception('calendar.json no encontrado');
    }

if(file_exists(JSON_DIR.'/raw.json')) {
        $raw = json_decode(file_get_contents(JSON_DIR.'/raw.json'), true);
    } else {
        throw new Exception('raw.json no encontrado');
    }

if(file_exists(JSON_DIR.'/config.json')) {
        $config = json_decode(file_get_contents(JSON_DIR.'/config.json'), true);
    } else {
        throw new Exception('config.json no encontrado');
    }

if(file_exists(JSON_DIR.'/contact.json')) {
        $contact = json_decode(file_get_contents(JSON_DIR.'/contact.json'), true);
    } else {
        throw new Exception('contact.json no encontrado');
    }

if(file_exists(JSON_DIR.'/database.json')) {
        $database = json_decode(file_get_contents(JSON_DIR.'/database.json'), true);
    } else {
        throw new Exception('database.json no encontrado');
    }

if(file_exists(JSON_DIR.'/doc.json')) {
        $doc = json_decode(file_get_contents(JSON_DIR.'/doc.json'), true);
    } else {
        throw new Exception('doc.json no encontrado');
    }

if(file_exists(JSON_DIR.'/downloads.json')) {
        $downloads = json_decode(file_get_contents(JSON_DIR.'/downloads.json'), true);
    } else {
        throw new Exception('downloads.json no encontrado');
    }

if(file_exists(JSON_DIR.'/ebook.json')) {
        $ebook = json_decode(file_get_contents(JSON_DIR.'/ebook.json'), true);
    } else {
        throw new Exception('ebook.json no encontrado');
    }

if(file_exists(JSON_DIR.'/email.json')) {
        $email = json_decode(file_get_contents(JSON_DIR.'/email.json'), true);
    } else {
        throw new Exception('email.json no encontrado');
    }

if(file_exists(JSON_DIR.'/feed.json')) {
        $feed = json_decode(file_get_contents(JSON_DIR.'/feed.json'), true);
    } else {
        throw new Exception('feed.json no encontrado');
    }

if(file_exists(JSON_DIR.'/flash.json')) {
        $flash = json_decode(file_get_contents(JSON_DIR.'/flash.json'), true);
    } else {
        throw new Exception('flash.json no encontrado');
    }

if(file_exists(JSON_DIR.'/flickr.json')) {
        $flickr = json_decode(file_get_contents(JSON_DIR.'/flickr.json'), true);
    } else {
        throw new Exception('flickr.json no encontrado');
    }

if(file_exists(JSON_DIR.'/font.json')) {
        $font = json_decode(file_get_contents(JSON_DIR.'/font.json'), true);
    } else {
        throw new Exception('font.json no encontrado');
    }

if(file_exists(JSON_DIR.'/image.json')) {
        $image = json_decode(file_get_contents(JSON_DIR.'/image.json'), true);
    } else {
        throw new Exception('image.json no encontrado');
    }

if(file_exists(JSON_DIR.'/link.json')) {
        $link = json_decode(file_get_contents(JSON_DIR.'/link.json'), true);
    } else {
        throw new Exception('link.json no encontrado');
    }

if(file_exists(JSON_DIR.'/linux.json')) {
        $linux = json_decode(file_get_contents(JSON_DIR.'/linux.json'), true);
    } else {
        throw new Exception('linux.json no encontrado');
    }

if(file_exists(JSON_DIR.'/map.json')) {
        $map = json_decode(file_get_contents(JSON_DIR.'/map.json'), true);
    } else {
        throw new Exception('map.json no encontrado');
    }

if(file_exists(JSON_DIR.'/palette.json')) {
        $palette = json_decode(file_get_contents(JSON_DIR.'/palette.json'), true);
    } else {
        throw new Exception('palette.json no encontrado');
    }

if(file_exists(JSON_DIR.'/raw.json')) {
        $raw = json_decode(file_get_contents(JSON_DIR.'/raw.json'), true);
    } else {
        throw new Exception('raw.json no encontrado');
    }

if(file_exists(JSON_DIR.'/script.json')) {
        $script= json_decode(file_get_contents(JSON_DIR.'/script.json'), true);
    } else {
        throw new Exception('script.json no encontrado');
    }

if(file_exists(JSON_DIR.'/soundcloud.json')) {
        $soundcloud= json_decode(file_get_contents(JSON_DIR.'/soundcloud.json'), true);
    } else {
        throw new Exception('soundcloud.json no encontrado');
    }

if(file_exists(JSON_DIR.'/text.json')) {
        $text= json_decode(file_get_contents(JSON_DIR.'/text.json'), true);
    } else {
        throw new Exception('text.json no encontrado');
    }

if(file_exists(JSON_DIR.'/video.json')) {
        $video= json_decode(file_get_contents(JSON_DIR.'/video.json'), true);
    } else {
        throw new Exception('video.json no encontrado');
    }

if(file_exists(JSON_DIR.'/vimeo.json')) {
        $vimeo= json_decode(file_get_contents(JSON_DIR.'/vimeo.json'), true);
    } else {
        throw new Exception('vimeo.json no encontrado');
    }

if(file_exists(JSON_DIR.'/virtual.json')) {
        $virtual= json_decode(file_get_contents(JSON_DIR.'/virtual.json'), true);
    } else {
        throw new Exception('virtual.json no encontrado');
    }

if(file_exists(JSON_DIR.'/website.json')) {
        $website= json_decode(file_get_contents(JSON_DIR.'/website.json'), true);
    } else {
        throw new Exception('website.json no encontrado');
    }

if(file_exists(JSON_DIR.'/windows.json')) {
        $windows= json_decode(file_get_contents(JSON_DIR.'/windows.json'), true);
    } else {
        throw new Exception('windows.json no encontrado');
    }

if(file_exists(JSON_DIR.'/youtube.json')) {
        $youtube= json_decode(file_get_contents(JSON_DIR.'/youtube.json'), true);
    } else {
        throw new Exception('youtube.json no encontrado');
    }

if (in_array($ext, $archive['archive']['extensions'])) return ($archive['archive']['icon'].DEFAULT_MODAL);
if (in_array($ext, $apple['apple']['extensions'])) return ($apple['apple']['icon'].DEFAULT_MODAL);

if (in_array($ext, $audio['audio']['extensions'])) return ($audio['audio']['icon'].AUDIO_MODAL);
if (in_array($ext, $calendar['calendar']['extensions'])) return ($calendar['calendar']['icon'].DEFAULT_MODAL);
if (in_array($ext, $raw['raw']['extensions'])) return ($raw['raw']['icon'].DEFAULT_MODAL);
if (in_array($ext, $config['config']['extensions'])) return ($config['config']['icon'].DEFAULT_MODAL);
if (in_array($ext, $contact['contact']['extensions'])) return ($contact['contact']['icon'].DEFAULT_MODAL);
if (in_array($ext, $database['database']['extensions'])) return ($database['database']['icon'].DEFAULT_MODAL);

if (in_array($ext, $doc['doc']['extensions'])) return ($doc['doc']['icon'].PDF_MODAL);
if (in_array($ext, $downloads['downloads']['extensions'])) return ($downloads['downloads']['icon'].DEFAULT_MODAL);
if (in_array($ext, $ebook['ebook']['extensions'])) return ($ebook['ebook']['icon'].DEFAULT_MODAL);
if (in_array($ext, $email['email']['extensions'])) return ($email['email']['icon'].DEFAULT_MODAL);
if (in_array($ext, $feed['feed']['extensions'])) return ($feed['feed']['icon'].DEFAULT_MODAL);
if (in_array($ext, $flash['flash']['extensions'])) return ($flash['flash']['icon'].FLASH_MODAL);

if (in_array($ext, $flickr['flickr']['extensions'])) return ($flickr['flickr']['icon'].DEFAULT_MODAL);
if (in_array($ext, $font['font']['extensions'])) return ($font['font']['icon'].DEFAULT_MODAL);
if (in_array($ext, $image['image']['extensions'])) return ($image['image']['icon'].IMAGE_MODAL);
if (in_array($ext, $link['link']['extensions'])) return ($link['link']['icon'].DEFAULT_MODAL);

if (in_array($ext, $linux['linux']['extensions'])) return ($linux['linux']['icon'].DEFAULT_MODAL);
if (in_array($ext, $map['map']['extensions'])) return ($map['map']['icon'].DEFAULT_MODAL);
if (in_array($ext, $palette['palette']['extensions'])) return ($palette['palette']['icon'].DEFAULT_MODAL);
if (in_array($ext, $raw['raw']['extensions'])) return ($raw['raw']['icon'].DEFAULT_MODAL);
if (in_array($ext, $script['script']['extensions'])) return ($script['script']['icon'].DEFAULT_MODAL);
if (in_array($ext, $soundcloud['soundcloud']['extensions'])) return ($soundcloud['soundcloud']['icon'].DEFAULT_MODAL);
if (in_array($ext, $text['text']['extensions'])) return ($text['text']['icon'].TEXT_MODAL);
if (in_array($ext, $video['video']['extensions'])) return ($video['video']['icon'].QUICKTIME_MODAL);
if (in_array($ext, $vimeo['vimeo']['extensions'])) return ($vimeo['vimeo']['icon'].DEFAULT_MODAL);
if (in_array($ext, $virtual['virtual']['extensions'])) return ($virtual['virtual']['icon'].VIRTUAL_MODAL);
if (in_array($ext, $website['website']['extensions'])) return ($website['website']['icon'].WEBSITE_MODAL);
if (in_array($ext, $windows['windows']['extensions'])) return ($windows['windows']['icon'].DEFAULT_MODAL);
if (in_array($ext, $youtube['youtube']['extensions'])) return ($youtube['youtube']['icon'].DEFAULT_MODAL);

return ($text['text']['icon'].TEXT_MODAL);

}


function getFilename ($file) {
         return substr($file,32,strpos($file,"=")-32).".".getExt($file);
         }

function getChat ($file){ return substr ($file,0,32); }

function getSender ($file) { return substr($file,strpos($file,"=")+1,(strpos($file,".")-(strpos($file,"=")+1))); }

function getExt($file) { return substr($file,strpos($file,".")+1,strlen($file)-strpos($file,"."));}


//echo "<pre>";
//echo "\n".getFilename ("bc891d8f242a2a4246d1a953c1aeea18PDO:SFB.pdf");
//echo "\n".getChat ("bc891d8f242a2a4246d1a953c1aeea18PDO:SFB.pdf");
//echo "\n".getSender ("bc891d8f242a2a4246d1a953c1aeea18PDO:SFB.pdf");
//echo "\n".getExt ("bc891d8f242a2a4246d1a953c1aeea18PDO:SFB.pdf");
//echo "</pre>";

//echo JSON_DIR;


?>