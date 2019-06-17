<?php
/*
 * This file is part of Phypes <https://github.com/2DSharp/Phypes>.
 *
 * (c) Dedipyaman Das <2d@twodee.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Phypes\Exception;


use Throwable;

class InvalidRuleOption extends \Exception
{
    public function __construct(int $option, int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Rule option \"' . $option . '\" not defined', $code, $previous);
    }
}