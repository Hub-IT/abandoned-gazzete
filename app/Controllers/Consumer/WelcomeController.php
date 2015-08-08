<?php namespace Gazzete\Controllers\Consumer;

use Gazzete\Controllers\BaseController;
use Gazzete\Models\Repositories\Categories\Db\MySqlDbCategoryRepository;
use Gazzete\Models\Repositories\Categories\DbCategoryRepository;

/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 5/20/2015
 */
class WelcomeController extends BaseController
{

	public function __construct()
	{
		parent::__construct();

		$this->categoriesReporitory = new DbCategoryRepository(new MySqlDbCategoryRepository());
	}

	public function welcome()
	{
		$articles[] = ['link'     => 'http://bigthink.com/videos/s-mcchrystal-cybersecurity',
		               'title'    => 'Cyberwarfare is not Game of Thrones. A Wall Will Not Work.',
		               'summary'  => "According to retired U.S. Army General Stanley McChrystal, top-notch cybersecurity isn't modeled after the Maginot Line or a giant wall attempting to block outside forces from getting in. Instead, we need to design cybersecurity that acts like an immune system, learning on-the-go every time a new or unique challenge emerges.",
		               'duration' => '4:15 min',
		               'author'   => [
			               'link'   => 'http://bigthink.com/experts/stanley-mcchrystal',
			               'name'   => 'STANLEY MCCHRYSTAL',
			               'avatar' => 'http://s3.amazonaws.com/bt_assets/system/user_icons/481398/original/Stanley-McChrystal-HS.png?1432488120',],
		               'category' => [
			               'link' => 'http://bigthink.com/#articles-nav-dropdown-65',
			               'name' => 'Technology']];

		$categories = $this->categoriesReporitory->getAll();

		$this->twig->display('consumer/welcome.twig', compact('articles', 'categories'));
	}

}