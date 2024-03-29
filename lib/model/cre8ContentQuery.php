<?php


/**
 * Skeleton subclass for performing query and update operations on the 'cre8_content' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * śro, 27 sty 2010, 13:26:48
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.cre8CmsMenuPlugin.lib.model
 */
class cre8ContentQuery extends Basecre8ContentQuery {

	/**
	 * Returns a new cre8ContentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 *
	 * @return    cre8ContentQuery
	 */
	public static function create($modelAlias = null)
	{
		return new self('propel', 'cre8Content', $modelAlias);
	}

} // cre8ContentQuery
