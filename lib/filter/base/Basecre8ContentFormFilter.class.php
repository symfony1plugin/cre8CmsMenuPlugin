<?php

/**
 * cre8Content filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecre8ContentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'content_type_id'  => new sfWidgetFormPropelChoice(array('model' => 'cre8ContentType', 'add_empty' => true)),
      'date_published'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'custom_path'      => new sfWidgetFormFilterInput(),
      'theme'            => new sfWidgetFormFilterInput(),
      'template'         => new sfWidgetFormFilterInput(),
      'module'           => new sfWidgetFormFilterInput(),
      'action'           => new sfWidgetFormFilterInput(),
      'page_title'       => new sfWidgetFormFilterInput(),
      'meta_keywords'    => new sfWidgetFormFilterInput(),
      'meta_description' => new sfWidgetFormFilterInput(),
      'slug'             => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'content_type_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'cre8ContentType', 'column' => 'id')),
      'date_published'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'custom_path'      => new sfValidatorPass(array('required' => false)),
      'theme'            => new sfValidatorPass(array('required' => false)),
      'template'         => new sfValidatorPass(array('required' => false)),
      'module'           => new sfValidatorPass(array('required' => false)),
      'action'           => new sfValidatorPass(array('required' => false)),
      'page_title'       => new sfValidatorPass(array('required' => false)),
      'meta_keywords'    => new sfValidatorPass(array('required' => false)),
      'meta_description' => new sfValidatorPass(array('required' => false)),
      'slug'             => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('cre8_content_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'cre8Content';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'content_type_id'  => 'ForeignKey',
      'date_published'   => 'Date',
      'custom_path'      => 'Text',
      'theme'            => 'Text',
      'template'         => 'Text',
      'module'           => 'Text',
      'action'           => 'Text',
      'page_title'       => 'Text',
      'meta_keywords'    => 'Text',
      'meta_description' => 'Text',
      'slug'             => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
