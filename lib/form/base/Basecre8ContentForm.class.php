<?php

/**
 * cre8Content form base class.
 *
 * @method cre8Content getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecre8ContentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'content_type_id'  => new sfWidgetFormPropelChoice(array('model' => 'cre8ContentType', 'add_empty' => false)),
      'date_published'   => new sfWidgetFormDateTime(),
      'custom_path'      => new sfWidgetFormInputText(),
      'theme'            => new sfWidgetFormInputText(),
      'template'         => new sfWidgetFormInputText(),
      'module'           => new sfWidgetFormInputText(),
      'action'           => new sfWidgetFormInputText(),
      'page_title'       => new sfWidgetFormInputText(),
      'meta_keywords'    => new sfWidgetFormInputText(),
      'meta_description' => new sfWidgetFormInputText(),
      'slug'             => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'cre8Content', 'column' => 'id', 'required' => false)),
      'content_type_id'  => new sfValidatorPropelChoice(array('model' => 'cre8ContentType', 'column' => 'id')),
      'date_published'   => new sfValidatorDateTime(array('required' => false)),
      'custom_path'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'theme'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'template'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'module'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'action'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'page_title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
      'updated_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cre8_content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'cre8Content';
  }


}
