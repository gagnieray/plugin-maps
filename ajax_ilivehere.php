<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * I live here
 * Make possible to search and select a member
 *
 * This page can't be loaded directly, only via ajax.
 *
 * PHP version 5
 *
 * Copyright © 2012 The Galette Team
 *
 * This file is part of Galette (http://galette.tuxfamily.org).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Plugins
 * @package   GaletteMaps
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2012 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version   SVN: $Id$
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7.4dev - 2012-10-04
 */

use Galette\Common\KLogger as KLogger;
use Galette\Entity\Adherent as Adherent;
use GaletteMaps\Coordinates as Coordinates;

$base_path = '../../';
require_once $base_path . 'includes/galette.inc.php';
require_once '_config.inc.php';
require_once 'lib/GaletteMaps/Coordinates.php';

if ( !$login->isLogged() /*|| !$login->isAdmin() && !$login->isStaff()*/ ) {
    $log->log(
        'Trying to display ajax_ilivehere.php without appropriate permissions',
        KLogger::INFO
    );
    die();
}

$member = null;

if ( $login->isSuperAdmin() && $member !== null ) {
    $log->log(
        'SuperAdmin does note live anywhere!',
        KLogger::INFO
    );
    die();
}

if ( $member === null ) {
    $member = new Adherent($login->login);
}

$coords = new Coordinates();
$res = $coords->setCoords(
    $member->id,
    $_POST['latitude'],
    $_POST['longitude']
);

$message = '';
if ( $res === true ) {
    $message = _T("New coordinates has been stored!");
} else {
    $message = _T("Coordinates has not been stored :(");
}

echo $message;
?>
