<?php

/**
 * cre8MenuItem filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecre8MenuItemFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'left'           => new sfWidgetFormFilterInput(),
      'right'          => new sfWidgetFormFilterInput(),
      'tree_level'     => new sfWidgetFormFilterInput(),
      'label'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'custom_path'    => new sfWidgetFormFilterInput(),
      'content_id'     => new sfWidgetFormPropelChoice(array('model' => 'cre8Content', 'add_empty' => true)),
      'is_primary'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'date_published' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'slug'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'left'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'right'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_level'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'label'          => new sfValidatorPass(array('required' => false)),
      'custom_path'    => new sfValidatorPass(array('required' => false)),
      'content_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'cre8Content', 'column' => 'id')),
      'is_primary'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'date_published' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'slug'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cre8_menu_item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'cre8MenuItem';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'left'           => 'Number',
      'right'          => 'Number',
      'tree_level'     => 'Number',
      'label'          => 'Text',
      'custom_path'    => 'Text',
      'content_id'     => 'ForeignKey',
      'is_primary'     => 'Boolean',
      'date_published' => 'Date',
      'deleted_at'     => 'Date',
      'slug'           => 'Text',
    );
  }
}
