<?php

use Source\Core\Connect;
use Source\Core\Message;
use Source\Core\Session;
use Source\Models\User;

/**
 * ####################
 * ###   VALIDATE   ###
 * ####################
 */

/**
 * @param string $email
 * @return boolean
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $password
 * @return boolean
 */
function is_passwd(string $password): bool
{
    if (password_get_info($password)['algo']) {
        return true;
    }

    return (mb_strlen($password) >= CONF_PASSWD_MIN_LEN && mb_strlen($password) <= CONF_PASSWD_MAX_LEN) ? true : false;
}


/**
 * ####################
 * ###   PASSWORD   ###
 * ####################
 */


/**
 * @param string $password
 * @return string
 */
function passwd(string $password): string
{
    return password_hash($password, CONF_PASSWD_ALGO, CONF_PASSWD_OPTIONS);
}

/**
 * @param string $password
 * @param string $hash
 * @return boolean
 */
function passwd_verify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}

/**
 * @param string $hash
 * @return boolean
 */
function passwd_rehash(string $hash): bool
{
    return password_needs_rehash($hash, CONF_PASSWD_ALGO, CONF_PASSWD_OPTIONS);
}

/**
 * @return string
 */
function csrf_input(): string
{
    session()->csrf();
    return "<input type='hidden' name='csrf' value='" . (session()->csrf_token ?? '') . "' />";
}

/**
 * @param $request
 * @return boolean
 */
function csrf_verify($request): bool
{
    if (empty(session()->csrf_token) || empty($request['csrf']) || $request['csrf'] != session()->csrf_token) {
        return false;
    }

    return true;
}

/**
 * ##################
 * ###   STRING   ###
 * ##################
 */


/**
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(
        ['-----', '----', '---', '--'],
        '-',
        str_replace(
            ' ',
            '-',
            trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))
        )
    );
    return $slug;
}

/**
 * @param string $string
 * @return string
 */
function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlyCase = str_replace(
        ' ',
        '',
        mb_convert_case(
            str_replace('-', ' ', $string),
            MB_CASE_TITLE
        )
    );

    return $studlyCase;
}

/**
 * @param string $string
 * @return string
 */
function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}

/**
 * @param string $string
 * @return string
 */
function str_title(string $string): string
{
    return mb_convert_case(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * @param string $string
 * @param integer $limit
 * @param string $pointer
 * @return string
 */
function str_limit_words(string $string, int $limit, string $pointer = '...'): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(' ', $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }
    $words = implode(' ', array_slice($arrWords, 0, $limit));

    return "{$words}{$pointer}";
}

/**
 * @param string $string
 * @param integer $limit
 * @param string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, string $pointer = '...'): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    if (mb_strlen($string) <= $limit) {
        return $string;
    } else {
        $chars = mb_substr(
            $string,
            0,
            mb_strrpos(mb_substr($string, 0, $limit), ' ')
        );
        return "{$chars}{$pointer}";
    }
}


/**
 * ###############
 * ###   URL   ###
 * ###############
 */


/**
 * @param string $path
 * @return string
 */
function url(string $path): string
{
    return CONF_URL_BASE . '/' . ($path[0] == '/' ? mb_substr($path, 1) : $path);
}

/**
 * @param string $url
 * @return void
 */
function redirect(string $url): void
{
    header('HTTP/1.1 302 Redirect');
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }

    $location = url($url);
    header("Location: {$location}");
    exit;
}


/**
 * ################
 * ###   CORE   ###
 * ################
 */


/**
 * @return PDO
 */
function db(): PDO
{
    return Connect::getInstance();
}

/**
 * @return Message
 */
function message(): Message
{
    return new Message();
}

/**
 * @return Session
 */
function session(): Session
{
    return new Session();
}

/**
 * #################
 * ###   MODEL   ###
 * #################
 */

/**
 * @return User
 */
function user(): User
{
    return new User();
}
