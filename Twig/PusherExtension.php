<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lopi\Bundle\PusherBundle\Twig;

use Pusher\Pusher;

/**
 * @author Pierre-Louis Launay <laupi.frpar@gmail.com>
 */
class PusherExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    private $pusher;

    /**
     * @param Pusher $pusher
     */
    public function __construct(Pusher $pusher)
    {
        $this->pusher = $pusher;
    }

    /**
     * @return array
     */
    public function getGlobals()
    {
        return [
            'pusher_key' => $this->pusher->getSettings()['auth_key'],
        ];
    }
}
