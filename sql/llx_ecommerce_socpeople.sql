-- ===================================================================
-- Copyright (C) 2010 Auguria <franck.charpentier@auguria.net>
-- This program is free software; you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation; either version 2 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program; if not, write to the Free Software
-- Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
--
-- ===================================================================

CREATE TABLE llx_ecommerce_socpeople (
  rowid integer unsigned NOT NULL auto_increment PRIMARY KEY,
  fk_socpeople integer unsigned NOT NULL,
  fk_site integer unsigned NOT NULL,
  remote_id varchar(255) NOT NULL,
  type integer unsigned NOT NULL DEFAULT 1,
  last_update datetime default NULL
) ENGINE=InnoDB COMMENT='Table transition remote site -  Dolibarr';
