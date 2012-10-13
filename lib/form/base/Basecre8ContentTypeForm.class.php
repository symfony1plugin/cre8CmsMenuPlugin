<?php

/**
 * cre8ContentType form base class.
 *
 * @method cre8ContentType getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecre8ContentTypeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'label'        => new sfWidgetFormInputText(),
      'plugin_name'  => new sfWidgetFormInputText(),
      'default_path' => new sfWidgetFormInputText(),
      'theme'        => new sfWidgetFormInputText(),
      'template'     => new sfWidgetFormInputText(),
      'module'       => new sfWidgetFormInputText(),
      'action'       => new sfWidgetFormInputText(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'cre8ContentType', 'column' => 'id', 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 128)),
      'description'  => new sfValidatorString(array('required' => false)),
      'label'        => new sfValidatorString(array('max_length' => 128)),
      'plugin_name'  => new sfValidatorString(array('max_length' => 128)),
      'default_path' => new sfValidatorString(array('max_length' => 255)),
      'theme'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'template'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'module'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'action'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'slug'         => new sfValidatorString(array('max_length' => 128)),
    ));

    $this->widgetSchema->setNameFormat('cre8_content_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'cre8ContentType';
  }


}
