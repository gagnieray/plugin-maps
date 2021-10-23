<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Configuration file for Maps plugin
 *
 * PHP version 5
 *
 * Copyright © 2012-2021 The Galette Team
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
 *
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2012-2021 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version   SVN: $Id$
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7.4dev - 2012-10-02
 */

$this->register(
    'Galette Maps',     //Name
    'Maps features',    //Short description
    'Johan Cwiklinski', //Author
    '1.6.1',            //Version
    '0.9.5',            //Galette compatible version
    'maps',             //routing name and translation domain
    '2021-10-23',       //Release date
    [   //Permissions needed
        'maps_localize_member'  => 'member',
        'maps_mymap'            => 'member',
        'maps_ilivehere'        => 'member'
    ]
);
