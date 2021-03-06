<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-12-14
 * Time: 19:07
 */

namespace Toolkit\DataParser;

/**
 * Interface ParserInterface
 *
 * @package Toolkit\DataParser
 * @author  inhere <in.798@qq.com>
 */
interface DataParserInterface
{
    /**
     * @param mixed $data
     *
     * @return string
     */
    public function encode($data): string;

    /**
     * @param string $data
     *
     * @return mixed
     */
    public function decode(string $data);
}
