<?php
/**
 * Created by PhpStorm.
 * User: Štěpán Fichtner
 * Date: 14. 3. 2017
 * Time: 14:43
 */
namespace App\Presenters;

use Kdyby\Translation\Translator;
use Nette;


class BasePresenter extends Nette\Application\UI\Presenter
{
	/** @persistent */
	public $locale;

	/** @var Translator @inject */
	public $translator;
}
