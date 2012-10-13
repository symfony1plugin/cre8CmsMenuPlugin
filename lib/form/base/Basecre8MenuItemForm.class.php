<?php

/**
 * cre8MenuItem form base class.
 *
 * @method cre8MenuItem getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecre8MenuItemForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'left'           => new sfWidgetFormInputText(),
      'right'          => new sfWidgetFormInputText(),
      'tree_level'     => new sfWidgetFormInputText(),
      'label'          => new sfWidgetFormInputText(),
      'custom_path'    => new sfWidgetFormInputText(),
      'content_id'     => new sfWidgetFormPropelChoice(array('model' => 'cre8Content', 'add_empty' => true)),
      'is_primary'     => new sfWidgetFormInputCheckbox(),
      'date_published' => new sfWidgetFormDateTime(),
      'deleted_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'cre8MenuItem', 'column' => 'id', 'required' => false)),
      'left'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'right'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_level'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'label'          => new sfValidatorString(array('max_length' => 255)),
      'custom_path'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content_id'     => new sfValidatorPropelChoice(array('model' => 'cre8Content', 'column' => 'id', 'required' => false)),
      'is_primary'     => new sfValidatorBoolean(array('required' => false)),
      'date_published' => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'     => new sfValidatorDateTime(array('required' => false)),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'cre8MenuItem', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('cre8_menu_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'cre8MenuItem';
  }


}
