<?php

/**
 * cre8MenuItem filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormFilterTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class cre8MenuItemFormFilter extends Basecre8MenuItemFormFilter
{
  public function configure()
  {
    unset(
            $this['content_id']
    );
  }
}
