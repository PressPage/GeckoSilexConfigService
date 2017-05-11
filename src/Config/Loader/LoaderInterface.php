<?php declare(strict_types=1);

/*
 * This file is part of the GeckoPackages.
 *
 * (c) GeckoPackages https://github.com/GeckoPackages
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GeckoPackages\Silex\Services\Config\Loader;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\Filesystem\Exception\IOException;

/**
 * @api
 *
 * @author SpacePossum
 */
interface LoaderInterface
{
    /**
     * @param string $file
     *
     * @throws FileNotFoundException
     * @throws IOException
     * @throws \UnexpectedValueException
     *
     * @return mixed
     */
    public function getConfig(string $file);
}
