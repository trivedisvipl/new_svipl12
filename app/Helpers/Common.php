<?php

namespace App\Helpers;
use File;
use Image;

class Common
{

    /**
     * truncate a string provided by the maximum limit without breaking a word
     * @author Dhaval Bharadva
     * @param string $str
     * @param integer $maxlen
     * @return string
     */
    public static function shorteningString($str, $maxlen)
    {
        if (strlen($str) <= $maxlen)
            return $str;
        $newstr = substr($str, 0, $maxlen);
        if (substr($newstr, -1, 1) != ' ')
            $newstr = substr($newstr, 0, strrpos($newstr, " "));

        return $newstr . ' ...';
    }

    /**
     * Truncates text.
     *
     * Cuts a string to the length of $length and replaces the last characters
     * with the ending if the text is longer than length.
     *
     * ### Options:
     *
     * - `ending` Will be used as Ending and appended to the trimmed string
     * - `exact` If false, $text will not be cut mid-word
     * - `html` If true, HTML tags would be handled correctly
     *
     * @param string  $text String to truncate.
     * @param integer $length Length of returned string, including ellipsis.
     * @param array $options An array of html attributes and options.
     * @return string Trimmed string.
     * @access public
     * @link http://book.cakephp.org/view/1469/Text#truncate-1625
     */
    public static function truncate($text, $length = 100, $options = array())
    {
        $default = array(
            'ending' => '...', 'exact' => false, 'html' => true
        );
        $options = array_merge($default, $options);
        extract($options);

        if ($html) {
            if (mb_strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                return $text;
            }
            $totalLength = mb_strlen(strip_tags($ending));
            $openTags = array();
            $truncate = '';

            preg_match_all('/(<\/?([\w+]+)[^>]*>)?([^<>]*)/', $text, $tags, PREG_SET_ORDER);
            foreach ($tags as $tag) {
                if (!preg_match('/img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param/s', $tag[2])) {
                    if (preg_match('/<[\w]+[^>]*>/s', $tag[0])) {
                        array_unshift($openTags, $tag[2]);
                    } else if (preg_match('/<\/([\w]+)[^>]*>/s', $tag[0], $closeTag)) {
                        $pos = array_search($closeTag[1], $openTags);
                        if ($pos !== false) {
                            array_splice($openTags, $pos, 1);
                        }
                    }
                }
                $truncate .= $tag[1];

                $contentLength = mb_strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $tag[3]));
                if ($contentLength + $totalLength > $length) {
                    $left = $length - $totalLength;
                    $entitiesLength = 0;
                    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $tag[3], $entities, PREG_OFFSET_CAPTURE)) {
                        foreach ($entities[0] as $entity) {
                            if ($entity[1] + 1 - $entitiesLength <= $left) {
                                $left--;
                                $entitiesLength += mb_strlen($entity[0]);
                            } else {
                                break;
                            }
                        }
                    }

                    $truncate .= mb_substr($tag[3], 0, $left + $entitiesLength);
                    break;
                } else {
                    $truncate .= $tag[3];
                    $totalLength += $contentLength;
                }
                if ($totalLength >= $length) {
                    break;
                }
            }
        } else {
            if (mb_strlen($text) <= $length) {
                return $text;
            } else {
                $truncate = mb_substr($text, 0, $length - mb_strlen($ending));
            }
        }
        if (!$exact) {
            $spacepos = mb_strrpos($truncate, ' ');
            if (isset($spacepos)) {
                if ($html) {
                    $bits = mb_substr($truncate, $spacepos);
                    preg_match_all('/<\/([a-z]+)>/', $bits, $droppedTags, PREG_SET_ORDER);
                    if (!empty($droppedTags)) {
                        foreach ($droppedTags as $closingTag) {
                            if (!in_array($closingTag[1], $openTags)) {
                                array_unshift($openTags, $closingTag[1]);
                            }
                        }
                    }
                }
                $truncate = mb_substr($truncate, 0, $spacepos);
            }
        }
        $truncate .= $ending;

        if ($html) {
            foreach ($openTags as $tag) {
                $truncate .= '</' . $tag . '>';
            }
        }

        return $truncate;
    }

    /**
     * apply base64 first and then reverse the string
     * @author Dhaval Bharadva
     * @param string $str
     * @return endcoded string
     */
    public static function encode($str)
    {
        $str = base64_encode($str);

        return $str;
    }

    /**
     * reverse the string first and then apply base64
     * @author Dhaval Bharadva
     * @param string $str
     * @return decoded string
     */
    public static function decode($str)
    {
        $str = base64_decode($str);

        return $str;
    }

    /**
     * generate random string by given length
     * @author Dhaval Bharadva
     * @param string $length
     * @return string
     */
    public static function generateRandomString($length = 10)
    {

        return strtoupper(substr(str_shuffle(MD5(microtime())), 0, $length));

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    /* author: Dhaval Bharadva
     * description: upload image to folder
     * return: filename if uploaded false otherwise
     */

    public static function upload_image($field_name, $uploadTo, $filename = '')
    {
        if (isset($_FILES[$field_name]) && $_FILES[$field_name]['name'] != "") {
            $filenameOrg = $_FILES[$field_name]['name'];
            $extArray = explode('.', $filenameOrg);
            $ext = end($extArray);
            //$filename = date('YmdHis') . uniqid() . '.' . $ext;
            if ($filename == "") {
                $filename = self::generateRandomString() . '.' . $ext;
            } else {
                $filename = $filename . '.' . $ext;
            }
            $target_image = $uploadTo . $filename;
            chmod($uploadTo, 0777);
            $uploadimage = move_uploaded_file($_FILES[$field_name]['tmp_name'], $target_image);
            if ($uploadimage) {
                return $filename;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function priceFormatDecimal($price)
    {
        return number_format($price, 2, '.', ',');
    }

    public static function priceFormatNoDecimal($price)
    {
        return number_format($price, 0, '.', ',');
    }

    /**
     * check credit card expire month year
     * @author Dhaval Bharadva
     * @param string $month $year
     * @return boolean
     */
    public static function check_exp_date($month, $year)
    {
        /* Get timestamp of midnight on day after expiration month. */
        $exp_ts = mktime(0, 0, 0, $month + 1, 1, $year);
        $cur_ts = time();
        /* Don't validate for dates more than 10 years in future. */
        $max_ts = $cur_ts + (10 * 365 * 24 * 60 * 60);

        if ($exp_ts > $cur_ts && $exp_ts < $max_ts) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Format phone number to us format
     * @author Dhaval Bharadva
     * @param string $phone
     * @return $phone with format
     */
    public static function format_phone_us($phone)
    {
        // note: making sure we have something
        if (!isset($phone[3])) {
            return '';
        }
        // note: strip out everything but numbers
        $phone = preg_replace("/[^0-9]/", "", $phone);
        $length = strlen($phone);
        switch ($length) {
            case 7:
                return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
                break;
            case 10:
                return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1-$2-$3", $phone);
                break;
            case 11:
                return preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "$1($2) $3-$4", $phone);
                break;
            default:
                return $phone;
                break;
        }
    }

    /**
     * Add http to url if not found
     * @author Dhaval Bharadva
     * @param string $url
     * @return url with http or https
     */
    public static function addScheme($url, $scheme = 'http://')
    {
        return parse_url($url, PHP_URL_SCHEME) === null ? $scheme . $url : $url;
    }

    /**
     * Add www to url if not found
     * @author Dhaval Bharadva
     * @param string $url
     * @return url with www
     */
    public static function addWWW($url, $search = '://', $insert = 'www.')
    {
        $index = strpos($url, $search);
        if ($index === false) {
            return $url;
        }
        if (strpos($url, $insert) == false) {
            return substr_replace($url, $search . $insert, $index, strlen($search));
        } else {
            return $url;
        }
    }

    /**
     * Add slash at end of url
     * @author Dhaval Bharadva
     * @param string $url
     * @return url with slash at end of url
     */
    public static function addTrailSlash($url)
    {
        if (SUBSTR($url, -1) != '/') {
            return $url .= '/';
        } else {
            return $url;
        }
    }

    /**
     * To make a directory
     * @path as string, @permission as string
     * @access public
     */
    public static function makeDirectory($path, $permission = 0777)
    {
        if (!is_dir($path)) {
            mkdir($path);
            chmod($path, $permission);
        }
    }

    //to remove the directory
    public static function rmdirectory($path)
    {
        $dir = opendir($path);
        while ($entry = readdir($dir)) {
            if (is_file("$path/$entry")) {
                unlink($path . '/' . $entry);
            } elseif (is_dir("$path/$entry") && $entry != '.' && $entry != '..') {
                self::rmdirectory("$path/$entry");
            }
        }
        closedir($dir);
        return rmdir($path);
    }

    /**
     * Get slug of string
     *
     * @access public
     * @author HARDEEP PANDYA (Dhaval Bharadva)
     * @param $text (string)
     * @param $append (string) string to append
     * @return string
     *
     */
    public static function getSlug($text, $append = '')
    {
        // replace all non letters by _
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        $text = $text . $append;

        return $text;
    }

    /**
     * Create thumbnail of image and upload to specified folder.
     *
     * @author Dhaval
     * @param  string $sourceFile, string $destinationFile, int $width, int $height
     * @return Boolean true
     */
    public static function createThumb($sourceFile, $destinationFile, $width, $height)
    {
        // create new image with transparent background color
        $background = Image::canvas($width, $height);
        // read image file and resize it
        // but keep aspect-ratio and do not size up,
        // so smaller sizes don't stretch
        $image = Image::make($sourceFile)->resize($width, $height, function ($c) {
            $c->aspectRatio();
            $c->upsize();
        });
        // insert resized image centered into background
        $background->insert($image, 'center');
        // save
        $background->save($destinationFile);
        return true;
    }

    /**
     * Add watermark to image
     * @param $source_img & $dest_img
     * @return image with watermark
     * @access public
     * @author Dhaval Bharadva
     */
    public static function image_watermark($source_img, $dest_img)
    {
        // Load the stamp and the photo to apply the watermark to
        $logo = LOGO_PATH . '/logo.png';

        $stamp = @imagecreatefrompng($logo);
        list($source_width, $source_height, $source_type) = getimagesize($source_img);
        switch ($source_type) {
            case IMAGETYPE_GIF:
                $im = @imagecreatefromgif($source_img);
                break;
            case IMAGETYPE_JPEG:
                $im = @imagecreatefromjpeg($source_img);
                break;
            case IMAGETYPE_PNG:
                $im = @imagecreatefrompng($source_img);
                break;
        }

        // Set the margins for the stamp and get the height/width of the stamp image
        $marge_right = 10;
        $marge_bottom = 10;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        $imgx = imagesx($im);
        $imgy = imagesy($im);

        $centerX = ($imgx / 2) - ($sx / 2); // For centering the watermark on any image
        $centerY = ($imgy / 2) - ($sy / 2); // For centering the watermark on any image
        // Copy the stamp image onto our photo using the margin offsets and the photo
        // width to calculate positioning of the stamp.
        imagecopy($im, $stamp, $centerX, $centerY, 0, 0, imagesx($stamp), imagesy($stamp));

        // Output and free memory
        //header('Content-type: image/png');
        switch ($source_type) {
            case IMAGETYPE_GIF:
                imagegif($im, $dest_img);
                break;
            case IMAGETYPE_JPEG:
                imagejpeg($im, $dest_img);
                break;
            case IMAGETYPE_PNG:
                imagepng($im, $dest_img);
                break;
        }
        imagedestroy($im);
        return true;
    }

    /**
     * Roate image clockwise
     *
     * @param string $file
     * @param string $fileThumb
     * @param string $$fileOrg
     * @return boolean
     * @access public
     * @author Dhaval Bharadva
     */
    public static function image_rotate($file, $fileThumb, $fileOrg)
    {

        $degrees = -90;

        //main image
        list($width, $height, $type, $attr) = getimagesize($file);
        if ($type == IMAGETYPE_JPEG) {
            $source = imagecreatefromjpeg($file);
        } elseif ($type == IMAGETYPE_PNG) {
            $source = imagecreatefrompng($file);
        }
        $rotate = imagerotate($source, $degrees, 0);
        if ($type == IMAGETYPE_JPEG) {
            imagejpeg($rotate, $file);
        } elseif ($type == IMAGETYPE_PNG) {
            imagepng($rotate, $file);
        }
        imagedestroy($source);
        imagedestroy($rotate);

        //thumbnail
        list($width, $height, $type, $attr) = getimagesize($fileThumb);
        if ($type == IMAGETYPE_JPEG) {
            $sourceThumb = imagecreatefromjpeg($fileThumb);
        } elseif ($type == IMAGETYPE_PNG) {
            $sourceThumb = imagecreatefrompng($fileThumb);
        }
        $rotateThumb = imagerotate($sourceThumb, $degrees, 0);
        if ($type == IMAGETYPE_JPEG) {
            imagejpeg($rotateThumb, $fileThumb);
        } elseif ($type == IMAGETYPE_PNG) {
            imagepng($rotateThumb, $fileThumb);
        }
        imagedestroy($sourceThumb);
        imagedestroy($rotateThumb);

        //original
        list($width, $height, $type, $attr) = getimagesize($file);
        if ($type == IMAGETYPE_JPEG) {
            $sourceOrg = imagecreatefromjpeg($fileOrg);
        } elseif ($type == IMAGETYPE_PNG) {
            $sourceOrg = imagecreatefrompng($fileOrg);
        }
        $rotateOrg = imagerotate($sourceOrg, $degrees, 0);
        if ($type == IMAGETYPE_JPEG) {
            imagejpeg($rotateOrg, $fileOrg);
        } elseif ($type == IMAGETYPE_PNG) {
            imagepng($rotateOrg, $fileOrg);
        }
        imagedestroy($sourceOrg);
        imagedestroy($rotateOrg);

        return true;
    }

    /**
     * remove all whitespace from string
     * @param $string
     * @return $string without whitespace
     * @access public
     * @author Dhaval Bharadva
     */
    public static function removeSpace($string)
    {
        return preg_replace('/\s+/', '', $string);
    }

    /**
     * copy all directories recursively from source to destination
     * @param $source folder path
     * @param $destination folder path
     * @return true
     * @access public
     * @author Dhaval Bharadva
     */
    public static function copyRecursive($src, $dst)
    {
        if (!file_exists($src)) {
            return true;
        }
        $dir = opendir($src);
        @mkdir($dst);
        chmod($dst, 0777);
        while (false !== ($file = readdir($dir))) {
            if ($file != '.' && $file != '..') {
                if (is_dir($src . '/' . $file)) {
                    self::copyRecursive($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
        return true;
    }

    /**
     * Send sms from click a tell
     * @param $url (string)
     * @return boolean
     * @access public
     * @author Dhaval Bharadva
     */
    // public static function sendSms($url)
    // {
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    //     $data = curl_exec($ch);
    //     curl_close($ch);
    //     return $data;
    // }

    /**
     * Converts a number into a short version, eg: 1000 -> 1k
     * https://gist.github.com/RadGH/84edff0cc81e6326029c
     * @param $number
     * @return $number with specified format
     * @access public
     * @author Dhaval Bharadva
     */
    public static function number_format_short($n, $precision = 1)
    {
        if ($n < 1000) {
            // 0 - 1000
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n / 1000, $precision);
            $suffix = 'K';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n / 1000000, $precision);
            $suffix = 'M';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n / 1000000000, $precision);
            $suffix = 'B';
        } else {
            // 0.9t+
            $n_format = number_format($n / 1000000000000, $precision);
            $suffix = 'T';
        }
        // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
        if ($precision > 0) {
            $dotzero = '.' . str_repeat('0', $precision);
            $n_format = str_replace($dotzero, '', $n_format);
        }
        return $n_format . $suffix;
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test300X300.jpg
     * @param $cover
     * @return $cover test.jpg to test300X300.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover300($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '300X300.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test260X260.jpg
     * @param $cover
     * @return $cover test.jpg to test260X260.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover260($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '260X260.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test180X180.jpg
     * @param $cover
     * @return $cover test.jpg to test180X180.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover180($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '180X180.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test100X100.jpg
     * @param $cover
     * @return $cover test.jpg to test100X100.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover100($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '100X100.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test300X300.jpg
     * @param $cover
     * @return $cover test.jpg to test70X70.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover70($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '70X70.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test240X180.jpg
     * this is used for youtube video image
     * @param $cover
     * @return $cover test.jpg to test240X180.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover240($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '240X180.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return image name by rename like test.jpg to test115X86.jpg
     * this is used for youtube video image
     * @param $cover
     * @return $cover test.jpg to test115X86.jpg
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCover115($cover)
    {
        $fileArray = explode('.', $cover);
        return $fileArray[0] . '115X86.' . $fileArray[1];
    }

    /**
     * Site specific function so remove that for another project
     * return artist name and title split by dash (-)
     * @param $cover
     * @return $artistAndTitle artistname and title
     * @access public
     * @author Dhaval Bharadva
     */
    public static function explodeArtistAndTitle($title)
    {
        $artistAndTitle = explode('-', trim($title), 2);
        return $artistAndTitle;

        /* old code logic */
        $delim = '-';
        $lim = 2;
        $out = explode($delim, $str);
        if ($lim >= count($out))
            return $out;

        $out = array_chunk($out, count($out) - $lim + 1);

        return array_merge(array(implode($delim, $out[0])), $out[1]);
        /* end code */
    }

    /**
     * return ip address of client
     * @param
     * @return $ipaddress
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getClientIp()
    {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER["REMOTE_ADDR"];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
        return '';
        //$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
        //return $ip;
    }

    /**
     * return no of week's start and end date of given month and year
     * @param int $year i.e YYYY (2018)
     * @param int $month i.e. 1,2,3,4,5,6,7,8,9,10,11,12
     * @return array of weeks with start and end date
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getWeeks($year, $month)
    {
        $result = [];
        $thisWeek = date('d', strtotime("first monday of $year-$month"));

        $month = intval($month);    //force month to single integer if '0x'
        $end = date('t', mktime(0, 0, 0, $month, 1, $year));   //last date day of month: 28 - 31
        $start = date('w', mktime(0, 0, 0, $month, 1, $year));  //1st day of month: 0 - 6 (Sun - Sat)
        $last = 7 - $start;      //get last day date (Sat) of first week
        $noweeks = ceil((($end - ($last + 1)) / 7) + 1);  //total no. weeks in month

        for ($i = 1; $i <= $noweeks; $i++) {

            $currentDay = date('Y-m-d', mktime(0, 0, 0, $month, $thisWeek, $year));
            if (date('n', strtotime($currentDay)) > $month) {
                break;
            }

            $monday = strtotime('monday this week', strtotime($currentDay));
            $sunday = strtotime('sunday this week', strtotime($currentDay));


            $weekStart = date('Y-m-d', $monday);
            $weekEnd = date('Y-m-d', $sunday);
            $result[] = [
                'week_start' => $weekStart, // The first monday of the month.
                'week_end' => $weekEnd,
                'week_no' => $i
            ];

            $thisWeek = $thisWeek + 7;
        }
        return $result;
    }

    /**
     * return current week's start and end date
     * @param
     * @return array of current weeks start and end date
     * @access public
     * @author Dhaval Bharadva
     */
    public static function getCurrentWeek()
    {
        $start = (date('D') != 'Mon') ? date('Y-m-d', strtotime('last Monday')) : date('Y-m-d');
        $finish = (date('D') != 'Sat') ? date('Y-m-d', strtotime('next Saturday')) : date('Y-m-d');
        return array('start' => $start, 'end' => $finish);
    }

    public static function uploadFile($file, $path, $oldFile=''){
        if($oldFile){
            $oldFile =  $path.$oldFile;
            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }

        }

        $ext = strtolower($file->getClientOriginalExtension());
        $filename = rand() . '.' . $ext;
        $targetPath = $path;
        $file->move($targetPath, $filename);

        //to Convart Webp image

        if(($ext != 'pdf') && ($ext != 'webp')){

            $source = $targetPath.'/'.$filename;
            $quality = 100;

            $dir = pathinfo($source, PATHINFO_DIRNAME);
            $name = pathinfo($source, PATHINFO_FILENAME);
            $destination = $dir . DIRECTORY_SEPARATOR . $name . '.webp';
            $info = getimagesize($source);
            $isAlpha = false;

            //$fileType = pathinfo($source);

            if ($info['mime'] == 'image/jpeg')
                $image = @imagecreatefromjpeg($source);
            elseif ($isAlpha = $info['mime'] == 'image/gif') {
                $image = @imagecreatefromgif($source);
            } elseif ($isAlpha = $info['mime'] == 'image/png') {
                $image = @imagecreatefrompng($source);
            } else {
                return $source;
            }
            if ($isAlpha) {
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
            }

            $filename = $name.'.webp';
            imagewebp($image, $destination, $quality);
            unlink($source);
        }
        return $filename;
    }
}
