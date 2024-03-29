<?php


/**
 * This class defines the structure of the 'cre8_content' table.
 *
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * śro, 27 sty 2010, 13:26:48
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.cre8CmsMenuPlugin.lib.model.map
 */
class cre8ContentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.cre8CmsMenuPlugin.lib.model.map.cre8ContentTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('cre8_content');
		$this->setPhpName('cre8Content');
		$this->setClassname('cre8Content');
		$this->setPackage('plugins.cre8CmsMenuPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CONTENT_TYPE_ID', 'ContentTypeId', 'INTEGER', 'cre8_content_type', 'ID', true, null, null);
		$this->addColumn('DATE_PUBLISHED', 'DatePublished', 'TIMESTAMP', false, null, null);
		$this->addColumn('CUSTOM_PATH', 'CustomPath', 'VARCHAR', false, 255, null);
		$this->addColumn('THEME', 'Theme', 'VARCHAR', false, 255, null);
		$this->addColumn('TEMPLATE', 'Template', 'VARCHAR', false, 255, null);
		$this->addColumn('MODULE', 'Module', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTION', 'Action', 'VARCHAR', false, 255, null);
		$this->addColumn('PAGE_TITLE', 'PageTitle', 'VARCHAR', false, 255, null);
		$this->addColumn('META_KEYWORDS', 'MetaKeywords', 'VARCHAR', false, 255, null);
		$this->addColumn('META_DESCRIPTION', 'MetaDescription', 'VARCHAR', false, 255, null);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 255, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('cre8ContentType', 'cre8ContentType', RelationMap::MANY_TO_ONE, array('content_type_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('cre8MenuItem', 'cre8MenuItem', RelationMap::ONE_TO_MANY, array('id' => 'content_id', ), 'SET NULL', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // cre8ContentTableMap
